<?php
/**
 * @defgroup plugins_citationParser_paracite ParaCite Citation Parser
 */

/**
 * @file plugins/citationParser/paracite/PKPParaciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPParaciteCitationParserPlugin
 * @ingroup plugins_citationParser_paracite
 *
 * @brief Cross-application ParaCite citation parser
 */


import('lib.pkp.classes.plugins.Plugin');

class PKPParaciteCitationParserPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPParaciteCitationParserPlugin() {
		parent::Plugin();
	}


	//
	// Override protected template methods from Plugin
	//
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path) {
		if (!parent::register($category, $path)) return false;
		$this->addLocaleData();
		return true;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return 'ParaciteCitationParserPlugin';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationParser.paracite.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationParser.paracite.description');
	}
}

?>
