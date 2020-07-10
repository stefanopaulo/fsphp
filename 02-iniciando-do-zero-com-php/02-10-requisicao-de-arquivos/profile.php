<article style="
    padding: 5px 20px;
    background: #eee;
    border-radius: 4px;
">
    <h1><?= $profile->name; ?></h1>
    <p>
        Trabalha na <?= $profile->company; ?> <br>
        <a href="mailto:<?= $profile->email ?>">Enviar E-mail</a>
    </p>
</article>