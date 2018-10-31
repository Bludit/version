<?php
$version = array(
	'stable'=>array(
		'version'=>'3.3.0',
		'codeName'=>'Water',
		'build'=>'20181030',
		'releaseDate'=>'2018-10-30',
		'downloadLink'=>'https://bludit.s3.nl-ams.scw.cloud/bludit-3-3-0.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/3.3.0',
		'github'=>'https://github.com/bludit/bludit/releases/tag/3.3.0',
		'blog'=>'https://blog.bludit.com/bludit-3-3-0'
	),
	'beta'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>'',
		'blog'=>''
	),
	'alpha'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>'',
		'blog'=>''
	)
);
if( !defined('BLUDIT')) {
	header("Content-type:application/json");
	exit( json_encode($version) );
}
