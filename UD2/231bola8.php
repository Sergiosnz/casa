<?php
    if(isset($_GET['frase']) & !empty($_GET['frase'])){
        $pregunta = $_GET['frase'];
        $respuestas = ["Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro",
        "seguro", "yo diría que sí", "ni de coña"];
        echo "Pregunta: $pregunta </br>";    
        echo "Respuesta: " . $respuestas[rand(0,count($respuestas)-1)];
    }
?>