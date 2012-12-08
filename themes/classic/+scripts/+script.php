<?php namespace app;

\defined('APPVERSION') or \define('APPVERSION', '0.0');

// error reporting may duplicate the definition
if ( ! \function_exists('\app\index'))
{
	// we use an in-file function so ruby can process the file
	function index()
	{
		$args = \func_get_args();

		$result = [];
		foreach ($args as $array)
		{
			foreach ($array as $item)
			{
				if ( ! \in_array($item, $result))
				{
					$result[] = $item;
				}
			}
		}

		return $result;
	}
}

return array
	(
		'version' => APPVERSION, # used in cache busting; update as necesary

		// set the script.root to '' (empty string) when writing (entirely) just
		// plain old js files; and not compiling coffee scripts, etc
		'script.root' => 'src'.DIRECTORY_SEPARATOR,

		// preload is a list of URLs to be loaded before any other script
		'preload' => array
			(
				// empty
			),

		// will be included in all explicity targets; if a target needs to be
		// script free then simply ommit it in the targets declaration bellow
		'common' => array
			(
				'+lib/jquery/jquery-1.8.3',

			// error reporting
				'+lib/stacktrace',
				'+lib/onerror',
			),

		// enables closure compiler mode
		'closure-mode' => true,

		// enables single [complete-script] for all pages;
		'complete-mode' => false,

		// script to use in complete-mode
		'complete-script' => index
			(
				// empty
			),

		// mapping targets to files
		'targets' => array
			(


			//// Demo //////////////////////////////////////////////////////////

				'demo' => array
					(
						// load common
					),

				'about' => array
					(
						// mjolnir
						'+lib/mjolnir/jshadow-1.1',
						'+lib/mjolnir/shadows/tabs',

						// syntax highlighter
						'+vendor/SyntaxHighlighter/shCore',
						'+vendor/SyntaxHighlighter/scripts/shBrushPhp',
						'+vendor/SyntaxHighlighter/scripts/shBrushPlain',
						'+vendor/SyntaxHighlighter/scripts/shBrushCss',
						'+vendor/SyntaxHighlighter/scripts/shBrushJScript',
						'+vendor/SyntaxHighlighter/scripts/shBrushXml',
						'+vendor/SyntaxHighlighter/init',
					),

				'start' => array
					(
						// mjolnir
						'+lib/mjolnir/jshadow-1.1',
						'+lib/mjolnir/shadows/tabs',

						// syntax highlighter
						'+vendor/SyntaxHighlighter/shCore',
						'+vendor/SyntaxHighlighter/scripts/shBrushPhp',
						'+vendor/SyntaxHighlighter/scripts/shBrushPlain',
						'+vendor/SyntaxHighlighter/scripts/shBrushCss',
						'+vendor/SyntaxHighlighter/scripts/shBrushJScript',
						'+vendor/SyntaxHighlighter/scripts/shBrushXml',
						'+vendor/SyntaxHighlighter/init',
					),

			//// Style Reference ///////////////////////////////////////////////

				'ref' => array # should be called only via mockup/
					(
						// chosen
						'+lib/jquery/chosen/jquery.chosen',
						'+lib/jquery/chosen/init',

						// syntax highlighter
						'+vendor/SyntaxHighlighter/shCore',
						'+vendor/SyntaxHighlighter/scripts/shBrushPhp',
						'+vendor/SyntaxHighlighter/scripts/shBrushPlain',
						'+vendor/SyntaxHighlighter/scripts/shBrushCss',
						'+vendor/SyntaxHighlighter/scripts/shBrushJScript',
						'+vendor/SyntaxHighlighter/scripts/shBrushXml',
						'+vendor/SyntaxHighlighter/init',

						// jquery
						'+lib/jquery/ui/jquery-ui-all',

						// mjolnir
						'+lib/mjolnir/jshadow-1.1',
						'+lib/mjolnir/shadows/tabs',
						'+lib/mjolnir/shadows/ui',
						'+lib/mjolnir/shadows/xlinker',

						// twitter bootstrap
						'+lib/twitter/bootstrap-affix',
						'+lib/twitter/bootstrap-alert',
						'+lib/twitter/bootstrap-button',
						'+lib/twitter/bootstrap-carousel',
						'+lib/twitter/bootstrap-collapse',
						'+lib/twitter/bootstrap-dropdown',
						'+lib/twitter/bootstrap-modal',
						'+lib/twitter/bootstrap-popover',
						'+lib/twitter/bootstrap-scrollspy',
						'+lib/twitter/bootstrap-tab',
						'+lib/twitter/bootstrap-tooltip',
						'+lib/twitter/bootstrap-transition',
						'+lib/twitter/bootstrap-typeahead',
					),

				'guide' => array # should be called only via mockup/
					(
					// syntax highlighter
						'+vendor/SyntaxHighlighter/shCore',
						'+vendor/SyntaxHighlighter/scripts/shBrushPhp',
						'+vendor/SyntaxHighlighter/scripts/shBrushPlain',
						'+vendor/SyntaxHighlighter/scripts/shBrushCss',
						'+vendor/SyntaxHighlighter/scripts/shBrushJScript',
						'+vendor/SyntaxHighlighter/scripts/shBrushXml',
						'+vendor/SyntaxHighlighter/init',

					// jquery
						'+lib/jquery/ui/jquery-ui-all',

					// chosen
						'+lib/jquery/chosen/jquery.chosen',
						'+lib/jquery/chosen/init',

					// twitter bootstrap
						'+lib/twitter/bootstrap-affix',
						'+lib/twitter/bootstrap-alert',
						'+lib/twitter/bootstrap-button',
						'+lib/twitter/bootstrap-carousel',
						'+lib/twitter/bootstrap-collapse',
						'+lib/twitter/bootstrap-dropdown',
						'+lib/twitter/bootstrap-modal',
						'+lib/twitter/bootstrap-tooltip',
						'+lib/twitter/bootstrap-popover',
						'+lib/twitter/bootstrap-scrollspy',
						'+lib/twitter/bootstrap-tab',
						'+lib/twitter/bootstrap-transition',
						'+lib/twitter/bootstrap-typeahead',

					// mjolnir
						'+lib/mjolnir/jsend-1.0',
						'+lib/mjolnir/jshadow-1.1',
						'+lib/mjolnir/shadows/tabs',
						'+lib/mjolnir/shadows/ui',
						'+lib/mjolnir/shadows/xlinker',
						'+lib/mjolnir/shadows/saveme',
						'+lib/mjolnir/shadows/xref',
						'+lib/mjolnir/shadows/xsync',
						'+lib/mjolnir/shadows/xload',
						'+lib/mjolnir/shadows/xselect',
						'+lib/mjolnir/shadows/backselect',
						'+lib/mjolnir/shadows/equation',
					),

			//// Exceptions ////////////////////////////////////////////////////

				'exception-NotFound' => array
					(
						// empty
					),
				'exception-NotAllowed' => array
					(
						// empty
					),
				'exception-NotApplicable' => array
					(
						// empty
					),
				'exception-Unknown' => array
					(
						// empty
					),
			),
	);

