<?php
    $regex = '/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $obj = file_get_contents('php://input');
    $data = json_decode($obj, true);
    echo $data["email"];
    $date   = new DateTime(); //this returns the current date time
    $result = $date->format('Y-m-d-H-i-s');

    //return $object;
    if($data != null) {
        $bool = preg_match($regex, $data["email"]);
        $string = "{$result}, {$data['email']}, {$bool}";
        $file = fopen("log.csv", "w+");
        fwrite($file, $string);
        fclose($file);
        return json_encode(
            array(
                "status" => "nice"
            )
        );
    }else {
        return json_encode(
            array(
                "status" => "failed"
            )
        );
    }
    return "Test";
?>