//ハンバーガーメニュー
$(".nav_toggle").click(function () {
  $(".nav_toggle, .nav").toggleClass("show");
});

//ハンバーガーメニューのメニューを押すと該当箇所に遷移する
$('.nav_menu_ul a[href]').on('click', function(event) {
  $('.show').trigger('click');
});

//トップへ戻る
$(function() {
  $('.jump').hide();
  $(window).scroll(function() {
    if($(this).scrollTop() > 800) {
      $('.jump').fadeIn();
    }else{
      $('.jump').fadeOut();
    };
  });
  $('.jump').click(function() {
    $('body,html').animate({
      scrollTop: 0
    },500);
  });
});

$(function(){
  $('a[href^="#"]').click(function(){
    var adjust = 0;
    var speed = 1000;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});

$(function(){
  var error = [];

  $('.send').click(function() {
    if($('#name').val() == '') {
      error.push('氏名は必須項目です。');
    }else if($('#name').val().length > 10) {
      error.push('氏名は10文字以内でご入力下さい。');
    }

    if($('#kana').val() == '') {
      error.push('フリガナは必須項目です。');
    }else if($('#kana').val().length > 10) {
      error.push('フリガナは10文字以内でご入力下さい。');
    }

    if($('#tel').val().length > 11) {
      error.push('電話番号は11文字以内でご入力下さい。');
    }else if($('#tel').val() != '' && $('#tel').val().match(/^[0-9]+$/) == null ){
      error.push('電話番号は0-9の数字のみでご入力下さい。');
    }

    if($('#email').val() == ''){
      error.push('メールアドレスは必須項目です。');
    }else if($('#email').val().match(/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/) == null){
      error.push('メールアドレスは正しくご入力ください。');
    }

    if($('#contact').val() == '') {
      error.push('お問い合わせは必須項目です。');
    }

    if(error.length >= 1){
      alert(error.join("\n"));
    }

  });

  
});

$(function(){
  var error = [];

  $('.register_conf').click(function() {
    if($('#name').val() == '') {
      error.push('氏名は必須項目です。');
    }else if($('#name').val().length > 10) {
      error.push('氏名は10文字以内でご入力下さい。');
    }

    if($('#email').val() == ''){
      error.push('メールアドレスは必須項目です。');
    }else if($('#email').val().match(/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/) == null){
      error.push('メールアドレスは正しくご入力ください。');
    }

    if($('#password').val() == '') {
      error.push('パスワードは必須項目です。');
    }else if($('#password').val().length < 8){
      error.push('パスワードは8文字以上でご入力ください。');
    }

    if($('#role').val() == '') {
      error.push('ユーザー選択は必須項目です。');
    }

    if(error.length >= 1){
      alert(error.join("\n"));
    }

  });

  
});

$(function() {
  $('.created_message').fadeOut(5000);

  $('.reset_message').fadeOut(5000);
});




