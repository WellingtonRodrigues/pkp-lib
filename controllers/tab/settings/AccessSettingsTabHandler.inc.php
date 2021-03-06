<?php

/**
 * @file controllers/tab/settings/AccessSettingsTabHandler.inc.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AccessSettingsTabHandler
 * @ingroup controllers_tab_settings
 *
 * @brief Handle AJAX operations for tabs on Access and Security page.
 */

// Import the base Handler.
import('lib.pkp.controllers.tab.settings.ManagerSettingsTabHandler');

class AccessSettingsTabHandler extends ManagerSettingsTabHandler {

	/**
	 * Constructor
	 */
	function AccessSettingsTabHandler() {
		parent::ManagerSettingsTabHandler();
		$this->setPageTabs(array(
			'users' => 'core:controllers/tab/settings/users.tpl',
			'roles' => 'core:controllers/tab/settings/roles.tpl',
			'siteAccessOptions' => 'controllers.tab.settings.siteAccessOptions.form.SiteAccessOptionsForm',
		));
	}

	/**
	 * @see PKPHandler::setupTemplate()
	 * @param $request PKPKRequest
	 */
	function setupTemplate($request) {
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('oldUserId', (int) $request->getUserVar('oldUserId')); // for merging users.
		parent::setupTemplate($request);
	}
}

?>
