<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {

    	$form = new Application_Form_Contact();

    	$request = $this->getRequest();

    	if( $request->isPost() ) {

    		if( $form->isValid( $request->getParams() ) ) {

    			echo "formulário válido";

    		}

    		echo "<pre>";

    		var_dump( $form->getValues() );

    		echo "</pre>";

    	}

    	$this->view->form = $form->render();
    }

}

