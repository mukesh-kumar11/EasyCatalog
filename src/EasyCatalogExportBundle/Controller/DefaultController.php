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
        $classId = $request->request->get("class_id");
        $filters = $request->request->get("filters");
        //get cache info
        //get grid data here
        //generate xml & create url
        //update the export object
        
        return $this->json(array(
			"filters" => json_decode($filters),
			"columnConfig" => json_decode($fields),
			"classId" => $classId,
		));
    }
     
}
