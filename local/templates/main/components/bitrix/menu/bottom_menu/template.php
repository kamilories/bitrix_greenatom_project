<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?php if (!empty($arResult)): ?>
 
    <div class="footer_menu_item">
        <?php foreach ($arResult as $item): ?>
            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
