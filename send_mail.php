<?php
    // (C)
    header("Content-Type: application/json; charset=UTF-8"); //ヘッダー情報の明記。必須。
    // JavaScriptからPOST通信で受け取った値を取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    //メール送信処理
    $from = $email;
    $to = 'quark2galaxy@gmail.com';  //あなたのメールアドレス
    $subject = $name . '様からお問い合わせです';  //メールの標題
    
    // 文字化け対策
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    
    //メール送信
    $result = mb_send_mail($to, $subject, $comment, "From:" . $from);
    
    //送信結果を判定し、Ajaxに配列をreturn
    if($result){
        echo json_encode(array('result' => true));
    }else{
        echo json_encode(array('result' => false));
    }
