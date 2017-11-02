<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Garimpa
 * Date: 29/10/2017
 * Time: 16:22
 */

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Mailer;
use \Hcode\Model;

class Category extends Model
{
   public static function listAll()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_categories ORDER BY descategory");
    }

    public function save()
    {
        $sql = new Sql();
        $results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)", array(
            ":idcategory"=>$this->getidcategory(),
            ":descategory"=>$this->getdescategory(),
        ));
        $this->setData($results[0]);
    }

    public function get($idcategory)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", array(
            ':idcategory'=>$idcategory
        ));

        $this->setData($result[0]);
    }

    public function delete()
    {
        $sql = new Sql();
        $result = $sql->select("DELETE FROM tb_categories WHERE idcategory = :idcategory", array(
            ':idcategory'=>$this->getidcategory()
        ));
    }

 }