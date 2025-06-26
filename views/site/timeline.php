<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таймлайн Великой Отечественной войны</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="header">
    <div class="container">
        <h1>Великая Отечественная война 1941-1945</h1>
        <p class="subtitle">Хронология ключевых событий</p>
    </div>
</header>

<main class="timeline-container">
    <div class="container">
        <div class="timeline">
            <!-- 1941 год -->
            <div class="timeline-year">1941</div>

            <div class="timeline-item">
                <div class="timeline-date">22 июня</div>
                <div class="timeline-content">
                    <h3>Начало Великой Отечественной войны</h3>
                    <p>Германия нападает на СССР без объявления войны. Начало операции "Барбаросса".</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">8 сентября</div>
                <div class="timeline-content">
                    <h3>Начало блокады Ленинграда</h3>
                    <p>Немецкие войска полностью блокируют Ленинград, началась 872-дневная блокада.</p>
                </div>
            </div>

            <div class="timeline-year">1942</div>

            <div class="timeline-item">
                <div class="timeline-date">17 июля</div>
                <div class="timeline-content">
                    <h3>Начало Сталинградской битвы</h3>
                    <p>Одна из самых кровопролитных битв в истории, продолжавшаяся до 2 февраля 1943 года.</p>
                </div>
            </div>

            <!-- 1943 год -->
            <div class="timeline-year">1943</div>

            <div class="timeline-item">
                <div class="timeline-date">5 июля</div>
                <div class="timeline-content">
                    <h3>Курская битва</h3>
                    <p>Крупнейшее танковое сражение в истории под Прохоровкой.</p>
                </div>
            </div>

            <!-- 1944 год -->
            <div class="timeline-year">1944</div>

            <div class="timeline-item">
                <div class="timeline-date">27 января</div>
                <div class="timeline-content">
                    <h3>Полное снятие блокады Ленинграда</h3>
                    <p>Завершение 872-дневной блокады города.</p>
                </div>
            </div>

            <!-- 1945 год -->
            <div class="timeline-year">1945</div>

            <div class="timeline-item">
                <div class="timeline-date">9 мая</div>
                <div class="timeline-content">
                    <h3>День Победы</h3>
                    <p>Подписание акта о безоговорочной капитуляции Германии.</p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
<style>
    /* Общие стили */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Times New Roman', serif;
        line-height: 1.6;
        color: #333;
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Шапка */
    .header {
        background: linear-gradient(to right, #1a3e6f, #d62828);
        color: white;
        padding: 50px 0;
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
        border-bottom: 5px solid #d4a017;
    }

    .header::before {
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

    .header h1 {
        font-size: 2.8rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .subtitle {
        font-size: 1.3rem;
        opacity: 0.9;
        letter-spacing: 1px;
    }

    /* Таймлайн */
    .timeline-container {
        padding: 30px 0;
    }

    .timeline {
        position: relative;
        padding: 60px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        width: 6px;
        background: linear-gradient(to bottom,
        #d4a017, #000, #d62828, #000, #d4a017);
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
        border-radius: 3px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .timeline-year {
        background: linear-gradient(to right, #d62828, #a51c1c);
        color: #ffd700;
        width: 150px;
        margin: 0 auto 40px;
        padding: 12px;
        text-align: center;
        border-radius: 8px;
        font-weight: bold;
        font-size: 1.3rem;
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: 2px solid #d4a017;
    }

    .timeline-item {
        padding: 25px 50px;
        position: relative;
        width: 50%;
        margin-bottom: 40px;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-content {
        padding: 25px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        border: 1px solid #d4a017;
        transition: all 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .timeline-content::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #d62828;
        border: 3px solid #d4a017;
        border-radius: 50%;
        top: 30px;
        box-shadow: 0 0 0 5px rgba(214, 40, 40, 0.2);
    }

    .timeline-item:nth-child(odd) .timeline-content::after {
        right: -42px;
    }

    .timeline-item:nth-child(even) .timeline-content::after {
        left: -42px;
    }

    .timeline-date {
        font-weight: bold;
        color: #d62828;
        margin-bottom: 12px;
        font-size: 1.2rem;
        font-family: 'Times New Roman', serif;
    }

    .timeline-content h3 {
        margin-bottom: 15px;
        color: #1a3e6f;
        font-size: 1.5rem;
        border-bottom: 2px solid #d4a017;
        padding-bottom: 8px;
    }

    .timeline-image {
        margin: 20px 0;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #d4a017;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .timeline-image img {
        width: 100%;
        transition: transform 0.3s ease;
        display: block;
    }

    .timeline-image:hover img {
        transform: scale(1.03);
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .header h1 {
            font-size: 2.2rem;
        }

        .subtitle {
            font-size: 1.1rem;
        }

        .timeline::before {
            left: 31px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 80px;
            padding-right: 30px;
        }

        .timeline-item:nth-child(even) {
            left: 0;
        }

        .timeline-content::after {
            left: 25px !important;
            top: 35px;
        }

        .timeline-item:nth-child(odd) .timeline-content::after,
        .timeline-item:nth-child(even) .timeline-content::after {
            left: 25px;
            right: auto;
        }

        .timeline-year {
            width: 120px;
            font-size: 1.1rem;
            padding: 10px;
        }
    }
</style>