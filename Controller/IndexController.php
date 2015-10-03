<?php

namespace Cms\ContentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Cms\ContentManagerBundle\Form\ContentForm;

class IndexController extends Controller
{

    private $templating;
    private $contentForm;

    public function __construct(EngineInterface $templating, ContentForm $contentForm)
    {
        $this->templating = $templating;
        $this->contentForm = $contentForm;
    }

    public function indexAction()
    {

        //$content = new ContentForm();
        return $this->templating->renderResponse('ContentManagerBundle:Content:content.html.twig',
            array(
                'pageName' => 'Content Manager',
                'contentForm' => $this->contentForm
            ));

    }

    public function editAction()
    {

        return $this->templating->renderResponse('ContentManagerBundle:Content:edit.html.twig', array('pageName' => 'Content Manager'));

    }

    public function addAction()
    {

        //$content = new ContentForm();
        return $this->templating->renderResponse('ContentManagerBundle:Content:add.html.twig',

            array(
                'pageName' => 'Content Manager',
                'contentForm' => $this->contentForm
            ));


    }

}
