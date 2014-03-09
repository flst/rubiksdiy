<?php
function escape($str) {
        preg_match_all("/[\x80-\xff].|[\x01-\x7f]+/",$str,$r);
        $ar = $r[0];
         foreach($ar as $k=>$v) {
             if(ord($v[0]) < 128) {
                $ar[$k] = rawurlencode($v);
             } else {
                $ar[$k] = "%u".bin2hex(iconv("GBK","UCS-2",$v));
             }
         }
         return join("",$ar);
     }


?>