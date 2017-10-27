<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Garimpa
 * Date: 27/10/2017
 * Time: 01:01
 */

namespace Hcode;


class PageAdmin extends Page
{
    public function __construct($opts=array(), $tpl_dir="/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}