<?php
/**
 * Created by PhpStorm.
 * User: ndenelson
 * Date: 06/01/2017
 * Time: 10:17
 */

namespace App\Controller\Component;
use Cake\Controller\Component;


class SearchComponent extends Component {
    /**
     * @param $params
     * @param $mainTable
     * @return array
     */
    public function searchConditions($params, $mainTable){
        $conditions = [];
        $tail = count($params);
        $i = 0;
        while( $i < $tail){
            $param = $params[$i];

            if($param['assoc']){
                $assoc = $param['table'];
                $controller = $this->_registry->getController();
                $param['field'] = $param['table'].'.'.$controller->{$mainTable}->{$assoc}->getDisplayfield();
            }

            if ($param['typedata'] == 'string'){
                $conditions[ "LOWER(".$param['field'].") ".$param['operation'] ] = "%".$param['value']."%";
            }else{
                $conditions[ $param['field']." ".$param['operation'] ] = $param['value'];
            }
            $i++;
        }
        return $conditions;
    }

    public function searchQuery($table){
        $controller = $this->_registry->getController();
        $field = $controller->{$table}->getDisplayfield();
        $query = $controller->{$table}->find();

        return $query;
    }
}