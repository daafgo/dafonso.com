@extends('layouts.app')

@section('title', 'Tweet reference maker Vancouver edition')
@section('content')


    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
{{--                <h1 class="header center white-text-text text-lighten-2">Desarrollador Web</h1>--}}
                <div class="row center">
                    <h2 class="header col s12  white-text">Desarrollador Web</h2>
                </div>
                <div class="row center">
                    <a href="#CV" id="download-button"
                       class="btn-large waves-effect waves-light deep-purple lighten-1">Curriculum</a>
{{--                    <a href="http://materializecss.com/getting-started.html" id="download-button"--}}
{{--                       class="btn-large waves-effect waves-light deep-purple lighten-1">Sobre mi</a>--}}
{{--                    <a href="http://materializecss.com/getting-started.html" id="download-button"--}}
{{--                       class="btn-large waves-effect waves-light deep-purple lighten-1">Blog</a>--}}
                </div>
                <br><br>


            </div>
        </div>
        <div class="parallax"><img src="/img/coding-1853305_1920.jpg"></div>
    </div>
    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">laptop_chromebook</i></h2>
                        <h5 class="center">Desarrollo multilenguaje </h5>

                        <p class="light">Sin miedo a trabajar con nuevos lenguajes de programación o rescatar
                            conocimientos olvidados. <i>"El lenguaje es tan solo una herramienta más del buen
                                desarrollador.</i></p>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Desarrollador FullStack</h5>

                        <p class="light">¿Porque elegir entre Front o Back cuando puedes manejar los dos y tener el
                            doble de diversión?.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax-container black-back align-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="quote  white-text lighten-2  col s12 light">«El problema de los programadores es que
                        nunca se sabe
                        lo que están haciendo hasta que es demasiado tarde». Seymour Cray.</h2>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/web-design-2038872_1920.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <div class="container " id="CV">
        <div class="section">
            <div class="row">
                <h3 class="header center black-text text-lighten-2">Curriculum Vitae</h3>
            </div>
            <div class="row">
                <h4 class="header center black-text text-lighten-2">Experiencia laboral</h4>
            </div>
            <div class="row ">
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image center-align waves-effect waves-block waves-light">
                            <img class="activator  jobLogo responsive-img"
                                 src="/img/20180517ULTEBRA%20SOLUTIONS%20S.L-1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Ultebra Solutions<i
                                        class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.ultebra.eu/">Sitio web</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Ultebra Solutions<i
                                        class="material-icons right ">close</i></span>
                            <p><i class="material-icons ">calendar_today</i>Febrero 2018 - Actualidad</p>
                            <ul class="collection">
                                <li class="collection-item">Desarrollador Senior PHP del proyecto Repair-Pedia</li>
                                <li class="collection-item"> Administración de SOLR Cloud para la inclusion de
                                    documentos en
                                    nuestro buscador
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image center-align waves-effect waves-block waves-light">
                            <img class="activator jobLogo responsive-img" src="/img/terclima-logo.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Terclima Canarias<i
                                        class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.terclima.com/">Sitio web</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Terclima Canarias<i
                                        class="material-icons right ">close</i></span>
                            <p><i class="material-icons ">calendar_today</i>Octubre 2015 - Febrero 2018</p>
                            <ul class="collection">
                                <li class="collection-item"> Desarrollo de Software en PHP, CSS, HTML, DJANGO</li>
                                <li class="collection-item">Implementación y personalización de SuiteCRM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image center-align waves-effect waves-block waves-light">
                            <img class="activator jobLogo responsive-img"
                                 src="/img/marca-universidad-de-la-laguna-original.svg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Universidad de la Laguna<i
                                        class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.ull.es/">Sitio web</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Universidad de la Laguna<i
                                        class="material-icons right">close</i></span>
                            <p><i class="material-icons ">calendar_today</i>Febrero 2014 - Julio 2016</p>
                            <ul class="collection">
                                <li class="collection-item">Atención a usuarios de la sala de ordenadore</li>
                                <li class="collection-item">Administración y mantenimiento de equipos en la sala</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <h4 class="header center black-text text-lighten-2">Formación</h4>
            </div>
            <div class="row ">
                <div class="col s12 m6">
                    <div class="card medium">
                        <div class="card-image center-align waves-effect waves-block waves-light ">
                            <img class="activator  studiesLogo responsive-img"
                                 src="/img/logo-telesforo.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title-formacion card-title  activator grey-text text-darken-4">Técnico Superior de Desarrollo de Aplicaciones Informáticas<i
                                        class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Técnico Superior de Desarrollo de Aplicaciones Informáticas<i
                                        class="material-icons right">close</i></span>
                            <p><i class="material-icons ">calendar_today</i> Septiembre 2007 - Julio 2009<br>Estudios
                                realizados en el IES Telesforo Bravo - Puerto de la cruz</p>
                        </div>
                    </div>

                </div>
                <div class="col s12 m6">
                    <div class="card medium">
                        <div class="card-image center-align waves-effect waves-block waves-light ">
                            <img class="activator studiesLogo responsive-img"
                                 src="/img/marca-universidad-de-la-laguna-original.svg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text card-title-formacion text-darken-4">Graduado En Ingeniería Informática<i
                                        class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Escuela Tecnica Superior de Ingenieria Informática<i
                                        class="material-icons right">close</i></span>
                            <p><i class="material-icons ">calendar_today</i> Septiembre 2010 - Septiembre 2015<br>Estudios
                                realizados en la Escuela Técnica superior de Ingenieria Informáitca en la Universidad de
                                la Laguna </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 class="header center black-text text-lighten-2">Tecnologías</h4>
            </div>
            <div class="row ">
                <div class="col s12 m6">
                    <ul class="collection">
                        <li class="collection-item"> PHP <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> Python <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_half</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> Django <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_outline</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> Laravel <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_half</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                    </ul>
                </div>


                <div class="col s12 m6">
                    <ul class="collection">
                        <li class="collection-item"> CSS <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_half</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> JavaScript <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_half</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> SOLR <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star_outline</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                        <li class="collection-item"> Git <div class="right deep-purple-text"><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i class="material-icons">star</i><i
                                        class="material-icons">star</i><i
                                        class="material-icons">star_outline</i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection