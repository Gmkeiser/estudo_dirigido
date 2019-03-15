<?php

    print"digite uma temperatura em °C";
    $Tcelcius = (int) fgets(STDIN);
    $Tfarenight = (int) fgets(STDIN);
    $Tfarenight = 1.8*$Tcelcius+32;
    print"$Tfarenight °F";

