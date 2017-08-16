<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="col s6 m12 l6 offset-l3">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3"><a href="#test-swipe-1">Login</a></li>
                    <li class="tab col s3"><a class="active" href="#test-swipe-2">Criar Conta</a></li>
                </ul>

                <!--Login-->
                <div id="test-swipe-1" class="col s12 m12 l12">
                    <div class="row">
                        <form class="col s12 m12 l12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" class="validate">
                                    <label for="icon_prefix">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_lock" type="password" class="validate">
                                    <label for="icon_lock">Senha</label>
                                </div>
                            </div>
                        </form>
                        <a href="#">Esqueceu sua senha?</a>
                        <a class="waves-effect waves-light btn right">Acessar</a>
                    </div>
                    <a href="#test-swipe-2">Ainda não possui uma conta? Registre-se</a>
                </div>

                <!--cadastro-->
                <div id="test-swipe-2" class="col s12">
                    <div class="row">
                        <form class="col s12 m12 l12    ">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Nome Completo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" class="validate">
                                    <label for="icon_prefix">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_telephone" type="password" class="validate">
                                    <label for="icon_telephone">Senha</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_telephone" type="password" class="validate">
                                    <label for="icon_telephone">Confirmar Senha</label>
                                </div>
                            </div>
                        </form>
                        <a href="#">Já possui uma conta? Faça login</a>
                        <a class="waves-effect waves-light btn right">Criar Conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
