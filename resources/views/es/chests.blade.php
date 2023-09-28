@extends('layout.es.app')
@include('layout.es.header')
@section('content')
<main class="row">
    <div class="col-lg-2"></div>
    <div id="lipsum" class="box col-lg-8 row">
        <div class="col-lg-12" style="    background: url(./assets/images/chests.png);
    height: 10rem;
    color: white;
    display: flex;
    justify-items: center;
    text-align: center;
    align-items: center;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;">
            <h1 class="text-center" style="width: 100%;">Coin Master cofres</h1>
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div>
                <p>Coin Master es un juego de estrategia en parte de construcción de ciudades y en parte de máquinas tragamonedas con una economía que gira principalmente en torno a los cofres. Ganas niveles y desbloqueas nuevas etapas gastando monedas para construir y mejorar las estructuras de la aldea. Los cofres contienen artículos aleatorios que pueden ayudar a acelerar el proceso al permitirte ganar recursos más rápidamente.</p>
                <p>Es importante saber qué son los cofres y cuándo comprarlos si desea pasar las etapas de manera eficiente. Esta guía sobre <strong>cofres Coin Master</strong> cubrirá toda la información clave sobre los cofres: qué son, qué contienen y sus probabilidades de recibir cartas y giros.</p>
                <h2>¿Qué son los cofres Coin Master?</h2>
                <p>Los cofres de Coin Master son cofres del tesoro que se ganan al jugar. Cada cofre tiene la posibilidad de contener monedas, giros gratis, cartas, Pet XP o Pet Food. Hay muchos tipos de cofres Coin Master; cuanto más alto sea el cofre, más probabilidades hay de que suelte un objeto de alto nivel.</p>
                <h2>¿Cuáles son los diferentes tipos de cofres Coin Master?</h2>
                <p>Hay literalmente docenas de diferentes tipos de cofres en Coin Master. Afortunadamente, los desarrolladores tienen un desglose completo de los tipos, lo que contienen y sus probabilidades de obtener ciertas gotas. Hemos reunido una breve lista de los principales tipos de cofres que encontrarás en el juego. Puede encontrar la lista completa con todos los cofres promocionales en <a href="https://support.coinmastergame.com/hc/en-us/articles/360030411833-Chest-Probability" target="_blank" rel=" noopener">sitio web oficial de Coin Master</a>.</p>
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Tipo de pecho</strong></td>
                                <td><strong>Desbloqueado a nivel de aldea...</strong></td>
                                <td><strong>Contiene…</strong></td>
                            </tr>
                            <tr>
                                <td>Cofre de madera</td>
                                <td>3</td>
                                <td>2 cartas</td>
                            </tr>
                            <tr>
                                <td>Cofre dorado</td>
                                <td>3</td>
                                <td>4 cartas</td>
                            </tr>
                            <tr>
                                <td>Cofre Mágico</td>
                                <td>3</td>
                                <td>8 cartas</td>
                            </tr>
                            <tr>
                                <td>Pequeño cofre de la suerte</td>
                                <td>4</td>
                                <td>6 cartas (posibilidad de una carta de comodín), Pet XP y giros</td>
                            </tr>
                            <tr>
                                <td>Cofre de Pascua pequeño</td>
                                <td>10</td>
                                <td>6 cartas (posibilidad de una carta de comodín), Pet XP y giros</td>
                            </tr>
                            <tr>
                                <td>Cofre de Pascua grande</td>
                                <td>20</td>
                                <td>8 cartas (posibilidad de una carta de comodín), Pet XP y giros</td>
                            </tr>
                            <tr>
                                <td>Gran cofre de la suerte</td>
                                <td>30</td>
                                <td>8 cartas (posibilidad de una carta de comodín), Pet XP y giros</td>
                            </tr>
                            <tr>
                                <td>Cofre de San Valentín</td>
                                <td>30</td>
                                <td>6 cartas (posibilidad de una carta de comodín), refrigerios para mascotas, XP para mascotas y giros</td>
                            </tr>
                            <tr>
                                <td>Cofre de zafiro</td>
                                <td>70</td>
                                <td>6 cartas, giros y XP para mascotas</td>
                            </tr>
                            <tr>
                                <td>Cofre de rubíes</td>
                                <td>110</td>
                                <td>8 cartas (posibilidad de una carta de comodín), tiradas, Pet XP y 1 Pet Snack</td>
                            </tr>
                            <tr>
                                <td>Cofre misterioso</td>
                                <td>–</td>
                                <td>6 cartas (posibilidad de una carta de comodín), bocadillos para mascotas y giros</td>
                            </tr>
                            <tr>
                                <td>Cofre Esmeralda</td>
                                <td>–</td>
                                <td>4 cartas, tiradas y XP para mascotas</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>¿Cuál es el mejor cofre en Coin Master?</h2>
            </div>
            <p> Probablemente esté diciendo en este momento: "Vaya al grano y dígame: ¿qué cofre debo comprar? "Desafortunadamente, no hay una respuesta rápida
                para esa pregunta. Cada tipo de cofre tiene sus propias probabilidades de caída, por lo que el cofre que debe comprar depende de lo que necesita en este momento. </p>
            <p>Por ejemplo, ¿quieres completar tus colecciones de cartas de bajo nivel? ¡Entonces aléjate de los cofres de nivel superior! Los cofres de nivel más bajo tienen tasas de caída mucho más altas para cartas de 1 y 2 estrellas, por lo que es ahí donde debes gastar tus monedas.</p>
            <p>¿Estás corto de dinero y necesitas una inyección de monedas para pasar a la siguiente etapa? ¡Entonces deberías comprar un cofre que realmente tenga la posibilidad de arrojar monedas!</p>
            <h2>¿Cuándo debo comprar cofres? </h2>
            <p>Hemos establecido que los cofres son importantes para progresar en Coin Master. En este punto, puede pensar que comprar más cofres significa que es más fácil completar colecciones de cartas y pasar a aldeas más altas. Si bien eso suele ser cierto, el simple hecho de acumular cofres no es la forma más rentable de avanzar en el juego.</p>
            <p>Descubrimos que incluso en un juego como Coin Master, la paciencia es una virtud. Esto es doblemente cierto en los Villages anteriores. Dado que las colecciones de bajo nivel se componen de cartas muy comunes, puedes completarlas simplemente saqueando a otros vikingos y terminando tus aldeas.</p>
            <p> En algún momento, necesitarás algunas cartas bastante raras. Algunas de ellas son demasiado raras para recolectarlas fácilmente solo asaltando aldeas. Aquí es cuando deberías comenzar a considerar comprar cofres. </p>
            <p>Otro buen momento para comprar cofres es cuando estás a una carta de completar un conjunto, especialmente si es súper raro o dorado.</p>
            <p>Con esto concluye nuestra guía rápida de cofres Coin Master. Ahora que sabes qué son los cofres y cuándo comprarlos, puedes empezar a conquistar de verdad a tus rivales en Coin Master.</p>
        </div>
        </div>
        </div>
        </main>