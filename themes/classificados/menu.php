<nav class="z-depth-0 teste">
    <div class="nav-wrapper"> <!--<a href="#!" class="brand-logo">Logo</a>-->
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons icon-menu-mobile">menu</i>
        </a>

        <ul class="right hide-on-med-and-down">
            <li class="active"><a href="<?= home_url() ?>">Início</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('sobre')) ?>">Sobre</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('duvidas')) ?>">Dúvidas</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></li>
            <li><a href="#">Veículos</a></li>
            <li><a href="#">FIPE</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('contato')) ?>">Contato</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('minha-conta')) ?>">Entrar/Cadastrar</a></li>
        </ul>
        <ul class="side-nav menu-mobile" id="mobile-demo">
<!--            <li><a href="#"</a></li>-->
            <li class="active"><a href="<?= home_url() ?>">Início</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('sobre')) ?>">Sobre</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('duvidas')) ?>">Dúvidas</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></li>
            <li><a href="#">Veículos</a></li>
            <li><a href="#">FIPE</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('contato')) ?>">Contato</a></li>
            <li><a href="<?= get_permalink(get_page_by_path('minha-conta')) ?>">Entrar/Cadastrar</a></li>
        </ul>
    </div>
</nav>

