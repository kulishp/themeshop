<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\AssetShop;

$bundle = AssetShop::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '/frontend/web/favicon.ico',
    ]); ?>
    <?php $this->head() ?>
</head>
<body class="common-home">
<?php $this->beginBody() ?>
<div id="page" class="container">
    <header>
        <nav id="top">
            <div class="container">
                <div class="header-top-left">
                    <div class="header-left-cms">
                        <aside id="header-left">
                            <div class="html-content">
                                <div class="box-content">
                                    <div id="ttcmsheader">
                                        <div class="ttheader-service">mid season sale is here!-<a class="ttheader-btn"
                                                                                                  href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>

                <div class="header-top-right">
                    <div id="top-links" class="nav pull-right">
                        <ul class="list-inline">
                            <li>
                                <div class="dropdown"><a
                                            href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/account"
                                            title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-user"></i> <span class="ttuserheading">My Account</span><i
                                                class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                                        <li>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/register"><i
                                                        class='fa fa-user'></i> Register</a></li>
                                        <li>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/login"><i
                                                        class='fa fa-sign-in'></i> Login</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/wishlist"
                                   id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span
                                            class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="full-header">
            <div class="container">

                <div class="header-left">
                    <div id="logo">
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=common/home">
                            <img
                                    src="<?= Url::to([$bundle->baseUrl . '/image/catalog/logo.png']) ?>"
                                    title="Your Store" alt="Your Store" class="img-responsive"/></a>
                    </div>
                </div>
                <div class="right-block">

                    <div class="header-right-cms">
                        <aside id="header-right">
                            <div class="html-content">
                                <div class="box-content">
                                    <div class="col-xs-12 col-sm-6 col-lg-6" id="ttcmsheaderservices">
                                        <div class="ttcmsheaderservice col-sm-12">
                                            <div class="ttsupport ttservice col-sm-4">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttsupport_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">Call center</div>
                                                            <div class="service-desc"><a>088-888-8888</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttcontact ttservice col-sm-4">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttcontact_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">email</div>
                                                            <div class="service-desc"><a href="mailto:info@website.com">info@website.com</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </aside>

                    </div>

                    <div class="header-right">
                        <div id="cart" class="btn-group">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                    class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i
                                        class="fa fa-shopping-cart"></i>
                                <span class="cart-heading">Cart</span>
                                <span id="cart-total">0 items</span></button>
                            <ul class="dropdown-menu pull-right header-cart-toggle">
                                <li>
                                    <p class="text-center">Your shopping cart is empty!</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="menu-container">
                    <div class="col-sm-6 header-middle">
                        <div id="header-search" class="input-group">
                            <input type="text" name="search" value="" placeholder="Search"
                                   class="form-control input-lg"/>
                            <select name="category_id" class="form-control innner-search">
                                <option value="0">Categories</option>
                                <option value="20">Roses</option>

                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evil 25</option>

                                <option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC-01</option>
                                <option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC-02</option>
                                <option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC-03</option>
                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop ache</option>

                                <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac-01</option>
                                <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac-02</option>
                                <option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac-03</option>
                                <option value="18">Flower basket</option>

                                <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>

                                <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>

                                <option value="25">Gerberas</option>

                                <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mixed flowers</option>

                                <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test
                                    1
                                </option>
                                <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test
                                    2
                                </option>
                                <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mice and Trackballs</option>

                                <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>

                                <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>

                                <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>

                                <option value="65">Orchids</option>

                                <option value="67">Exotic flowers</option>

                                <option value="66">Lilies</option>

                                <option value="68">Flower &amp; teddy</option>

                            </select>
                            <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg header-search-btn"><i class="fa fa-search"></i>
	Search
	</button>
  </span>
                        </div>

                        <script type="text/javascript">
                            $('#header-search button.header-search-btn').bind('click', function () {
                                url = 'index.php?route=product/search';

                                var search = $('#header-search input[name=\'search\']').prop('value');

                                if (search) {
                                    url += '&search=' + encodeURIComponent(search);
                                }

                                var category_id = $('#header-search select[name=\'category_id\']').prop('value');

                                if (category_id > 0) {
                                    url += '&category_id=' + encodeURIComponent(category_id);
                                }

                                url += '&sub_category=true';
                                url += '&description=true';

                                location = url;
                            });

                            $('#header-search input[name=\'search\']').bind('keydown', function (e) {
                                if (e.keyCode == 13) {
                                    $('#header-search button.header-search-btn').trigger('click');
                                }
                            });

                        </script>
                    </div>
                    <div id="tttoplink_block">
                        <ul id="tt_toplink" class="block_content">
                            <li class="tttoplink tthome"><a title="home" href="#">Home</a></li>
                            <li class="tttoplink"><a
                                        href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/manufacturer">Brands</a>
                            </li>
                            <li class="tttoplink"><a
                                        href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/voucher">Gift
                                    Certificates</a></li>
                            <li class="tttoplink"><a
                                        href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=affiliate/login">Affiliate</a>
                            </li>
                            <li class="tttoplink"><a
                                        href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/contact">Contact
                                    Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="header-bottom">
            <aside id="header-bottom">
                <div class="html-content">
                    <div class="box-content">
                        <div id="ttcmslink">
                            <div class="container">
                                <div class="link-wrapper">
                                    <div class="top-link-title"><span class="ttlink go">top link</span></div>
                                    <ul class="ttlink-main">
                                        <li><a href="#"><span class="ttlink link1">books and media</span></a></li>
                                        <li><a href="#"><span class="ttlink link2">clothing</span></a></li>
                                        <li><a href="#"><span class="ttlink link3">desktop</span></a></li>
                                        <li><a href="#"><span class="ttlink link4">electronics</span></a></li>
                                        <li><a href="#"><span class="ttlink link5">health</span></a></li>
                                        <li><a href="#"><span class="ttlink link6">jewellery</span></a></li>
                                        <li><a href="#"><span class="ttlink link7">laptop</span></a></li>
                                        <li><a href="#"><span class="ttlink link8">categorized</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>

        </div>
    </header>

    <div class="container">
        <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="main-category-list left-main-menu">
                    <div class="TT-panel-heading">Categories</div>
                    <div class="menu-category">
                        <ul class="dropmenu">
                            <li class="TT-Sub-List dropdown">
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=20"
                                   class="TT-Category-List">Roses</a>
                                <span class="active_menu"></span>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 mega-dropdown-menu columns-2"
                                            style="width: 320px;">

                                            <li class="dropdown first" style="width: 50%;">
                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=20_26"
                                                   class="single-dropdown">Evil 25</a>

                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled childs_2">

                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=26_59">
                                                                    PC-01</a>
                                                            </li>
                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=26_60">
                                                                    PC-02</a>
                                                            </li>
                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=26_61">
                                                                    PC-03</a>
                                                            </li>
                                                            <li><a href="">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="dropdown first" style="width: 50%;">
                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=20_27"
                                                   class="single-dropdown">stop ache</a>

                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled childs_2">

                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=27_62">
                                                                    Mac-01</a>
                                                            </li>
                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=27_63">
                                                                    Mac-02</a>
                                                            </li>
                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=27_64">
                                                                    Mac-03</a>
                                                            </li>
                                                            <li><a href="">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class="TT-Sub-List dropdown">
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=18"
                                   class="TT-Category-List">Flower basket</a>
                                <span class="active_menu"></span>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=18_46">Macs</a>


                                            </li>
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=18_45">Windows</a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class="TT-Sub-List dropdown">
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25"
                                   class="TT-Category-List">Gerberas</a>
                                <span class="active_menu"></span>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                            <li class="dropdown" style="width: 100%;">
                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25_28"
                                                   class="single-dropdown"> Mixed flowers</a>

                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled childs_2">

                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=28_35">
                                                                    test 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=28_36">
                                                                    test 2</a>
                                                            </li>
                                                            <li><a href="">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25_29">Mice
                                                    and Trackballs</a>


                                            </li>
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25_30">Printers</a>


                                            </li>
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25_31">Scanners</a>


                                            </li>
                                            <li class="dropdown" style="width: 100%;">

                                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=25_32">Web
                                                    Cameras</a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=65">Orchids</a>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=67">Exotic
                                    flowers</a>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=66">Lilies</a>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/category&amp;path=68">Flower
                                    &amp; teddy</a>


                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1 single-dropdown-menu">
                                        </ul>
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>
                <div class="swiper-viewport">
                    <div id="banner0" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href="#"><img
                                            src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/banners/left-banner-01-290x408.jpg"
                                            alt="Left-Banner" class="img-responsive"/></a></div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript"><!--
                    $('#banner0').swiper({
                        effect: 'fade',
                        autoplay: 2500,
                        autoplayDisableOnInteraction: false
                    });
                    --></script>
                <div class="html-content">
                    <div class="box-content">
                        <div id="ttcmstestimonial">
                            <div class="tttestimonial-content">
                                <div class="tttestimonial-inner">
                                    <h4 class="title_block"><a href="#" title="Extra">Testimonials</a></h4>
                                    <ul id="tttestimonial-carousel" class="tt-carousel block_content">
                                        <li>
                                            <div class="testimonial-image"><img alt=""
                                                                                src="image/catalog/demo/banners/user1.jpg">
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="testimonial-user-title">
                                                    <h3>John duff</h3>
                                                    <span class="tttestimonial-subtitle">Producer</span></div>
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar nullam mattis..</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testimonial-image"><img alt=""
                                                                                src="image/catalog/demo/banners/user2.jpg">
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="testimonial-user-title">
                                                    <h3>John duff</h3>
                                                    <span class="tttestimonial-subtitle">Producer</span></div>
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar nullam mattis..</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testimonial-image"><img alt=""
                                                                                src="image/catalog/demo/banners/user3.jpg">
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="testimonial-user-title">
                                                    <h3>John duff</h3>
                                                    <span class="tttestimonial-subtitle">Producer</span></div>
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar nullam mattis.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured-carousel products-list">
                    <div class="box-heading"><h3>Featured</h3></div>
                    <div class="featured-items products-carousel row">
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=43">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/06-80x80.jpg"
                                             title="perspiciatis unde omnis" alt="perspiciatis unde omnis"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/04-80x80.jpg"
                                             title="perspiciatis unde omnis" alt="perspiciatis unde omnis"/>
                                    </a>
                                </div>
                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=43">perspiciatis
                                                unde omnis</a></h4>
                                        <!--<p>

                                        Intel Core 2 Duo processor

                                        Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

                                        1GB memory, larger hard drives

                                        The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

                                        Sleek, 1.08-inch-thin design

                                        MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

                                        Built-in iSight camera

                                        Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth

                                ..</p>-->

                                        <div class="price">
                                            $602.00
                                            <span class="price-tax">Ex Tax: $500.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('43');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('43');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('43');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=40">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/02-80x80.jpg"
                                             title="voluptate velit esse" alt="voluptate velit esse"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/11-80x80.jpg"
                                             title="voluptate velit esse" alt="voluptate velit esse"/>
                                    </a>
                                </div>
                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=40">voluptate
                                                velit esse</a></h4>
                                        <!--<p>
                                    iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
                                ..</p>-->

                                        <div class="price">
                                            $123.20
                                            <span class="price-tax">Ex Tax: $101.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('40');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('40');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('40');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=42">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/01-80x80.jpg"
                                             title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/06-80x80.jpg"
                                             title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>
                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=42">aliquam
                                                quaerat voluptatem</a></h4>
                                        <!--<p>
                                    The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve.

                                    The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological data.

                                    Offering accurate, brilliant color performance, the Cinema HD delivers up to 16.7 million colors across a wide gamut allowing you to see subtle nuances between colors from soft pastels to rich jewel tones. A wide viewing angle ensures uniform color from edge to edge. Apple's ColorSync technology allows you to create custom profiles to maintain consistent color onscreen and in print. The result: You can confidently use this display in all your color-critical applications.

                                    Housed in a new aluminum design, the display has a very thin bezel that enhances visual accuracy. Each display features two FireWire 400 ports and two USB 2.0 ports, making attachment of desktop peripherals, such as iSight, iPod, digital and still cameras, hard drives, printers and scanners, even more accessible and convenient. Taking advantage of the much thinner and lighter footprint of an LCD, the new displays support the VESA (Video Electronics Standards Association) mounting interface standard. Customers with the optional Cinema Display VESA Mount Adapter kit gain the flexibility to mount their display in locations most appropriate for their work environment.

                                    The Cinema HD features a single cable design with elegant breakout for the USB 2.0, FireWire 400 and a pure digital connection using the industry standard Digital Video Interface (DVI) interface. The DVI connection allows for a direct pure-digital connection.


                                    Features:

                                    Unrivaled display performance


                                        30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.

                                        Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.

                                        Wide-format design for simultaneous display of two full pages of text and graphics.

                                        Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks

                                        Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.

                                        Lightning-fast pixel response for full-motion digital video playback.

                                        Support for 16.7 million saturated colors, for use in all graphics-intensive applications.


                                    Simple setup and operation


                                        Single cable with elegant breakout for connection to DVI, USB and FireWire ports

                                        Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.

                                        Two FireWire 400 ports to support iSight and other desktop peripherals


                                    Sleek, elegant design


                                        Huge virtual workspace, very small footprint.

                                        Narrow Bezel design to minimize visual impact of using dual displays

                                        Unique hinge design for effortless adjustment

                                        Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)


                                    Technical specifications

                                    Screen size (diagonal viewable image size)


                                        Apple Cinema HD Display: 30 inches (29.7-inch viewable)


                                    Screen type


                                        Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)


                                    Resolutions


                                        2560 x 1600 pixels (optimum resolution)

                                        2048 x 1280

                                        1920 x 1200

                                        1280 x 800

                                        1024 x 640


                                    Display colors (maximum)


                                        16.7 million


                                    Viewing angle (typical)


                                        170° horizontal; 170° vertical


                                    Brightness (typical)


                                        30-inch Cinema HD Display: 400 cd/m2


                                    Contrast ratio (typical)


                                        700:1


                                    Response time (typical)


                                        16 ms


                                    Pixel pitch


                                        30-inch Cinema HD Display: 0.250 mm


                                    Screen treatment


                                        Antiglare hardcoat


                                    User controls (hardware and software)


                                        Display Power,

                                        System sleep, wake

                                        Brightness

                                        Monitor tilt


                                    Connectors and cables
                                    Cable


                                        DVI (Digital Visual Interface)

                                        FireWire 400

                                        USB 2.0

                                        DC power (24 V)


                                    Connectors


                                        Two-port, self-powered USB 2.0 hub

                                        Two FireWire 400 ports

                                        Kensington security port


                                    VESA mount adapter
                                    Requires optional Cinema Display VESA Mount Adapter (M9649G/A)


                                        Compatible with VESA FDMI (MIS-D, 100, C) compliant mounting solutions


                                    Electrical requirements


                                        Input voltage: 100-240 VAC 50-60Hz

                                        Maximum power when operating: 150W

                                        Energy saver mode: 3W or less


                                    Environmental requirements


                                        Operating temperature: 50° to 95° F (10° to 35° C)

                                        Storage temperature: -40° to 116° F (-40° to 47° C)

                                        Operating humidity: 20% to 80% noncondensing

                                        Maximum operating altitude: 10,000 feet


                                    Agency approvals


                                        FCC Part 15 Class B

                                        EN55022 Class B

                                        EN55024

                                        VCCI Class B

                                        AS/NZS 3548 Class B

                                        CNS 13438 Class B

                                        ICES-003 Class B

                                        ISO 13406 part 2

                                        MPR II

                                        IEC 60950

                                        UL 60950

                                        CSA 60950

                                        EN60950

                                        ENERGY STAR

                                        TCO '03


                                    Size and weight
                                    30-inch Apple Cinema HD Display


                                        Height: 21.3 inches (54.3 cm)

                                        Width: 27.2 inches (68.8 cm)

                                        Depth: 8.46 inches (21.5 cm)

                                        Weight: 27.5 pounds (12.5 kg)


                                    System Requirements


                                        Mac Pro, all graphic options

                                        MacBook Pro

                                        Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT DDL or better

                                        Power Mac G5 (PCI Express), all graphics options

                                        PowerBook G4 with dual-link DVI support

                                        Windows PC and graphics card that supports DVI ports with dual-link digital bandwidth and VESA DDC standard for plug-and-play setup

                                ..</p>-->
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$110.00</span> <span
                                                    class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('42');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('42');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=30">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/02-80x80.jpg"
                                             title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/12-80x80.jpg"
                                             title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>
                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=30">aliquam
                                                quaerat voluptem</a></h4>
                                        <!--<p>
                                    Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably 'chunkier'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR's, an important difference when compared to the latter is that the EOS 5D doesn't have any environmental seals. While Canon don't specifically refer to the EOS 5D as a 'professional' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they've not bought too many EF-S lenses...) äë
                                ..</p>-->

                                        <div class="price">
                                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $80.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('30');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('30');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('30');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=41">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/09-80x80.jpg"
                                             title="magni dolores eosquies" alt="magni dolores eosquies"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/04-80x80.jpg"
                                             title="magni dolores eosquies" alt="magni dolores eosquies"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>
                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=41">magni
                                                dolores eosquies</a></h4>
                                        <!--<p>
                                    Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.
                                ..</p>-->
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$110.00</span> <span
                                                    class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('41');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('41');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('41');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bestseller-carousel products-list">
                    <div class="box-heading">
                        <h3>Bestsellers</h3>
                    </div>
                    <div class="bestseller-items products-carousel row">
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=41">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/09-80x80.jpg"
                                             title="magni dolores eosquies" alt="magni dolores eosquies"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/04-80x80.jpg"
                                             title="magni dolores eosquies" alt="magni dolores eosquies"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=41">magni
                                                dolores eosquies</a></h4>
                                        <!--<p>
                                    Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.
                                ..</p>-->
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$110.00</span> <span
                                                    class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('41');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('41');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('41');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=47">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/10-80x80.jpg"
                                             title="aliquam quat voluptatem" alt="aliquam quat voluptatem"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/12-80x80.jpg"
                                             title="aliquam quat voluptatem" alt="aliquam quat voluptatem"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=47">aliquam
                                                quat voluptatem</a></h4>
                                        <!--<p>
                                    Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you&#39;re at the office
                                ..</p>-->

                                        <div class="price">
                                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $80.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('47');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('47');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('47');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=30">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/02-80x80.jpg"
                                             title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/12-80x80.jpg"
                                             title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=30">aliquam
                                                quaerat voluptem</a></h4>
                                        <!--<p>
                                    Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably 'chunkier'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR's, an important difference when compared to the latter is that the EOS 5D doesn't have any environmental seals. While Canon don't specifically refer to the EOS 5D as a 'professional' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they've not bought too many EF-S lenses...) äë
                                ..</p>-->

                                        <div class="price">
                                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $80.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('30');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('30');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('30');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=28">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/17-80x80.jpg"
                                             title="aspetur autodit autfugit" alt="aspetur autodit autfugit"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/13-80x80.jpg"
                                             title="aspetur autodit autfugit" alt="aspetur autodit autfugit"/>
                                    </a>
                                    <div class="sale-icon">Sale</div>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=28">aspetur
                                                autodit autfugit</a></h4>
                                        <!--<p>
                                    HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with Windows Mobile Professional 6.1, ultrafast 3.5G, GPS, 5MP camera, plus lots more - all delivered on a breathtakingly crisp 3.8&quot; WVGA touchscreen - you can take control of your mobile world with the HTC Touch HD.

                                    Features


                                        Processor Qualcomm&reg; MSM 7201A&trade; 528 MHz

                                        Windows Mobile&reg; 6.1 Professional Operating System

                                        Memory: 512 MB ROM, 288 MB RAM

                                        Dimensions: 115 mm x 62.8 mm x 12 mm / 146.4 grams

                                        3.8-inch TFT-LCD flat touch-sensitive screen with 480 x 800 WVGA resolution

                                        HSDPA/WCDMA: Europe/Asia: 900/2100 MHz; Up to 2 Mbps up-link and 7.2 Mbps down-link speeds

                                        Quad-band GSM/GPRS/EDGE: Europe/Asia: 850/900/1800/1900 MHz (Band frequency, HSUPA availability, and data speed are operator dependent.)

                                        Device Control via HTC TouchFLO&trade; 3D &amp; Touch-sensitive front panel buttons

                                        GPS and A-GPS ready

                                        Bluetooth&reg; 2.0 with Enhanced Data Rate and A2DP for wireless stereo headsets

                                        Wi-Fi&reg;: IEEE 802.11 b/g

                                        HTC ExtUSB&trade; (11-pin mini-USB 2.0)

                                        5 megapixel color camera with auto focus

                                        VGA CMOS color camera

                                        Built-in 3.5 mm audio jack, microphone, speaker, and FM radio

                                        Ring tone formats: AAC, AAC+, eAAC+, AMR-NB, AMR-WB, QCP, MP3, WMA, WAV

                                        40 polyphonic and standard MIDI format 0 and 1 (SMF)/SP MIDI

                                        Rechargeable Lithium-ion or Lithium-ion polymer 1350 mAh battery

                                        Expansion Slot: microSD&trade; memory card (SD 2.0 compatible)

                                        AC Adapter Voltage range/frequency: 100 ~ 240V AC, 50/60 Hz DC output: 5V and 1A

                                        Special Features: FM Radio, G-Sensor

                                ..</p>-->

                                        <div class="price">
                                            <span class="price-new">$122.00</span> <span
                                                    class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('28');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('28');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('28');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=45">
                                        <img class="image_thumb"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/11-80x80.jpg"
                                             title="quis autem veleuminium" alt="quis autem veleuminium"/>
                                        <img class="image_thumb_swap"
                                             src="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/image/cache/catalog/demo/product/12-80x80.jpg"
                                             title="quis autem veleuminium" alt="quis autem veleuminium"/>
                                    </a>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4>
                                            <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/product&amp;product_id=45">quis
                                                autem veleuminium</a></h4>
                                        <!--<p>


                                            Latest Intel mobile architecture

                                            Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Duo MacBook Pro and now supports up to 4GB of RAM.

                                            Leading-edge graphics

                                            The NVIDIA GeForce 8600M GT delivers exceptional graphics processing power. For the ultimate creative canvas, you can even configure the 17-inch model with a 1920-by-1200 resolution display.

                                            Designed for life on the road

                                            Innovations such as a magnetic power connection and an illuminated keyboard with ambient light sensor put the MacBook Pro in a class by itself.

                                            Connect. Create. Communicate.

                                            Quickly set up a video conference with the built-in iSight camera. Control presentations and media from up to 30 feet away with the included Apple Remote. Connect to high-bandwidth peripherals with FireWire 800 and DVI.

                                            Next-generation wireless

                                            Featuring 802.11n wireless technology, the MacBook Pro delivers up to five times the performance and up to twice the range of previous-generation technologies.


                                ..</p>-->

                                        <div class="price">
                                            $2,000.00
                                            <span class="price-tax">Ex Tax: $2,000.00</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" onclick="cart.add('45');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                        <button class="btn-wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('45');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="btn-compare" type="button" data-toggle="tooltip"
                                                title="Add to compare" onclick="compare.add('45');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar panel panel-default information-list">
                    <div class="panel-heading">Information</div>
                    <div class="list-group">
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=4"
                           class="list-group-item">About Us</a>
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=6"
                           class="list-group-item">Delivery Information</a>
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=3"
                           class="list-group-item">Privacy Policy</a>
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=5"
                           class="list-group-item">Terms &amp; Conditions</a>
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/contact"
                           class="list-group-item">Contact Us</a>
                        <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/sitemap"
                           class="list-group-item">Site Map</a>
                    </div>
                </div>

            </aside>
            <div id="content" class="col-sm-9">
                <?= $content ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <aside id="footer-top">
                <div class="html-content">
                    <div class="box-content">
                        <div class="footer-top-block container">
                            <div class="news-letter col-sm-12">
                                <div class="news-letter-inner">
                                    <h4>Wants To Purchase Our Theme</h4>
                                    <div class="purchage-theme">
                                        <a href="#">purchase now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>

        </div>

        <div class="container">
            <div class="row">
                <div class="footer-column footer-left-cms col-sm-3">
                    <aside id="footer-left">
                        <div class="html-content">
                            <div class="box-content">
                                <div id="ttcmsfooterservice">
                                    <div class="ttservicemerge">
                                        <h5>Footer Services</h5>
                                        <div class="block_content" id="footer-service">
                                            <div class="ttshipping">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttshipping_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">Free Shipping</div>
                                                            <div class="service-desc">Deliver to door</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttsupport">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttsupport_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">24x7 Support</div>
                                                            <div class="service-desc">in safe hands</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttsaving">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttsaving_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">Big Saving</div>
                                                            <div class="service-desc">at lowest price</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttmoneyback">
                                                <div class="ttcontent_inner">
                                                    <div class="service">
                                                        <div class="ttmoneyback_img service-icon"></div>
                                                        <div class="service-content">
                                                            <div class="service-title">Money Back</div>
                                                            <div class="service-desc">Easy to return</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>


                </div>
                <div class="merge-links col-sm-6">
                    <!--<div class="col-sm-3 footer-column footer-customer-service">
                      <h5>Customer Service</h5>
                      <ul class="list-unstyled">
                        <li><a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/contact">Contact Us</a></li>
                        <li><a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/return/add">Returns</a></li>
                        <li><a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/sitemap">Site Map</a></li>
                      </ul>
                    </div>-->
                    <div class="col-sm-4 footer-column footer-extras">
                        <h5>Extras</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/manufacturer">Brands</a>
                            </li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/voucher">Gift
                                    Certificates</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=affiliate/login">Affiliate</a>
                            </li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=product/special">Specials</a>
                            </li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/sitemap">Site
                                    Map</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 footer-column footer-my-account">
                        <h5>My Account</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/account">My
                                    Account</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/order">Order
                                    History</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/wishlist">Wish
                                    List</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/newsletter">Newsletter</a>
                            </li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=account/return/add">Returns</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 footer-column footer-information">
                        <h5>Information</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=4">About
                                    Us</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=6">Delivery
                                    Information</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=3">Privacy
                                    Policy</a></li>
                            <li>
                                <a href="http://demo.templatetrip.com/Opencart/OPC03/OPC080/OPC12/index.php?route=information/information&amp;information_id=5">Terms
                                    &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column footer-right-cms col-sm-3">
                    <aside id="footer-right">
                        <div class="html-content">
                            <div class="box-content">
                                <div class="contact-us">
                                    <h5>Contact Us</h5>
                                    <ul class="list-unstyled">
                                        <li class="address"><i class="fa fa-map-marker"></i><span
                                                    class="contact-address">My Company, 42 Puffin street 12345 Puffinville France</span>
                                        </li>
                                        <li class="contact"><i class="fa fa-phone"></i><span
                                                    class="phone">0123-456-789</span></li>
                                        <li class="email"><i class="fa fa-envelope-o"></i><span class="email-address"><a
                                                        href="mailto:themes@company.com">sales@yourcompany.com</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="html-content">
                            <div class="box-content">
                                <div class="follow-us col-sm-12">
                                    <h5>Follow us</h5>
                                    <ul class="list-unstyled">
                                        <li class="facebook">
                                            <a title="Facebook" href="#" class="_blank" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a title="Twitter" href="#" class="_blank" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a title="RSS" href="#" class="_blank" target="_blank">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a title="Google Plus" rel="publisher" href="#" class="_blank"
                                               target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </aside>

                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-link">
                    <p>Powered By <a href="http://www.opencart.com">OpenCart</a> Your Store &copy; 2018</p>
                </div>
                <div class="footer-bottom-cms">
                    <aside id="footer-bottom">
                        <div class="html-content">
                            <div class="box-content">
                                <div id="ttcmsfooter" class="col-md-12 links">
                                    <div class="ttfooter-logo"><a href="#">
                                            <img src="<?= Url::to([$bundle->baseUrl . '/image/catalog/footer-logo.png']) ?>"
                                                 alt="footer-logo.png"></a></div>
                                </div>
                            </div>
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
