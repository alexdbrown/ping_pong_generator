<?php

    class PingPongGenerator
    {
        function generatePingPongArray($number)
        {
            $array = range(1, $number);
            $new_array = array();
            foreach( $array as $number){
                if ($number % 3 == 0 && $number % 5 == 0) {
                    array_push($new_array, "ping-pong");
                }
                elseif ($number % 3 == 0) {
                    array_push($new_array, "ping");
                }
                elseif ($number % 5 == 0) {
                    array_push($new_array, "pong");
                } else {
                    array_push($new_array, $number);
                }

            }
            return $new_array;
        }
    }

 ?>
