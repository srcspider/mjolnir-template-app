<?php return array
	(
		'modules' => array
			(			
				// project modules
				MODPATH.'demo' => 'demo',
			
				// library modules
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'legacy' => 'ibidem\legacy',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'backend' => 'ibidem\backend',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'access' => 'ibidem\access',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'base' => 'ibidem\base',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'cache' => 'ibidem\cache',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'theme' => 'ibidem\theme',
				PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'schematics' => 'ibidem\schematics',
			),
		'namespaces' => array
			(
				// libraries accessed via explicit calls only
				'ibidem\types' => PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'types',
				'ibidem\cfs' => PLGPATH.'ibidem'.DIRECTORY_SEPARATOR.'cfs',
			),
		'themes' => array
			(
				// explicit themes; themes can also just be embeded in modules,
				// in which case there's no need for them to appear here.
				'classic' => DOCROOT.'themes/classic',
			),
	);