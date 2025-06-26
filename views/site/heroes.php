<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Герои войны - семья Лакаевых</title>
    <style>
        /* Общие стили */
        body {
            font-family: 'Times New Roman', serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Шапка */
        .hero-header {
            background: linear-gradient(to right, #1a3e6f, #d62828);
            color: white;
            padding: 50px 0;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            border-bottom: 5px solid #d4a017;
        }

        .hero-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(to right,
            #d4a017 0%, #d4a017 20%,
            #000 20%, #000 40%,
            #d62828 40%, #d62828 60%,
            #000 60%, #000 80%,
            #d4a017 80%, #d4a017 100%);
        }

        .hero-header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            letter-spacing: 1px;
        }

        /* Основное содержание */
        .hero-content {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #d4a017;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .hero-card {
            display: flex;
            margin-bottom: 40px;
            border-bottom: 2px dashed #d4a017;
            padding-bottom: 30px;
        }

        .hero-card:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .hero-image {
            flex: 0 0 300px;
            margin-right: 30px;
            border-radius: 8px;
            overflow: hidden;
            border: 3px solid #d4a017;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .hero-image:hover img {
            transform: scale(1.05);
        }

        .hero-info {
            flex: 1;
        }

        .hero-name {
            color: #d62828;
            font-size: 1.8rem;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #d4a017;
        }

        .hero-rank {
            font-weight: bold;
            color: #1a3e6f;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .hero-bio {
            margin-bottom: 15px;
        }

        .hero-awards {
            margin-top: 20px;
        }

        .award-item {
            display: inline-block;
            margin-right: 15px;
            margin-bottom: 15px;
            background: rgba(214, 40, 40, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            border: 1px solid #d4a017;
        }

        /* Подвал */
        .hero-footer {
            text-align: center;
            padding: 30px 0;
            color: #5a5a5a;
            font-size: 0.9rem;
            border-top: 1px solid #d4a017;
            margin-top: 40px;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            .hero-header h1 {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-card {
                flex-direction: column;
            }

            .hero-image {
                flex: 0 0 auto;
                margin-right: 0;
                margin-bottom: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<header class="hero-header">
    <div class="container">
        <h1>Герои Великой Отечественной войны</h1>
        <p class="hero-subtitle">Семья Лакаевых - пример мужества и отваги</p>
    </div>
</header>

<main class="container">
    <div class="hero-content">
        <!-- Лакаев Федор Дмитриевич -->
        <div class="hero-card">
            <div class="hero-image">
                <img src="img/lakaev.jpg" alt="Лакаев Федор Дмитриевич">
            </div>
            <div class="hero-info">
                <h2 class="hero-name">Лакаев Федор Дмитриевич</h2>
                <p class="hero-rank">Старший сержант, командир орудия</p>
                <div class="hero-bio">
                    <p>Родился в 1918 году в селе Ново-Троицкое. В Красной Армии с 1939 года. Участник Великой Отечественной войны с июня 1941 года.</p>
                    <p>Отличился в боях под Сталинградом, где его расчет подбил 7 немецких танков. В ходе Курской битвы, оставшись один у орудия, продолжал вести огонь по наступающим немецким танкам, уничтожив 3 машины противника.</p>
                    <p>Погиб героической смертью 12 июля 1943 года, прикрывая отход своей батареи.</p>
                </div>
                <div class="hero-awards">
                    <span class="award-item">Орден Красного Знамени</span>
                    <span class="award-item">Орден Отечественной войны I степени</span>
                    <span class="award-item">Медаль "За оборону Сталинграда"</span>
                </div>
            </div>
        </div>

        <!-- Лакаев Захар Васильевич -->
        <div class="hero-card">
            <div class="hero-image">
                <img src="img/lakaev2.jpg" alt="Лакаев Захар Васильевич">
            </div>
            <div class="hero-info">
                <h2 class="hero-name">Лакаев Захар Васильевич</h2>
                <p class="hero-rank">Гвардии лейтенант, командир стрелковой роты</p>
                <div class="hero-bio">
                    <p>Родился в 1920 году. Окончил военное училище в 1941 году. На фронте с первых дней войны.</p>
                    <p>Участвовал в обороне Москвы, где его взвод отразил 5 атак противника. В 1944 году при прорыве блокады Ленинграда его рота первой ворвалась в немецкие укрепления, обеспечив успех всей операции.</p>
                    <p>После войны работал в колхозе, восстанавливал народное хозяйство. Умер в 1985 году.</p>
                </div>
                <div class="hero-awards">
                    <span class="award-item">Орден Красной Звезды</span>
                    <span class="award-item">Орден Отечественной войны II степени</span>
                    <span class="award-item">Медаль "За отвагу"</span>
                    <span class="award-item">Медаль "За оборону Москвы"</span>
                </div>
            </div>
        </div>
        <div class="hero-card">
            <div class="hero-image">
                <img src="img/lakaev3.jpg" alt="Лакаев Сергей Константинович">
            </div>
            <div class="hero-info">
                <h2 class="hero-name">Лакаев (Локаев) Сергей Константинович</h2>
                <p class="hero-rank">Младший лейтенант, летчик-истребитель</p>
                <div class="hero-bio">
                    <p>Родился в 1922 году. Окончил летное училище в 1942 году. На фронте с мая 1943 года.</p>
                    <p>Совершил 128 боевых вылетов, участвовал в 27 воздушных боях. Лично сбил 8 вражеских самолетов и 3 в группе. Особо отличился во время Берлинской операции, прикрывая наши наземные войска.</p>
                    <p>После войны продолжил службу в ВВС. Вышел в отставку в звании подполковника. Умер в 1998 году.</p>
                </div>
                <div class="hero-awards">
                    <span class="award-item">Орден Красного Знамени</span>
                    <span class="award-item">Орден Александра Невского</span>
                    <span class="award-item">Орден Отечественной войны I степени</span>
                    <span class="award-item">Медаль "За взятие Берлина"</span>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>