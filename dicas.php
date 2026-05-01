<?php
$titulo = "Novembro Azul";
$data = date("d/m/Y");

$fatores_risco = [
    "Idade acima de 50 anos",
    "Histórico familiar",
    "Sedentarismo",
    "Alimentação inadequada"
];

$sintomas = [
    "Dificuldade para urinar",
    "Fluxo urinário fraco",
    "Dor ou desconforto"
];

$prevencao = [
    "Manter uma alimentação saudável",
    "Praticar atividades físicas",
    "Evitar cigarro e álcool em excesso",
    "Realizar consultas médicas regularmente"
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> - Prevenção</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>💙 <?= $titulo ?></h1>
    <p style="text-align:center;">Atualizado em: <?= $data ?></p>

    <!-- Destaque -->
    <div class="section destaque">
        <div class="conteudo">
            <img 
                src="assets/novembro_azul.jpeg" 
                alt="Campanha Novembro Azul"
            >
            <div class="texto">
                <h2>📘 O que é o Novembro Azul?</h2>
                <p>
                    O Novembro Azul é uma campanha mundial de conscientização sobre a <strong>saúde do homem</strong>,
                    com foco na prevenção e no diagnóstico precoce do <strong>câncer de próstata</strong>.
                </p>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>🧬 O que é o câncer de próstata?</h2>
        <p>
            É um tumor que se desenvolve na próstata, uma glândula do sistema reprodutor masculino.
            Na maioria dos casos, cresce lentamente, mas pode se tornar agressivo.
        </p>
    </div>

    <div class="section">
        <h2>⚠️ Fatores de risco</h2>
        <ul>
            <?php foreach ($fatores_risco as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>🔍 Sintomas</h2>
        <p>
            O câncer de próstata pode não apresentar sintomas no início, mas em fases mais avançadas pode causar:
        </p>
        <ul>
            <?php foreach ($sintomas as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>🛡️ Prevenção e cuidados</h2>
        <ul>
            <?php foreach ($prevencao as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>📅 Quando procurar um médico?</h2>
        <p>
            Homens a partir dos 50 anos (ou 45 com fatores de risco) devem realizar exames preventivos regularmente.
        </p>
    </div>

    <div class="section">
        <h2>🎥 Saiba mais</h2>
        <iframe src="https://www.youtube.com/embed/iMmUh1BzxSs" allowfullscreen></iframe>
    </div>

    <div class="footer">
        💙 Prevenir é um ato de coragem. Cuide da sua saúde.
    </div>

</div>

</body>
</html>