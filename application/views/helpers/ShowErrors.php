<?php
/**
 * InPhonex Client Application
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.inphonex.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Application
 * @package    View
 * @subpackage Helper
 * @copyright  Copyright (c) 2003-2011 InPhonex. (http://www.inphonex.com)
 * @license    http://www.inphonex.com/license/new-bsd     New BSD License
 */
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
