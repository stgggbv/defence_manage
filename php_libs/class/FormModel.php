<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EormModel
 *
 * @author yoshida
 */
class FormModel extends BaseModel {
    
    //----------------------------------------------------
    // 会員登録処理
    //----------------------------------------------------
    public function regist_session(){
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT  INTO NumberOfUses (sessionID)
            VALUES ( :sessionID )";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':sessionID', session_id(),   PDO::PARAM_STR );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }
}
