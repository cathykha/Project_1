<?php
/**
 * Created by PhpStorm.
 * User: cathykh
 * Date: 10/2/18
 * Time: 1:31 PM
 */

main::start();
class main {
    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}

class csv {
    static public function getRecords(){

    }

}

class html {

    static public function generateTable($records){

    }

}

class system {

    static public function printPage($page){

    }

}
