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
        $columnConfig = $request->request->get("columnConfig");
        $classId = $request->request->get("class_id");
        $filters = $request->request->get("filters");
        print_r(json_decode($filters)); die;
        //getting objects
        $myObject =  \Pimcore\Model\DataObject\EasyCatalogExport::getById(12457);
        $myObject->setFilters($filters);    
        $myObject->save();
        print_r($myObject); die;
        //get cache info
        //get grid data here
        //generate xml & create url
        //update the export object
        
        return $this->json(array(
			"filters" => json_decode($filters),
			"columnConfig" => json_decode($columnConfig),
			"classId" => $classId,
		));
    }
     
}
