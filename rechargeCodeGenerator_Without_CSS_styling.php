
<?php
// for loop that generate the random recharge card codes
for ($i = 0; $i < 200; $i++) {
    echo $first_part = mt_rand(1000, 9999) . '-' . $second_part = mt_rand(1000, 9999) . '-' . $third_part = mt_rand(1000, 9999) . '-' . $fourth_part = mt_rand(10000, 99999) . '<br><br>';
}
?>