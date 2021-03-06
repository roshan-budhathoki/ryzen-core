<?php

namespace ryzen\ryzen\form;

use ryzen\ryzen\Model;

/**
 * @author razoo.choudhary@gmail.com
 * Class Form
 * @package ryzen\ryzen\form
 */

class Form
{
    public static function begin($action , $method){

        echo sprintf('<form action="%s" method="%s">', $action,$method );
        return new Form();
    }

    public static function end(){

        echo '</form>';
    }

    public function field(Model $model, $attribute){

        return new InputField($model, $attribute);
    }
}