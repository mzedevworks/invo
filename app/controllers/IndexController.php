<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Tapinda Tapinda');
        parent::initialize();
    }
    public function indexAction()
    {
        if(!$this->request->isPost()){
            $this->flash->success('Iyi ndophalcon yeduka iyi kana waona page iri ibva waziva kuti you are on the right direction. But please usataura nesu itest site');
        }
    }

}

