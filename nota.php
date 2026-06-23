<?php
$aprovados = 0;
$candidatos = [
    (object)["nome"=>"joao","nota"=> 30],
    (object)["nome"=>"pedro","nota"=> 70],
    (object)["nome"=>"daniel","nota"=> 90],
    (object)["nome"=>"lucas","nota"=> 90],
];

foreach($candidatos as $candidatos){
    if($candidatos -> nota >= 80){
        $aprovados++;
    }
}
echo("Aprovados: $aprovados");
?>