<?php require('header.php') ?>

<section id="introBannerMarcas">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="titleService">
                        <p>Marcas Autênticas/Branding</p>
                        <h1 class="uk-margin-remove">Uma marca mais forte <br> conquista mais clientes</h1>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="serviceImg">
                        <img src="assets/images/ilustracao-marcas-autenticas.jpg" alt="Ilustração Serviço - Marcas Autenticas">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="introServiceMarcas">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-collapse" uk-grid>
            <div>
                <div>
                    <div class="bgService"></div>
                </div>
            </div>
            <div>
                <div>
                    <div class="introService">
                        <h2>Para alcançar os <br> melhores resultado, <br> sua marca deve ser forte</h2>
                        <p>Isso vai muito além de um logo. Marcas fortes seguem estratégias inovadoras de posicionamento, fortalecimento, branding, naming de produtos e design. </p>
                        <p>A Duetto te ajuda a elaborar um plano de marca que torne sua empresa conhecida e reconhecida no mercado, trazendo os resultados que você espera no tempo que você precisa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="middleService">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-auto@m">
                <div>
                    <div class="iconMiddle">
                        <img src="assets/images/icon-duetto.png" alt="Icone Duetto">
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div>
                    <div class="titleMiddle">
                        <h2>Por que a Duetto?</h2>
                        <p>São anos no mercado, com um extenso portfólio de cases de sucesso em branding, sempre fazendo da sua meta o nosso resultado. <br> A Duetto é a melhor agência para construção e fortalecimento da sua marca.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="casesMarketing">
    <div class="uk-container">
        <div class="titleCases">
            <p>Cases de Sucesso</p>
            <h1 class="uk-margin-remove">Conheça alguns de nossos cases de sucesso <br> em Design Gráfico</h1>
        </div>

        <section id="portfolio">
            <div class="uk-container">

                <div class="filter-area uk-margin-top">
                    <div uk-filter="target: .js-filter">
                        <ul class="uk-subnav uk-subnav-pill">
                            <li class="uk-active" uk-filter-control><a href="#">Todos</a></li>
                            <li uk-filter-control=".anuncios"><a href="#">Anúncios</a></li>
                            <li uk-filter-control=".impressos"><a href="#">Impressos</a></li>
                            <li uk-filter-control=".midiasSociais"><a href="#">Mídias Sociais</a></li>
                            <li uk-filter-control=".logos"><a href="#">Logos</a></li>
                            <li uk-filter-control=".comerciais"><a href="#">Comerciais para TV</a></li>
                        </ul>

                        <ul class="js-filter uk-child-width-1-1 uk-child-width-1-3@m uk-text-center" uk-grid>
                            <li class="anuncios">
                                <a href="#teste" uk-toggle><img class="roundedImg" src="assets/images/portfolio-ilhas-post.png" alt="Portfolio Teste"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section id="contactUs">
    <div class="uk-container">
        <div class="min-title">
            <h5 class="uk-margin-remove">Quero saber mais sobre Marcas</h5>
        </div>
        <div class="block-form">
            <h2>Nós ligamos para você.</h2>

            <form action="mail/" class="uk-grid-small" method="POST" uk-grid>
                <div class="uk-width-1-3@s">
                    <input class="uk-input" type="text" placeholder="Nome *" required>
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input" type="text" placeholder="Telefone *" required>
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input" type="email" placeholder="E-mail *" required>
                </div>
                <div class="uk-width-1-1@s">
                    <textarea class="uk-textarea" rows="4" placeholder="Deixe sua mensagem" required></textarea>
                </div>
                <div class="uk-width-1-1@s uk-text-center">
                    <button class="uk-button uk-button-default" type="submit">ENVIAR MEUS DADOS</button>
                </div>
            </form>
        </div>
    </div>
</section>