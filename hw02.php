<table border='1' width='100%'>
    <?php
    define("rows", 5);
    define("from", 2);
    define("to", 4);
    for($k = 0;$k < rows;$k++) {
        echo '<tr>';
        for($i = from;$i <= to;$i++) {
            $newi = $i + (to - from + 1)*$k;
            if((from - to + 1)%2 == 0) {
                if($k % 2 == 0) {
                    if($newi % 2 != 0) {
                        echo '<td bgcolor="#fa0">';
                    }else {
                        echo '<td bgcolor="#0fa">';
                    }
                }else {
                    if($newi % 2 != 0) {
                        echo '<td bgcolor="#0fa">';
                    }else {
                        echo '<td bgcolor="#fa0">';
                    }
                }
            }else {
                if($k % 2 == 0) {
                    if($newi % 2 == 0) {
                        echo '<td bgcolor="#fa0">';
                    }else {
                        echo '<td bgcolor="#0fa">';
                    }
                }else {
                    if($newi % 2 != 0) {
                        echo '<td bgcolor="#0fa">';
                    }else {
                        echo '<td bgcolor="#fa0">';
                    }
                }
            }
            for($j = 1;$j < 10;$j++){
                $result = $newi * $j;
                echo "{$newi} * {$j} = {$result}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
