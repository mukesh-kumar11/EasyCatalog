<?php

namespace EasyCatalogExportBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @Route("/easy_catalog_export")
     */
    public function indexAction(Request $request)
    {
        $fields = $request->request->get("fields");
        $class_id = $request->request->get("class_id");
        $filters = $request->request->get("filters");
 
        print_r($fields);  
        print_r($class_id);
        print_r($filters);
        die;
        return new Response('Hello world from easy_catalog_export');
    }
     /**
     * @Route("/easy_catalog_export/save")
     */
    public function saveAction($data)
    {
        print_r($data); die;
        return new Response('Hello world from easy_catalog_export');
    }
}
