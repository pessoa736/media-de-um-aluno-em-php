<?php

require_once("classAluno.php");

$Davi = new aluno("Davi dos Santos Passos");

$Davi->setNotas([10, 2, 10, 9]);
$Davi->calculeAMedia() ;
$Davi->mostarDadosDoAluno() ;
