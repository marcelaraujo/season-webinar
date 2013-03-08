<?php

	class Yeap_Form extends Twitter_Bootstrap_Form_Horizontal {

		/**
		 * Override the base form constructor.
		 *
		 * @param null $options
		 */
		public function __construct( $options = null ) {

			/**
			 * Adding custom elements.
			 */
			$this->addPrefixPath('Yeap_Form_Element', 'Yeap/Form/Element', 'ELEMENT');

			/**
			 * Adding custom decorators.
			 */
			$this->addElementPrefixPath('Yeap_Form_Decorator', 'Yeap/Form/Decorator', 'DECORATOR');

			/**
			 * Adding custom validators
			 */
			$this->addElementPrefixPath('Yeap_Validate', 'Yeap/Validate', 'VALIDATE');

			/**
			 * Calling parent constructor.
			 */
			parent::__construct($options);
		}

	}
