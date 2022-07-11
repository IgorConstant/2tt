<?php require("header.php") ?>

<section id="introBannerPerformance">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="titleService">
                        <p>Performance e Resultados</p>
                        <h1 class="uk-margin-remove">Resultados reais precisam de um planejamento real</h1>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="serviceImg">
                        <img src="assets/images/ilustracao-performance-resultados.jpg" alt="Performance Resultados">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="introServicePerformance">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-collapse" uk-grid>
            <div>
                <div>
                    <div class="bgServicePerformance"></div>
                </div>
            </div>
            <div>
                <div>
                    <div class="introServicePerformance">
                        <h2>É isso o que sua empresa terá conosco!</h2>
                        <p>Campanhas estruturadas e planejadas de acordo com a necessidade do seu negócio. Nosso objetivo são seus objetivos. Sua empresa nos primeiros lugares nas buscas do Google. Seus anúncios serão exibidos para clientes que estão realmente interessados em seu produto ou serviço, aumentando o fluxo de visitas ao seu site e suas vendas. Conte com as infinitas possibilidades de ferramentas como o Facebook Ads, Instagram Ads, Google Ads e muito mais, direcionando sua marca para as pessoas certas.</p>
                        <ul>
                            <li><img src="assets/images/facebook-partner.png" alt="Facebook Partner"></li>
                            <li><img src="assets/images/rd-partner.png" alt="RD Partner"></li>
                            <li><img src="assets/images/google-partner.png" alt="Google Partner"></li>
                        </ul>
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
                        <p>A Duetto conta com uma equipe especializada na busca pela melhor performance de suas campanhas digitais. Somos focados em resultados e garantimos que sua empresa alcançará os objetivos desejados.</p>
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
            <h1 class="uk-margin-remove">Conheça alguns de nossos cases de sucesso <br> em Performance e Resultados</h1>
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
            <h5 class="uk-margin-remove">Quero saber mais sobre Performance e Resultados</h5>
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