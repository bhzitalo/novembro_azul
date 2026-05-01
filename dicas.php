<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novembro Azul - Prevenção</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0c4a6e, #38bdf8);
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #0c4a6e;
        }

        .section {
            margin: 25px 0;
            padding: 20px;
            border-left: 5px solid #38bdf8;
            background: #f1f5f9;
            border-radius: 8px;
        }

        .section h2 {
            margin-top: 0;
            color: #0c4a6e;
        }

        ul {
            padding-left: 20px;
        }

        iframe {
            width: 100%;
            height: 315px;
            border-radius: 10px;
            margin-top: 15px;
        }

        /* Destaque com imagem */
        .destaque .conteudo {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .destaque img {
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .destaque .texto {
            flex: 1;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .destaque .conteudo {
                flex-direction: column;
                text-align: center;
            }

            .destaque img {
                width: 100%;
                max-width: 300px;
            }
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>💙 Novembro Azul</h1>

    <!-- Seção destaque -->
    <div class="section destaque">
        <div class="conteudo">
            <img 
                src="https://www.gov.br/dnocs/pt-br/assuntos/noticias/novembro-azul-mes-de-conscientizacao-sobre-o-cancer-de-prostata/banner-site.jpg/@@images/1183a85e-3f4a-4abf-b99c-306063b61ded.jpeg" 
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
            <li>Idade acima de 50 anos</li>
            <li>Histórico familiar</li>
            <li>Sedentarismo</li>
            <li>Alimentação inadequada</li>
        </ul>
    </div>

    <div class="section">
        <h2>🔍 Sintomas</h2>
        <p>
            O câncer de próstata pode não apresentar sintomas no início, mas em fases mais avançadas pode causar:
        </p>
        <ul>
            <li>Dificuldade para urinar</li>
            <li>Fluxo urinário fraco</li>
            <li>Dor ou desconforto</li>
        </ul>
    </div>

    <div class="section">
        <h2>🛡️ Prevenção e cuidados</h2>
        <ul>
            <li>Manter uma alimentação saudável</li>
            <li>Praticar atividades físicas</li>
            <li>Evitar cigarro e álcool em excesso</li>
            <li>Realizar consultas médicas regularmente</li>
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