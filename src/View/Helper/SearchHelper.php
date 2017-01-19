<?php

namespace App\View\Helper;

use Cake\view\Helper;

class SearchHelper extends Helper {

    public function setSearchUrl($url){
        return '<input type="hidden" id="archeologie_ajaxchUrl" value="'.$url.'"/>';
    }

    public function displayField($field, $type, $extern=null){
        if($extern){
            $table = ucfirst(explode("_", $field)[0].'s');
        }else{
            $table = null;
        }

        if($type == 'number'){

            return '<div class="input-group">'.
            '<span class="input-group-addon">'.
            '<select id="'.$field.'">'.
            '<option>&lt;=</option>'.
            '<option>&gt;=</option>'.
            '<option>=</option>'.
            '</select>'.
            '</span>'.
            '<input type="text" data-datatype="'.$type.'" class="form-control" data-tab="'.$table.'" data-exfield="'.$extern.'" data-opname="'.$field.'" data-class="archeologie"/>'.
            '</div>';
        }elseif($type == 'string'){

            return '<div class="input-group">'.
            '<span class="input-group-addon">'.
            '<input type="radio" id="'.$field.'" value="LIKE" checked/>'.
            '</span>'.
            '<input type="text" data-datatype="'.$type.'" class="form-control" data-tab="'.$table.'" data-exfield="'.$extern.'" data-opname="'.$field.'" data-class="archeologie"/>'.
            '</div>';
        }

        return '<input type="text" class="form-control" value="'.$type.'"/>';
    }
}