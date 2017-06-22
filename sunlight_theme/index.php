<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>サンライトスタジオ|トップページ</title>
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/asset/css/style.css">
  <meta name="viewport" content="width=initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php //wp_head(); ?>
</head>
<body <?php body_class( $class );?>>
<div id="wrapper">
  <header class="l-header">
    <div class="l-header__main">
      <div class="innerBox">
        <a href="<?=home_url()?>" class="l-header__logo">
          <img src="<?=get_template_directory_uri()?>/asset/img/common/logo.png" alt="SunLightStudio" width="100%">
        </a>
        <div class="l-header__meta">
          <a href="http://sunlightstudio.jp/" target="_blank" class="l-header__link">一般のお客さまはこちら ▶</a>
          <div class="l-header__contact">
            <a href="<?=home_url('/contact')?>" class="l-header__contact__btn"><span>お問い合わせ</span></a>
            <p class="l-header__contact__tel">0586-64-7258</p>
          </div><!-- end .l-header__contact -->
          <div class="l-header__lang">
            <!-- TODO: リンクの追加 -->
            <a href="" class="l-header__lang__btn">日本 >>></a>
            <a href="" class="l-header__lang__btn">English >>></a>
          </div>
        </div><!-- end .l-header__meta -->
        <a id="gNavBtn" class="l-header__menu_btn"><span></span></a>
      </div><!-- end .innerBox -->
    </div><!-- end .l-header__top -->
  </header>
  <nav id="gNav" class="l-nav">
    <ul class="l-nav__wrapper">
      <li class="l-nav__item"><a href="" class="l-nav__item__target">トップ<span class="l-nav__item__caption">Top</span></a></li>
      <li class="l-nav__item"><a href="" class="l-nav__item__target">商品説明<span class="l-nav__item__caption">Description of item</span></a></li>
      <li class="l-nav__item"><a href="" class="l-nav__item__target">規格フロー<span class="l-nav__item__caption">Flow</span></a></li>
      <li class="l-nav__item"><a href="" class="l-nav__item__target">ご利用規約<span class="l-nav__item__caption">Contract</span></a></li>
      <li class="l-nav__item"><a href="" class="l-nav__item__target">会社概要<span class="l-nav__item__caption">Company</span></a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="main__vis">
      <ul class="slider center-item">
        <li><img src="<?=get_template_directory_uri()?>/asset/img/common/main_vis01.jpg"></li>
        <li><img src="<?=get_template_directory_uri()?>/asset/img/common/main_vis01.jpg"></li>
        <li><img src="<?=get_template_directory_uri()?>/asset/img/common/main_vis01.jpg"></li>
      </ul>
    </div>
  </div><!-- end #container -->
  <footer class="l-footer">
  </footer>
</div><!-- end #wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=get_template_directory_uri()?>/asset/js/jquery2.2.4.min.js"><\/script>')</script>
<script src="<?=get_template_directory_uri()?>/asset/js/config.js"></script>
<script src="<?=get_template_directory_uri()?>/asset/js/common/gNavController.js"></script>
<script src="<?=get_template_directory_uri()?>/asset/js/top/slick.min.js"></script>
<script>
$(function() {
  $('.center-item').slick({
    infinite: true,
    dots:true,
    autoplaySpeed: 6000,
    slidesToShow: 1,
    centerMode: true, //要素を中央寄せ
    centerPadding:'0px', //両サイドの見えている部分のサイズ
    autoplay:true, //自動再生
    responsive: [{
      breakpoint: 767,
      settings: {
        centerMode: false,
      }
    }]
  });
});
</script>
<?php // wp_footer(); ?>
</body>
</html>