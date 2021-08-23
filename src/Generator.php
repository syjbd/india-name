<?php
namespace Syjbd\IndiaName;

class Generator {


    public static function run($count=1){
        $fistData = Data::first($count);
        $lastData = Data::Last($count);
        if($count == 1){
            return $fistData . " " . $lastData;
        }else{
            $data = [];
            foreach ($fistData as $key=>$item){
                $data[] = $item . " " .$lastData[$key];
            }
            return $data;
        }
    }
}