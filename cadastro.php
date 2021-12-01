<?php
    include "cabecalho.php"
?>
<body>
    <nav class="nav-extended purple lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right ">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
        </div>
        <div class="nav-content">
            <div class="nav-header center">
                <h1>Cadastrar</h1>
                <p>Cadastro de Filmes</p>
            </div>
                <ul class="tabs tabs-transparent purple"></ul>
        </div>
    </nav>
    <!--Titulo do filme-->
    <div class="card_t">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i id='icon_' class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                        <label id='titulo' for="icon_prefix2">Titulo do Filme:</label>
                    </div>


                        <!-- Nota do filme-->
                    <div class="input-field col s12">
                        <fieldset id='nota_x'>
                            <i id='icon_2' class="material-icons prefix">star</i>
                            <input id= 'starrr' type="number" step=".1" min=1 max=10>
                            <label id='titulo_s' for="icon_prefix3">Nota:</label>
                        </fieldset>
                    </div>
                        <!-- COLOCAR CAPA DO FILME-->
                        <fieldset id='file'>
                            <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Capa</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </form>
                             </fieldset>  

                </div>
            </form>
        </div>
    </div>


    <!-- botoes cancelar e cadastrar-->
    <div class="card-action center">
        <a class="btn grey" href="galeria.php">Cancelar</a>
        <a class= "btn purple" href="#">Cadastrar</a>
    </div>


     
                    
                
</body>
</html>