<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016/5/1
 * Time: 2:25
 */
function execInBackground($cmd) {
    if (substr(php_uname(), 0, 7) == "Windows"){
        pclose(popen("start /B ". $cmd, "r"));
    }
    else {
//        exec($cmd . " > /dev/null &",$output,$return_var);
        pclose(popen($cmd, "r"));
    }
}