<?php include 'header.php';?>

<?php include 'basic-search.php'; ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="row title_div_cars ">
                    <h5>Notícias</h5>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <?php for ($i =0; $i <= 11; $i++ ) { ?>
                    <div class="col s12 m12 l3">
                        <div class="card medium z-depth-1 cards_news_home">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?php bloginfo('template_directory') ?>/img/sample-1.jpg" class="responsive-img">
                            </div>
                            <div class="card-content news_paragraph">
                                <span class="card-title activator grey-text text-darken-4">Card Title</span>
                                <p>
                                    <a href="<?php bloginfo('template_directory') ?>/single-news.php"> In sem justo, commodo ut, suscipit at, pharetra vitae, orci
                                        In sem justo, commodo ut, suscipit at.
                                    </a>
                                </p>
                                <a href="<?php bloginfo('template_directory') ?>/single-news.php" class="d-flex flex-row-reverse">
                                    <p class="waves-effect waves-light p-2 all_news_read_more">Read more <i class="material-icons">chevron_right</i></p>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php }  ?>

                <!--paginação-->
                <div>
                    <div class="row all_news_pagination">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php';?>