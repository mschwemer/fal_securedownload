<?php
namespace BeechIt\FalSecuredownload\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 20014 Frans Saris <frans@beech.it>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * FileTreeController
 *
 * @package BeechIt\FalSecuredownload\Controller
 */
class FileTreeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Render file tree
	 */
	public function treeAction() {
		$resourceFactory = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance();
		$folder = $resourceFactory->getFolderObjectFromCombinedIdentifier($this->settings['storage'].':'.$this->settings['folder']);

		$this->view->assign('folder', $folder);
	}
}