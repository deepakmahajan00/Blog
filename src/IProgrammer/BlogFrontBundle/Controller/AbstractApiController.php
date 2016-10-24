<?php

namespace IProgrammer\BlogFrontBundle\Controller;

use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandlerInterface;
use JMS\Serializer\SerializationContext;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AbstractApiController
 * @package IProgrammer\BlogFrontBundle\Controller
 */
abstract class AbstractApiController extends Controller implements PaginatedResponseInterface
{
    const DEFAULT_PAGINATION_LIMIT = 25;
    const DEFAULT_PAGINATION_OFFSET = 0;

    /** @var ViewHandlerInterface */
    protected $viewHandler;


    /** @var Request */
    protected $request;

    /** @var array */
    protected $params;

    /**
     * AbstractApiController constructor.
     * @param ViewHandlerInterface $viewHandler
     * @param RequestStack $requestStack
     */
    public function __construct(
        ViewHandlerInterface $viewHandler,
        RequestStack $requestStack
    ) {
        $this->viewHandler = $viewHandler;
        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * @param null|array|object $data
     * @param int          $code
     * @param array        $serializationGroups
     *
     * @return Response
     */
    public function renderResponse($data = null, $code = Response::HTTP_OK, $serializationGroups = [])
    {
        $context = SerializationContext::create();

        if (!empty($serializationGroups)) {
            $context->setGroups($serializationGroups);
        }

        $view = View::create();
        $view->setData($data);
        $view->setStatusCode($code);
        $view->setSerializationContext($context);

        return $this->viewHandler->handle($view);
    }

    /**
     * @return int
     */
    public function getPaginationLimit()
    {
        return $this->request->query->get('limit', static::DEFAULT_PAGINATION_LIMIT); 
    }

    /**
     * @return int
     */
    public function getPaginationOffset()
    {
        return $this->request->query->get('offset', static::DEFAULT_PAGINATION_OFFSET);
    }

    /**
     * @param array|object $data
     * @param int          $totalCount
     * @param int          $code
     * @param array        $serializationGroups
     *
     * @return Response
     */
    public function renderPaginatedResponse(
        array $data,
        $totalCount,
        $code = Response::HTTP_OK,
        $serializationGroups = []
    ) {
        $metaData['_metadata'] = [
            'totalCount' => $totalCount,
            'limit' => $this->getPaginationLimit(),
            'offset' => $this->getPaginationOffset()
        ];

        $data = array_merge($data, $metaData);

        return $this->renderResponse($data, $code, $serializationGroups);
    }

    /**
     * @param int $code
     *
     * @return Response
     */
    public function renderEmptyResponse($code = Response::HTTP_NO_CONTENT)
    {
        return $this->renderResponse(null, $code);
    }

    /**
     * @return array
     */
    public function getParams()
    {
        if (empty($this->params)) {
            $requestParams = $this->request->isMethod(Request::METHOD_GET)
                ? $this->request->query
                : $this->request->request;

            $params = (array) ($requestParams->count()
                ? $requestParams->all()
                : json_decode($this->request->getContent(), true));

            $this->params = array_filter(
                $params,
                function(&$param) {
                    return is_string($param) ? !empty($param = trim($param)) : !is_null($param);
                }
            );
        }

        return $this->params;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasParam($key)
    {
        return array_key_exists($key, $this->getParams());
    }

    /**
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function getParam($key, $default = null)
    {
        return $this->hasParam($key) ? $this->params[$key] : $default;
    }

}
