<?php 

    $alphabet = [
        'a' => 1,
        'm' => 13,
        'h' => 8,
    ];
    
    $rendi = 'moch ilham rendiansyah';
    $first = $rendi[0];
    $last = $rendi[strlen($rendi)-1];
    $chars = [$first, $last];
    $total = $alphabet[$chars[0]] - $alphabet[$chars[1]];
    
    echo $total;

 ?>