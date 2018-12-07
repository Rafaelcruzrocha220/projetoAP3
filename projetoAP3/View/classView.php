<?php

require_once("Controller/loginController.php");

class classView 
{
    public function escolherClasses(){ 
        
        if($this->verificarUsuario() == true){ ?>
            <div class="containerMenuClasses">
                <h1 class="titleIndex">Suas turmas:</h1>
                <div class="row">
                    <div class="col-md-12 classes">Turma A</div>
                    <div class="col-md-12 classes">Turma B</div>
                    <div class="col-md-12 classes">Turma C</div>
                </div>
                <br>
                <a style="float:right" href="index.php"><span id="voltar" class="btn btn-danger">Voltar</span></a>
            </div>
        <?php }else{?>
            <div class="containerMenuClasses">
                <h1 class="titleFazerLogin">Você precisa estar logado para acessar está página.</h1>
                <a id="botaoHome" href="index.php"><span id="voltar" class="btn btn-primary">Home</span></a>
            </div>
        <?php }
    }

    public function verificarUsuario(){
        return true;
    }

    public function controllerLogin(){

    }
}
