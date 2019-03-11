<?php
/**
 * Created by PhpStorm.
 * User: bienk
 * Date: 3/11/2019
 * Time: 12:07 AM
 */

main::start("example.csv");

class main  {

    static public function start($filename) {

        $records = csv::getRecords($filename);

        print_r($records);
    }
}

class csv {

    static public function getRecords($filename) {

        $file = fopen($filename,"r");

        while(! feof($file))
        {

            $record = fgetcsv($file);

            $records[] = $record;
        }

        fclose($file);
        return $records;
    }
}