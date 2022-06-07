<?php
        $fp = file("liens.txt");

        echo("<ol>");
        foreach($fp as $row) {
                echo("<li><a href=\"$row\">Lien</a></li>");
        }
        echo("</ol>");
 ?> 