<?php

namespace IProgrammer\BlogFrontBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

interface PaginatedResponseInterface
{
    /**
     * @return int
     */
    public function getPaginationLimit();

    /**
     * @return int
     */
    public function getPaginationOffset();

    /**
     * @param array $data
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
    );
}