<div class="menuDeslogado">
    <div id="menuJs" class="row menuJs" style="width:100%;">
        <div class="col-md-6 col-sm-6">
            <div id="buttonLogin" class="col-md-10">
                <i class="fas fa-sign-in-alt"></i>
                <p class="iconFont">Logar/Registrar</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <a href="painel.php">
                <div class="col-md-10">
                    <i class="fas fa-book"></i>
                    <p class="iconFont">Minhas notas</p>
                </div>
            </a>
        </div>
    </div>

    <!-- logar -->
    
    <div id="logarJs" class="logarJs" style="display:none;">
        <form>
            <div class="form-group">
                <label for="userLogin">Usuario</label>
                <input type="text" class="form-control" id="userLogin" placeholder="Seu endereço de login">
            </div>
            <div class="form-group">
                <label for="passLogin">Senha</label>
                <input type="password" class="form-control" id="passLogin" placeholder="Sua senha">
            </div>

            <span id="voltarLogin"  class="btn btn-danger">Voltar</span>
            <button type="submit" style="float:right" class="btn btn-primary">Submit</button>
        </form>

        <p id="registrarButtonJs"class="registrar">Você ainda não é um usuario ? Registre-se agora.</p>
    </div>

    <div id="registrarJs" class="registrarJs" style="display:none;">
        <form>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" id="user" placeholder="Seu endereço de login">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Seu endereço de email">
            </div>
            
            <div class="form-group">
                <label for="pass">Senha</label>
                <input type="password" class="form-control" id="pass" placeholder="Sua senha">
            </div>
            
            <span id="voltarRegistrar"  class="btn btn-danger">Voltar</span>
            <button type="submit" style="float:right" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>


<script src="Assets/js/login.js"></script>

