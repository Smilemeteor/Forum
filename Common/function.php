<?php 

function C($key)
{
	global $config;
	return $config[$key];
}

function __autoload($className)
{
	//print_r($className);die;
	include './'.$className.'.php';
}

function  url($controller,$action,$param=[])
{   
	$url=APP_HOST.'./index.php?c='.$controller.'&a='.$action;

    if(!empty($param)){
    	foreach($param as $key=>$val){
		    $url .='&'.$key.'='.$val;
	    }
    }
	
	return $url;
}

function redirect($url)
{
	return APP_HOST.'/Forum/Public/'.$url;
}

function getImg($imgSrc)
{
	return APP_HOST.'/Forum/Public/img/'.$imgSrc;
}

function getJs($jsSrc)
{
	return APP_HOST.'/Forum/Public/js/'.$jsSrc;
}

function getCss($cssSrc)
{
	return APP_HOST.'/Forum/Public/css/'.$cssSrc;
}