<!-- algorithm -->
<!-- 
step1: run two loops;
    first for rows
    second for columns
step2: decrease first row from 8 to 1 
step3: increase second row from 1 to <= first row current value
step4: print values of second row
step5: outside first row use br tag
-->

<?php
    for($i=8;$i>=1;$i--){
        for($j=1;$j<=$i; $j++){
            echo $j;
        }
        echo "<br>";
    }
?>