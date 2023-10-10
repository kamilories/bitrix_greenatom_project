<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?php if (!empty($arResult)): ?>
    <div class="main_menu home_menu container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?=SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php foreach ($arResult as $item): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                                
                            </ul>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
<?php endif; ?>

