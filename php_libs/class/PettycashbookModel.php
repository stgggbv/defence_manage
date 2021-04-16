<?php

/**
 * Description of KenModel
 *
 * @author nagatayorinobu
 */
class PettycashbookModel extends BaseModel {
    //----------------------------------------------------
    // 県名の取得
    //----------------------------------------------------
    public function get_all_data(){
        $pettycashbook_array = [];
        try {
            $sql= "SELECT * FROM pettycashbook";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
//                $pettycashbook_array[]=array("name"=>$row["name"],"price"=>$row["price"]);
                $pettycashbook_array[]=$row;
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $pettycashbook_array;
    }
}
