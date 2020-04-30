<?php
    function getAPI($api)
    {
        //inisialisasi fungsi curl
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $content = curl_exec($ch);

        curl_close($ch);

        // mengubah data json menjadi data array asosiatif
        $result=json_decode($content,true);
        return $result;
    }

    // jika punya file .json nya, bisa diganti sesuai directory dimana file tersebut berada
    $test = getAPI("https://api.kawalcorona.com/");
    for($i = 0; $i<10; $i++){
        var_dump($test[$i]["attributes"]["Country_Region"]);
    }
?>+