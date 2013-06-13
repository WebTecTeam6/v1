<?php
    $hit_counter = @file_get_contents('count.txt');
    echo $hit_counter;
    $hit_counter++;
    file_put_contents('count.txt', $hit_counter);
 ?>