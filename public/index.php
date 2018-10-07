
<?php
/**
 * Created by PhpStorm.
 * User: cathykh
 * Date: 10/2/18
 * Time: 1:31 PM
 */
include 'header.html';
main::start("temp.csv");

class main {

    public static function start($filename){

        $records = csv::getRecords($filename);
        $table = html::generateTable($records);
    }
}

class html{


    public static function generateTable($records)
    {
        $table = "";
        $table .= '<table class = "table table-striped">';

        foreach ($records as $record) {

            $array = $record->returnArray();
        }

        $table .= "<tr>";

        foreach ($record as $key => $values) {

            $table .= '<tr>';
            echo '<th class="thead-dark">' . $key . '</th>';
            $table .= "</tr>";



        }

        foreach ($records as $record) {

            $array = $record->returnArray();
            $table .= "<tr>";

            foreach ($record as $key => $values) {
                $table .= "<td>" . $values . "</td>";

            }
            $table .= "</tr>";
        }
        $table .= "</table>";
        print_r($table);
    }
}

class csv {



    public static function getRecords($filename) {


        $csvfile = fopen($filename,"r");
        $fieldNames = array();
        $count = 0;

        while(! feof($csvfile)) {

            $record = fgetcsv($csvfile);

            if($count == 0) {
                $fieldNames = $record;

            } else {
                $records[] = recordFactory::create($fieldNames, $record);

            }
            $count++;

        }

        fclose($csvfile);

        return $records;
    }
}
class record {



    public function __construct(Array $fieldNames, $values){


        $record = array_combine($fieldNames, $values);
        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }


    public function returnArray() {
        $array = (array) $this;
        return $array;
    }


    public function createProperty($name = 'first', $value = 'cathy') {
        $this->{$name} = $value;
    }
}

class recordFactory {



    public static function create(Array $fieldNames, Array $values) {


        $record = new record($fieldNames, $values);

        return $record;
    }
}



