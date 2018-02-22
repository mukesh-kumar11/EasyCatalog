<?php

namespace EasyCatalogExportBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject;


class DefaultController extends FrontendController
{
    /**
     * @Route("/easy_catalog_export")
     */
    public function indexAction(Request $request)
    {
        
    }
     
}
