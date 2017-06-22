/*
 * グロナビ関連の動作を設定
 */
$(function() {
  var $btn = $('#gNavBtn');
  var $nav = $('#gNav');

  var gnav_flg = false;

  $btn.on('click', function() {
    if(window.innerWidth <= _breakpoint && !gnav_flg)
      navCtrl();
  });

  $doc
  .on('click', '#gNavOverwrap', function(evt) {
    if($(evt.target).closest('#gNavOverwrap'))
      navCtrl(false);
  });

  $win
  .on('load resize', function() {
    if(window.innerWidth > _breakpoint)
      navCtrl(false);
  });

  function navCtrl(open = true) {
    // グロナビの開閉
    gnav_flg = open;

    if(open){
      $nav.addClass('is-open');
      $body.append('<div id="gNavOverwrap" style="background: rgba(0, 0, 0, .16);height: 100%;left: 0;position: absolute;top: 0;width: 100%;z-index: 9998;"></div>');
    } else {
      $nav.removeClass('is-open');
      $('#gNavOverwrap').remove();
    }
  }
});