<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.nice-select.min.js"></script>
    <!-- slick js --> 
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/slick.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/waypoints.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/contact.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.form.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="<?=SITE_TEMPLATE_PATH ?>/assets/js/custom.js"></script>
</body>

</html>