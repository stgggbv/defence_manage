<?php
/*************************************************
 * 初期設定ファイル
 *
 */
//----------------------------------------------------
// ファイル設置ディレクトリ
//----------------------------------------------------

// 関連ファイルを設置するディレクトリ
define( "_PHP_LIBS_DIR", _ROOT_DIR . "./php_libs/");

// クラスファイル
define( "_CLASS_DIR", _PHP_LIBS_DIR . "class/");

// 環境変数 
//サーバー変数はサーバーによって使えないキーがあるので注意
define( "_SCRIPT_NAME", $_SERVER['SCRIPT_NAME']);

//----------------------------------------------------
// Smarty関連設定
//----------------------------------------------------

//  Smartyのlibsディレクトリ
define( "_SMARTY_LIBS_DIR",         _PHP_LIBS_DIR . "smarty/libs/");

//  Smartyのテンプレートファイルを保存したディレクトリ
define( "_SMARTY_TEMPLATES_DIR",    _PHP_LIBS_DIR . "smarty/templates/");

//  Smartyのコンパイル用ディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_TEMPLATES_C_DIR",  _PHP_LIBS_DIR . "smarty/templates_c/");

//  Smartyの設定ディレクトリ 未使用
define( "_SMARTY_CONFIG_DIR",       _PHP_LIBS_DIR . "smarty/configs/");

//  Smartyのキャッシュディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_CACHE_DIR",        _PHP_LIBS_DIR . "smarty/cache/");


//----------------------------------------------------
// 汎用ライブラリの読み込み
//----------------------------------------------------

// Smartyテンプレートエンジンを使用
require_once(_SMARTY_LIBS_DIR . "Smarty.class.php");

//----------------------------------------------------
// 自作クラスファイルの読み込み
//----------------------------------------------------
// 読み込みの順番を変えると動作しません。
require_once( _CLASS_DIR      . "BaseController.php");
require_once( _CLASS_DIR      . "DefenceController.php");
require_once( _CLASS_DIR      . "SetCookie.php");