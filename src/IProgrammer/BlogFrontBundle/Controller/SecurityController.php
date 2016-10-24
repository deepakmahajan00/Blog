<?php

namespace IProgrammer\BlogFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use IProgrammer\BlogFrontBundle\Entity\Blog;
use IProgrammer\BlogFrontBundle\Form\BlogType;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_form")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);

        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }

        return array(
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

    /**
     * @Route("/", name="homepage")
     * @Route("/{category}", name="category_homepage", requirements={"category": "\d+"})
     * @Template()
     */
    public function homepageAction($category = null)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $em = $this->getDoctrine()->getManager();

        if ($category == null) {
            $criteria = $this->get('iprogrammer.blog_front.service.blog_service')->createCriteria(
                ['user' => $this->getUser()->getId()]
            );
            $blogs = $this->get('iprogrammer.blog_front.service.blog_service')->getAll($criteria);
        } else {
            $criteria = $this->get('iprogrammer.blog_front.service.blog_service')->createCriteria(
                [
                    'user' => $this->getUser()->getId(),
                    'category' => $category
                ]
            );
            $blogs = $this->get('iprogrammer.blog_front.service.blog_service')->findByCategory([
                'user' => $this->getUser()->getId(),
                'category' => $category
            ]);
        }

        $criteria = $this->get('iprogrammer.blog_front.service.category_service')->createCriteria(
            []
        );
        $categories = $this->get('iprogrammer.blog_front.service.category_service')->getAll($criteria);

        return $this->render('IProgrammerBlogFrontBundle:Security:homepage.html.twig',
            ['blogs' => $blogs, 'categories' => $categories]);
    }

    /**
     * @Route("/blog/{id}", name="blog")
     * @Template()
     */
    public function blogAction($id)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $criteria = $this->get('iprogrammer.blog_front.service.blog_service')->createCriteria(
            ['user' => $this->getUser()->getId(), 'id' => $id]
        );

        $blog = $this->get('iprogrammer.blog_front.service.blog_service')->getAll($criteria);

        return $this->render('IProgrammerBlogFrontBundle:Security:blog-details.html.twig', ['blog' => $blog]);
    }

    /**
     * @Route("/new_blog", name="new_blog")
     * @Template()
     */
    public function newBlogAction(Request $request)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $criteria = $this->get('iprogrammer.blog_front.service.category_service')->createCriteria(
            []
        );
        $categories = $this->get('iprogrammer.blog_front.service.category_service')->getAll($criteria);

        $blog = new Blog();
        $blog->setUser($this->getUser());

        $form   = $this->createForm(new BlogType() , $blog);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();
            return $this->redirect($this->generateUrl('homepage'));
        }

        return array(
            'entity' => $blog ,
            'form'   => $form->createView()
        );
    }

    /**
     * @Route("/blog-category/{category}", name="category_blog")
     */
    public function categoriesBlogAction($category)
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('logout');
        }

        $categories = $this->get('iprogrammer.blog_front.service.category_service')->findAllByCategoriesUser($category, $this->getUser()->getId());
        return $this->render('IProgrammerBlogFrontBundle:Security:categories.html.twig', ['categories' => $categories]);
    }
}