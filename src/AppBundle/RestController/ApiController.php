<?php

namespace AppBundle\RestController;

use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    /**
     * @Route("/api/demo", name="demo")
     */
    public function demoAction()
    {
        /*
         * To get user:
         * $user = $this->get('security.context')->getToken()->getUser();
         *
         * Check user roles:
         * if ($this->get('security.context')->isGranted('ROLE_TEST') === FALSE) {
         *   throw new AccessDeniedException();
         * }
         */
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);
    }
}
