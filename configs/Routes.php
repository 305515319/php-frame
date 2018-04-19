<?php
/*
*    路由结构
*    array(
*       '命名空间'=>array(
*           '路由别名'=>'控制器@方法'
*       )
*   )
*/
return array(
	
	'Home'=>array(
		'index/index'=>'IndexController@index',
	),

	'Admin'=>array(
		//管理员相关操作
		'admin/login'=>'LoginController@login',
		'admin/doLogin'=>'LoginController@doLogin',
		'admin/logout'=>'LoginController@logout',
		'admin/index'=>'IndexController@index',
		'admin/profile'=>'IndexController@profile',
		'admin/saveprofile'=>'IndexController@saveProfile',
		'admin/setting'=>'IndexController@setting',
		'admin/setpass'=>'IndexController@setpass',
		
		//分类管理
		'admin/category'=>'CategoryController@index',
		'admin/addcate'=>'CategoryController@cate',
		'admin/savecate'=>'CategoryController@doCate',
		'admin/updatecate'=>'CategoryController@editCate',
		'admin/delcate'=>'CategoryController@doCate',
		
		//错误模版
		'admin/template'=>'TemplateController@index',

		//文章管理
		'admin/article'=>'ArticleController@index',
		'admin/addarticle'=>'ArticleController@article',
		'admin/editarticle'=>'ArticleController@editArticle',
		'admin/doEditArticle'=>'ArticleController@doEditArticle',
		'admin/delarticle'=>'ArticleController@delArticle',
		'admin/doAddArticle'=>'ArticleController@doArticle',

		//系统日志
		'admin/log'=>'LogController@index',
	),

);