
<!--
por padrao o wp usa a variavel s para buscar os posts por GET.
por padrao a action nao busca arquivo algum, faz apenas a adicao do GET na url do site.

the_search_query é a funcao responsavel por trazer o que foi buscado, ou seja,
o que foi digitado no input e passado no GET na variavel s.


por padrao, a variavel s busca: title, content, e excerpt.
No nosso caso nao tem excerpt.

Qnd clicar em buscar sera redirecionado para o arquivo search.php. Como sei que tenho que ir para esse arquivo?
Pq tenho a variavel s com valor... s quer dizer search.
-->

<form action="/" method="GET">
    <div class="modal-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Debitis et harum illum nesciunt praesentium, repudiandae sed tempora.
        </p>
        <div>

            <input type="TEXT" name="s" placeholder="Digite sua pesquisa aqui"/>
            <input type="hidden" name="post_type" value="post">  <!-- irá buscar apenas o post type posts,
            assim nao trará paginas e/ou veiculos -->

        </div>

    </div>
    <div class="modal-footer">
        <button class="modal-action modal-close waves-effect waves-green btn-flat">Buscar</button>
    </div>
</form>