<?php
/**
 * Created by PhpStorm.
 * User: cathykh
 * Date: 10/2/18
 * Time: 1:31 PM
 */

main::start("temp.csv");

class main {

    public static function start($filename){

        $records = csv::getRecords($filename);
        $table = html::generateTable($records);
    }
}

class html {



    public static function generateTable($records) {

    }
}
class csv {



    public static function getRecords($filename) {

    }
}
class record {



    public function __construct(Array $fieldNames, $values){


    }
}

class recordFactory {

    public static function create(

    }
}
