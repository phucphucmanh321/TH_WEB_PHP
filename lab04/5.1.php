<?php
    function xuatMang1Chieu($array){
        $i = 0;
        echo "<table border>";
        echo "<tr>  
            <th>Stt</th>
            <th>Id</th>
            <th>Name</th>
        </tr>";
        foreach($array as $key=>$value){
            $i++;
            echo "<tr><td>$i</td> 
            <td>$key</td>
            <td>$value</td></tr>";
        }
    }

    $b = Array(5,6,12,8);
    $arr = array();
    $r = array("id" => "sp1", "name"=>"Sản phẩm 1");
    $arr[] = $r;
    $r = array("id" => "sp2", "name"=>"Sản phẩm 2");
    $arr[] = $r;
    $r = array("id" => "sp3", "name"=>"Sản phẩm 3");
    $arr[] = $r;

    xuatMang1Chieu($b);
    xuatMang1Chieu($arr[0]);
?>
