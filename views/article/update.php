<style>
    .article-update.victory-theme {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        max-width: 800px;
        margin: 30px auto;
        position: relative;
        overflow: hidden;
    }

    .article-update.victory-theme::before {
        content: "";
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
        z-index: 1;
    }

    .victory-heading {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 2.2rem;
        margin: 0 0 25px 0;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }

    .victory-heading::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 25%;
        right: 25%;
        height: 3px;
        background: linear-gradient(to right,
        transparent 0%, #d4a017 20%,
        #000 40%, #d62828 60%,
        #000 80%, #d4a017 100%);
    }

    .article-update form {
        background: rgba(255, 255, 255, 0.9);
        padding: 25px;
        border-radius: 8px;
        border: 1px solid #d4a017;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .article-update .form-group {
        margin-bottom: 20px;
    }

    .article-update label {
        color: #2E7D32;
        font-weight: 500;
        display: block;
        margin-bottom: 8px;
    }

    .article-update .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #d4a017;
        border-radius: 8px;
        background-color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .article-update .form-control:focus {
        outline: none;
        border-color: #d62828;
        box-shadow: 0 0 0 3px rgba(214, 40, 40, 0.2);
    }

    .article-update .btn-primary {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017;
        padding: 10px 30px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4);
        transition: all 0.3s ease;
        display: inline-block;
        margin-right: 10px;
    }

    .article-update .btn-primary:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
        color: #ffd700 !important;
    }

    .article-update .help-block {
        color: #5a5a5a;
        font-size: 0.9rem;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .article-update.victory-theme {
            padding: 20px 15px;
            margin: 20px 10px;
        }

        .victory-heading {
            font-size: 1.8rem;
        }

        .article-update .btn-primary {
            padding: 8px 20px;
            font-size: 1rem;
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<div class="article-update victory-theme">
    <h1 class="victory-heading">Редактирование</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>