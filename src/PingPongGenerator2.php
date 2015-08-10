<?php

    class PingPongGenerator
    {
        function generatePingPongArray($number)
        {
            $counter = 1;
            $new_array = array();
            while( $counter <= $number){
                if ($counter % 3 == 0 && $counter % 5 == 0) {
                    array_push($new_array, "ping-pong");
                }
                elseif ($counter % 3 == 0) {
                    array_push($new_array, "ping");
                }
                elseif ($counter % 5 == 0) {
                    array_push($new_array, "pong");
                } else {
                    array_push($new_array, $counter);
                }
                ++$counter;

            }
            return $new_array;
        }
    }

 ?>
