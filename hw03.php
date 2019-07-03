<?php
$poker = [];
for($i=0;$i<=51;$i++){
    $poker[] = $i;
}
$finish = [];
for($j=51;$j>=0;$j--) {
    $pick = rand(0, $j);
    $finish[] = array_splice($poker, $pick, 1)[0];
}
foreach($finish as $v) {
    echo $v.'<br>';
}
?>  
