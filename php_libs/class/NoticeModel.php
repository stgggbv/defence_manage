<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NoticeModel extends BaseModel{
//-----------------------------------------------    
//    お知らせ情報の表示
//-----------------------------------------------    
public function get_notice_data_id($id){
        $data = [];
        try {
            $sql= "SELECT * FROM notice WHERE id = :id limit 1";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $data;
    }
//------------------------------------------------    
//    お知らせ情報の更新処理
//------------------------------------------------    
public function modify_notice($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "UPDATE  notice
                      SET 
                        subject   = :subject,
                        body   = :body,
                        reg_date  = now()
                        WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':subject',   $userdata['subject'],   PDO::PARAM_STR );
            $stmh->bindValue(':body',   $userdata['body'],   PDO::PARAM_STR );
            $stmh->bindValue(':id',         $userdata['id'],         PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
            //print "データを" . $stmh->rowCount() . "件、更新しました。<br>";
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }
    
    }