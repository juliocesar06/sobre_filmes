<?php
    include "cabecalho.php"
?>
    <body>
        <!--materialize navebar  cabeçalho-->

    <nav class="nav-extended   purple lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right ">
            <li><a href="galeria.php">Galeria</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
        </ul>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
        <div class="nav-content">
            <div class="nav-header center">
                <h1>Filmes</h1>
            </div>
            <ul class="tabs tabs-transparent purple">
                <li class="tab disable"><a class="active" href="#test1">Todos</a></li>
                <li class="tab disable"><a class="active" href="#test2">Assistidos</a></li>
                <li class="tab disabled"><a class="active" href="#test3">Favoritos</a></li>
            </ul>
        </div>
        </nav>

        <!-- card com o filme replicar para adcionar mais filmes-->
        <div class="row">
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/original/pe17f8VDfzbvbHSAKAlcORtBHmW.jpg">
                        <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i><span class="ttt">9,7</span>
                    </p>
                    <span  class="card-title" >Red Alert</span>
                </div>
            </div> 
        </div>

        <!-- card com o filme replicar para adcionar mais filmes-->
        <div class="row">
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
                        
                        <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i><span id="b_span">9,7</span> 
                    </p>
                    <span id="b_span" class="card-title">Vingadores</span>
                </div>
            </div> 
        </div> 

         <!-- card com o filme replicar para adcionar mais filmes-->
        <div class="row">
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/w300/eDHOutMxLMgComnVhUK0Xfwunu5.jpg">

                        <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i><span id='b_span'>7,1</span> 
                    </p>
                    <span id='b_span' class="card-title">Eternos</span>
                </div>
            </div> 
        </div>
    </body>
</html>