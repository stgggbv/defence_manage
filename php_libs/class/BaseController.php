<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author nagatayorinobu
 */
class BaseController {
    protected $type;
    protected $action;
    protected $defence;
    protected $file;
    protected $view;
    protected $title;
    
//  インスタンスが生成された時に最初に実行されるコンストラクタの設定
    public function __construct(){
        // VIEWの準備
        $this->view_initialize();
    }
    
    private function view_initialize(){
        // 画面表示クラス
        $this->view = new Smarty();
        // Smarty関連ディレクトリの設定
        $this->view->template_dir = _SMARTY_TEMPLATES_DIR;
        $this->view->compile_dir  = _SMARTY_TEMPLATES_C_DIR;
        $this->view->config_dir   = _SMARTY_CONFIG_DIR;
        $this->view->cache_dir    = _SMARTY_CACHE_DIR;


        // リクエスト変数 typeとactionで動作を決めます。
        if(isset($_REQUEST['type'])){   $this->type   = $_REQUEST['type'];}
        if(isset($_REQUEST['action'])){ $this->action = $_REQUEST['action'];}
        // 共通の変数
        $this->view->assign('SCRIPT_NAME', _SCRIPT_NAME);
    }


    //----------------------------------------------------
    // フォームと変数を読み込んでテンプレートに組み込んで表示します。
    //----------------------------------------------------
    protected function view_display(){
        // セッション変数などの内容の表示

        
        $this->view->assign('title', $this->title);
        $this->view->assign('defence', $this->defence);

        $this->view->display($this->file);

    }
    
}