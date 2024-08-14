<?php

// DSN = Data Source Name -> Informações do Banco.
// SGBD: de onde vem; qual é

    $conn = new PDO('mysql:host=localhost;dbname=agenda','root','');


    // PDO(DSN, usuário, senha)
    // Abstraindo o SGBD, pode ser qualquer. MySQL, sqllite, pgsql, firebase, etc...