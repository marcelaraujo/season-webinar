<?php

class Application_Form_Contact extends Yeap_Form {

	/**
	 * Override the base form constructor.
	 *
	 * @param null $options
	 */
	public function __construct( $options = null ) {

		/**
		 * Calling parent constructor.
		 */
		parent::__construct( $options );

		/**
		 * Setting configs.
		 */
		$this->setConfig( new Zend_Config_Xml( APPLICATION_PATH . '/forms/xml/basic.xml' ) );
	}

	/**
     * Render form
     *
     * @param  Zend_View_Interface $view
     * @return string
     */
    public function render(Zend_View_Interface $view = null) {

    	/**
    	 * Getting elements.
    	 */
    	$elements = $this->getElements();

    	/* @var $element Zend_Form_Element */
    	foreach ( $elements  as $element ) {

    		if( $element->getName() == 'username' ) {
    			$this->removeElement('username');
    		}

    		#if( $element->getName() == 'username' && 1 == 0 ) {
    		#	$this->removeElement('username');
    		#}
    	}

    	return parent::render($view);

	}
}
