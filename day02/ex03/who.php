#!/usr/bin/php
<?php
    $buffsize = 628;
    date_default_timezone_set('America/Los_Angeles');
    $file = fopen('/var/run/utmpx', 'r');
    while ($my_tab = fread($file, $buffsize)){
		#Unpack data from binary string
        $unpack = unpack("a256a/a4b/a32c/i/ie/I2f/a256g/i16h", $my_tab);
        $array[] = $unpack;
    }
    fclose($file);
    ksort($array);
    foreach ($array as $v){
        if ($v['e'] == 7) {
            print(str_pad(substr(trim($v['a']), 0, 8), 8, " ")." ");
            print(str_pad(substr(trim($v['c']), 0, 7), 8, " ")." ");
            print(date("M", $v["f1"])." ");
            print(str_pad(date("j", $v["f1"]), 1, " ")." ".date("H:i", $v["f1"]));
            print("\n");
        }
    }
?>
