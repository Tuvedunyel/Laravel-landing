<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <title>Landing BTG</title>

    </head>
    <body class="antialiased">
        <header>
            <div class="container-narrow">
                <strong>Profitez du meilleur pour vos réseaux sociaux</strong>
                <img src="{{ asset('img/arrow.svg') }}" alt="Flèche pointant vers la droite">
                <a href="#visible">Je veux être plus visible</a>
            </div>
        </header>
        <section class="hero-banner">
            <div class="container-narrow">
                <img src="{{ asset('img/logo.svg') }}" alt="BTG Communication" class="logo">
                <h1>
                    <span class="light">Quelle que soit votre structure, il est primordial de</span>
                    <img src="{{ asset('img/white-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux">
                    <span class="strong">communiquer sur les réseaux sociaux.</span>
                </h1>
            </div>
        </section>
        <section class="communiquez">
            <div class="container-narrow">
                <img src="{{ asset('img/as-de-coeur.png') }}" alt="As de coeur" class="as-de-coeur">
                <h2>Communiquez comme un <span>AS</span></h2>
                <img src="{{ asset('img/black-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux" class="symbols">
                <p>Que vous soyez nouveau sur le marché, ou implanté depuis des années, que vous soyez une TPE, PME ou une multinationale, qu’importe votre secteur, communiquer est essentiel ! Ne dit-on pas que l’on peut avoir le meilleur produit du monde, sans communication on ne vendra pas ?</p>
                <strong>Pour vous rendre visible, vous aurez donc besoin d’une bonne stratégie, de bonnes idées, et de temps !</strong>
            </div>
        </section>
        <section class="cards">
            <div class="container">
                <ul class="cards-list">
                    <li>
                        <img src="{{ asset('img/gagnez.png') }}" alt="As de coeur">
                        <div class="content">
                            <h3><strong>Gagnez</strong>de l'audience</h3>
                            <p>Communiquer sur les réseaux est un moyen rapide et efficace de vous rapprocher de vos clients. Ainsi échanger en direct avec votre audience vous permettra de mieux comprendre leur besoin et attentes.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/toucher.png') }}" alt="As de carreaux">
                        <div class="content">
                            <h3><strong>Touchez</strong>de nouvelles cibles</h3>
                            <p>Communiquer sur les réseaux est un moyen rapide et efficace de vous rapprocher de vos clients. Ainsi échanger en direct avec votre audience vous permettra de mieux comprendre leur besoin et attentes.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/parlez.png') }}" alt="As de pics">
                        <div class="content">
                            <h3><strong>Parlez</strong>à vos clients</h3>
                            <p>Communiquer sur les réseaux est un moyen rapide et efficace de vous rapprocher de vos clients. Ainsi échanger en direct avec votre audience vous permettra de mieux comprendre leur besoin et attentes.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/affirmez.png') }}" alt="As de trefles">
                        <div class="content">
                            <h3><strong>Affirmez</strong>votre image</h3>
                            <p>Communiquer sur les réseaux est un moyen rapide et efficace de vous rapprocher de vos clients. Ainsi échanger en direct avec votre audience vous permettra de mieux comprendre leur besoin et attentes.</p>
                        </div>
                    </li>
                </ul>
                <div class="btn-container">
                    <img src="{{ asset('img/black-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux">
                    <a href="#visible" class="btn">Je veux être plus visible</a>
                    <img src="{{ asset('img/black-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux">
                </div>
            </div>
        </section>
        <section class="slogan">
            <div class="container-narrow">
                <h2>&#10094;&#10094; Très <span class="orange">rapidement</span>, notre présence sur les <span class="orange">réseaux sociaux</span> a été <span class="orange">adaptée</span> à notre cible et a été beaucoup <span class="orange">plus efficace. &#10095;&#10095;</span></h2>
                <img src="{{ asset('img/black-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux">
                <p>Arthur V. CEO.</p>
            </div>
        </section>
        <article id="visible" class="solutions">
            <div class="container">
                <h2>Nos <span class="orange">solutions</span></h2>
                <img src="{{ asset('img/white-symbols.svg') }}" alt="Différent symbole présent sur les cartes de jeux. Coeur / Trèfles / Pics / Carreaux" class="white-symbols">
            </div>
        </article>
    </body>
</html>
