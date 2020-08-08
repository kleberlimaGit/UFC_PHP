<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        require_once './Lutador.php';
        require_once './Luta.php';
        $l1 = new Lutador('Kleber','brasileiro',30,1.72,55,8,2,3);
        $l2 = new Lutador('Diego', 'brasileiro', 25, 1.78, 56,4,2,8);
        $UFC = new Luta($l1, $l2);
        $UFC->marcarLuta($l1, $l2);
        
        Lutador::apresentar($l1, $l2);
        
        $UFC->lutar($l1, $l2);
        ?>
    </body>
</html>
