<?php require('header.php') ?>

<section id="introBannerDesign">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="titleService">
                        <p>Design Gráfico</p>
                        <h1 class="uk-margin-remove">A primeira impressão <br> é a que fica!</h1>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="serviceImg">
                        <img src="assets/images/ilustracao-design-grafico.jpg" alt="Ilustração Serviço - Design Gráfico">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="introServiceDesign">
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
                        <h2>Qual impressão você quer deixar para seu cliente?</h2>
                        <p>Sua marca precisa de um design esteticamente bonito, eficiente e que passe a mensagem correta sobre os valores e diferenciais da sua empresa.</p>
                        <p>Conte com a Duetto para a criação de sua identidade visual, layouts para redes sociais, rótulos, embalagens e todo tipo de material impresso para sua marca chegar ainda mais longe.</p>
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
                        <p>A Duetto conta com os melhores talentos na criação de peças únicas e eficientes para a comunicação online e offline da sua empresa.</p>
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
            <h5 class="uk-margin-remove">Quero saber mais sobre Design Gráfico</h5>
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