<div class="container-fluid">
    <div class="row title_div_cars">
        <h5>Busque Rápido</h5>
    </div>
</div>

<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12 m2 l2">
                <input id="code" type="text" class="validate">
                <label for="code">Código: </label>
            </div>

            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Estado</option>
                    <option value="1">Novos</option>
                    <option value="2">Usados</option>
                    <option value="3">Seminovos</option>
                </select>
            </div>

            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Cidade</option>
                    <option value="1">Jataĩ</option>
                </select>
            </div>


            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Tipo</option>
                    <option value="1">Carros</option>
                    <option value="2">Motos</option>
                </select>
            </div>

            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Marca</option>
                    <option value="1">Marca 1</option>
                    <option value="2">Marca 2</option>
                    <option value="3">Marca 3</option>
                </select>
            </div>

            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Modelo</option>
                    <option value="1">Modelo 1</option>
                    <option value="2">Modelo 2</option>
                    <option value="3">Modelo 3</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Ano De:</option>
                    <option value="1">2017</option>
                    <option value="2">2017</option>
                    <option value="3">2017</option>
                </select>
            </div>

            <div class="input-field col s12 m2 l2">
                <select>
                    <option value="" disabled selected>Ano Até:</option>
                    <option value="1">2017</option>
                    <option value="2">2017</option>
                    <option value="3">2017</option>
                </select>
            </div>

            <div class="input-field col s12 m2 l2">
                <input id="inicial_price" type="text" class="validate">
                <label for="inicial_price">Preço De: </label>
            </div>

            <div class="input-field col s12 m2 l2">
                <input id="final_price" type="text" class="validate">
                <label for="final_price">Preço Até: </label>
            </div>

            <div class="input-field col s12 m2 l2 btn_basic_search">
                <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
                    <i class="material-icons right">search</i>
                </button>
            </div>
            <div class="input-field col s12 m2 l2 btn_basic_search">
                <a href="<?php bloginfo('template_directory') ?>/advanced-search.php" class="btn waves-effect waves-light">Busca Avançada
                        <i class="material-icons right">send</i>
                </a>
            </div>
        </div>
    </form>
</div>