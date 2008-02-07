<?php
declare(encoding = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */ 

/**
 * TypoScript View for a Page
 * 
 * @package		CMS
 * @version 	$Id:T3_TYPO3_View_Page.php 262 2007-07-13 10:51:44Z robert $
 * @copyright	Copyright belongs to the respective authorst
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class T3_TYPO3_View_Page extends T3_FLOW3_MVC_View_Abstract {

	/**
	 * Renders a page from the given TypoScript
	 *
	 * @param  array				$typoScriptObjectTree: The TypoScript tree (model)
	 * @return string				The rendered content
	 * @author Robert Lemke <robert@typo3.org>
	 */
	public function render() {
		throw new LogicException('Not properly implemented.');
		
		foreach ($typoScriptObjectTree as $name => $typoScriptObject) {
			if ($typoScriptObject instanceof T3_TYPO3_TypoScript_Page) {
				$typoScriptPageObjectName = $name;
			}
		}
		if (!isset($typoScriptPageObjectName)) {
			return 'Error: No TypoScript Page object has been defined for this view.';		
		} else {
			return $typoScriptObjectTree[$typoScriptPageObjectName]->getRenderedContent();			
		}
	}

}

?>