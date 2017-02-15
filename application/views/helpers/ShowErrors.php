<?php

class Application_View_Helper_ShowErrors extends Zend_View_Helper_Abstract
{
	public function showErrors( $errors = NULL )
	{
		if ( empty( $errors ) ) {
			return '';
		}

		$content = '<div class="alert alert-error fade in"><button type="button" class="close" data-dismiss="alert">&times;</button>';

		if ( $errors instanceof Exception && !$errors->getDetail()->isEmpty()) {
			$messages = $errors->getDetail();
			foreach ( $messages->getList() as $message ) {
				$content .= "<p class=\"nomargin\">" . $message->getMessage() . "</p>";
			}
		} elseif ( ( $errors instanceof Exception ) || ( $errors instanceof Zend_Exception )) {
			$content .= "<p class=\"nomargin\">" . $errors->getMessage() . "</p>";
		} elseif ( is_array( $errors ) && count( $errors ) > 0 ) {
			foreach ($errors as $error) {
				$content .= "<p class=\"nomargin\">{$error}</p>";
			}
		}

		return $content . '</div>';
	}

}
