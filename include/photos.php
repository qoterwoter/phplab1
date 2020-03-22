<?php
    $s = date('s');

    if($s%2 === 0)
        $photo1='images/metro.jpg';
    else
        $photo1='images/history.jpg';

    if($s%2 === 0)
        $photo2='images/840.jpg';
    else 
        $photo2='images/map.gif';

    echo '<img width="100%" src="'.$photo2.'">';
    echo '<img width="100%" src="'.$photo1.'">';
?>