<?php
    $len = 6;

    for ($i=1; $i <= $len; $i++) {
        if ($i >= 1 && $i <= 3) {
            echo "<p><strong>$i.</strong> ISB Atma Luhur</p>";
            continue;
        }

        echo "<p><strong>$i.</strong> Pangkalpinang</p>";
    }
?>