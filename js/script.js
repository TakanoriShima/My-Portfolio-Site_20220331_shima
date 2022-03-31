/* global $ */

$(function(){
  
  // スマホ版のハンバーガーメニュー
  const open = $('#open').text();
  const overlay = $('overlay').text();
  const close = $('#close');
  
  // メニューバーをクリックして表示させる処理
  $('#open').on('click' , () => {
    $('.overlay').show();
    $('.overlay').addClass('show');
    $('#open').addClass('hide');
  });
  
  // メニューバーをクリックして閉じるときの処理
  $('#close').on('click' , () => {
    $('.overlay').removeClass('show');
    $('#open').removeClass('hide');
  });
  
  // ハンバーガーメニュー中にリンクをクリックしたときに、ハンバーガーメニューを閉じる処理
  $('.overlay a').on('click', () => {
    $('.overlay').removeClass('show');
    $('.overlay').hide();
    $('#open').removeClass('hide');
  });
  
  // 福岡の画像アニメーション(slider)
  const images = [
      'images/fukuoka0.jpg', 
      'images/fukuoka1.jpg', 
      'images/fukuoka2.jpg', 
      'images/fukuoka3.jpg', 
      'images/fukuoka4.jpg',
      'images/fukuoka5.jpg'
    ];
  
  // images配列からimageを一つずつ取り出し、#sliderに入れる。
  $.each(images, (index, image) => {
    $('#slider').append($('<img>', {src:image}));
  });
  
  // 配列の1,2,3,4番目を隠した状態にする。
  $('#slider img').eq(1).css('margin-left', '-400px');
  $('#slider img').eq(2).css('margin-left', '-400px');
  $('#slider img').eq(3).css('margin-left', '-400px');
  $('#slider img').eq(4).css('margin-left', '-400px');
  $('#slider img').eq(5).css('margin-left', '-400px');
  
  let s_count = 0;
  
  // スライドアニメーションの非同期処理の定義
  const slider = () => {
    $.when(
      
        $('#slider img').eq(s_count % 6).animate({marginLeft: '400'}, 2000),
        $('#slider img').eq((s_count + 1) % 6).animate({marginLeft: '0px'}, 2000),
        
    ).done(
        () => {
            $('#slider img').eq(s_count % 6).css('margin-left', '-400px');
        }
    ).done(
        () => {
          s_count++;
        }
    );
  };
  
  // slider処理の実行
  setInterval(slider, 3000);
  
  // Topのテキストアニメーション
  const title1 = $('.first').text();
  const title2 = $('.second').text();
  $('.first').text('');
  $('.second').text('');
  let count = 1;
  let timer2;
  
  // h1のテキストアニメーションの関数を定義
  const text_animation1 = () => {
    const word1 = title1.substr(0, count);
    $('.first').text(word1);
    count++;
    if(count > title1.length) {
      clearInterval(timer1);
      count = 1;
      
      // h1のテキストアニメーション終了し、その0.5秒後にh2のテキストアニメーションの処理開始。
      setTimeout(() => {
        timer2 = setInterval(text_animation2, 100);
      }, 500)
    }
  };
  
  // h2のテキストアニメーション関数の定義
  const text_animation2 = () => {
    const word2 = title2.substr(0, count);
    $('.second').text(word2);
    count++;
    if(count > title2.length) {
      clearInterval(timer2);
      count = 1;
    }
  };
  
  // h1のテキストアニメーションの実行
  const timer1 = setInterval(text_animation1, 100);
  
  // スクロールで各コンテンツを表示させる処理
  // .content要素(計7個)を取得
  let contents = $('.content');
  // 表示画面の高さを取得
  const window_height = $(window).height();
  // console.log("ブラウザの window height:" + window_height + "px");
  
  // 0番目のcontent要素から非表示させる
  $.each(contents, (index, content) => {
    // 注目しているcontent要素のoffset(座標)を取得
    let offset = $(content).offset();
    // console.log(index + ": " + offset.top + "px");
    
    // そのcontent要素の座標がブラウザの表示領域にあるならば
    if(window_height > offset.top) {
      // 表示
      $(content).css({'opacity': '1'});
    } else {
      // 30px下げて非表示
      $(content).css({'opacity': '0'});
    }
  });
  
  // スクロールしたときの処理
  $(window).scroll(function() {
    // 現在のスクロール量を取得
    let scroll_top = $(this).scrollTop();
    // console.log("現在のスクロール量: " + scroll_top + 'px');
    
    // 一つ一つのcontent要素に対しての処理
    // .contentは計7個
    $.each(contents , (index, content) => { 
      // 注目しているcontent要素のoffset(座標)を取得
      let offset = $(content).offset();
      
      // 各content要素のtop座標が、スクロール量+100より小さいときに表示
      if(offset.top < scroll_top + 100) {
        // 1秒かけてふわっと上がるような感じで各contentを出現させる。
        $(content).animate({'opacity':'1',}, 300);
      }
    });
  });
  
  // My portfolioのモーダルウインドウ
  // 画像をクリックしてモーダルウィンドウを表示
  $('#open_2').on('click' , () => {
   $('#modal').removeClass('hidden')
   $('#mask').removeClass('hidden');
  });
  
  // closeをクリックしてモーダルウィンドウを閉じ、元の画面に戻す。
   $('#close_2').on('click' , () => {
   $('#modal').addClass('hidden')
   $('#mask').addClass('hidden');
  });
  
  // hobbyの料理写真のアニメーション(fadein/fadeout)
  const pictures = [
      'images/cook0.jpg',
      'images/cook1.jpg',
      'images/cook2.jpg',
      'images/cook3.jpg',
      'images/cook4.jpg',
      'images/cook5.jpg',
    ];
    
  let ff_count = 1;
  
  // fadein_fadeout関数の定義
  const fadein_fadeout = () => {
    $('#fadein_fadeout img').animate({'opacity': 0}, 1000, () => {
      $('#fadein_fadeout img').prop('src', pictures[ff_count]);
      $('#fadein_fadeout img').animate({'opacity': 1});
      ff_count++;
      if(ff_count === images.length) {
        ff_count = 0;
      }
    });
  };
  
  // fadein_fadeout関数の実行
  setInterval(fadein_fadeout, 4000);
  
  // Contactの入力、送信の設定
  // Messageクラスの作成
  class Message {
    name; // 名前
    email; // メール
    comment; // コメント
    // コンストラクタ
    constructor(name, email, comment) {
      this.name = name;
      this.email = email;
      this.comment = comment;
    }
    // 入力値を検証するメソッドの定義
    validate() {
      // 入力が正しいかどうかのフラッグ
      let flag = true;
      $('li').remove();
      const ul = $('<ul>');
      // もし名前が入力されていなければ
      if(this.name === '') {
        const e_name = $('<li>', {text: '※名前を入力してください'}).addClass('error');
        ul.append(e_name);
        $('#message').append(ul);
        flag = false;
      }
      // もしメールが入力されていなければ
      if(this.email === '') {
        const e_email = $('<li>', {text: '※メールアドレスを入力してください'}).addClass('error');
        ul.append(e_email);
        $('#message').append(ul);
        flag = false;
      }
      // もしコメントが入力されていなければ
      if(this.comment === '') {
        const e_comment = $('<li>', {text: '※コメントを入力してください'}).addClass('error');
        ul.append(e_comment);
        $('#message').append(ul);
        flag = false;
      }
      return flag;
    }
  }
  
  // users配列を作成
  // const users = Array();
  // users.push(new User('iwai', 'iwai@gmail.com', '面白いサイトでした。'));
  // console.log(users);
  
  // 送信ボタンを押したときの処理
  $('#btn').click((e) => {
    e.preventDefault (); //画面が更新されないように
    
    // 入力された値を取得
    const name = $('input[name="name"]').val();
    const email = $('input[name="email"]').val();
    const comment = $('textarea[name="comment"]').val();
    // 新しいユーザーを作成
    const message = new Message(name, email, comment);
    // 入力値を検証(validateメソッドを実行)
    const flag = message.validate();
    if(flag === true) {
      // ユーザー一覧に追加
      // users.push(user);
      $('input[name="name"]').val('');
      $('input[name="email"]').val('');
      $('textarea[name="comment"]').val('');
      
      // mail送信
      $.ajax ({
        type: 'post',
        url: 'send_mail.php',
        datatype: 'json',
        data: {
           name: message.name,   // 名前
           email: message.email,  // メールアドレス
           comment: message.comment  // コメント
        }
      }).done(function (data) {  // ajax通信が成功したら
        console.log(data);
        // 送信に成功したならば
        if (data['result']) {
          // メール「送信」に成功した時の処理
          // 画面にメッセージを表示、画面をリロードなど。
            $('.hw').after($('<p>', {text: '送信を完了しました'}));
        } else {
          //メール送信に「失敗」した時の処理
          // 画面にメッセージを表示など
          $('.hw').after($('<p>', {text: '送信に失敗しました'}));
        }
       });
    }
  });
  
});

