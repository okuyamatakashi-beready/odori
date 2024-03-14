/* ===============================================
# waypoints
=============================================== */

$(function () {
  $('.animation').waypoint(function (direction) {
    var activePoint = $(this.element);
    if (direction === 'down') {
      activePoint.addClass('active');
    }
    else { //scroll up
      activePoint.removeClass('active');
    }
  }, { offset: '95%' });
});


/* ===============================================
# プログラム
=============================================== */

new ScrollHint('.js-scrollable', {
  i18n: {
    scrollable: 'スクロールできます'
  }
});


/* ===============================================
# gallery
=============================================== */

$(function(){
  $('.gallery-list').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery: { //ギャラリー表示にする
      enabled:true
    }
    });
  });