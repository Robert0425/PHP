<table border='1' width="100%">
    <?php
    for($i = 0;$i < 10; $i ++) {
        echo '<tr>';
        for($j = 1;$j <= 10;$j ++) {
            $newj = $j + $i*10;
            $t = 0;
            for($k=2;$k<$newj;$k++) {
                if($newj%$k == 0) {
                    $t++;
                }
            }
            if($t == 0) {
                echo '<td bgcolor="yellow">'.$newj.'</td>';
            }else {
                echo '<td>'.$newj.'</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>
