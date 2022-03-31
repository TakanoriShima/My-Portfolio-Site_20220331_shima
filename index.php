<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Kazuma Iwaiのポートフォリオサイト</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="images/favicon_smile.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background: url(images/green.jpg)">
        <!--スマホ版のナビゲーション-->
        <div class="m-menu">
            <span class="material-icons" id="open">menu</span>
        </div>
        <div class="overlay">
            <span class="material-icons" id="close">close</span>
            <ul>
                <li>
                    <a href="index.html">Top</a>
                </li>
                <li>
                    <a href="#site">このサイトについて</a>
                </li>
                <li>
                    <a href="#me">自分について</a>
                </li>
                <li>
                    <a href="#works">ポートフォリオ</a>
                </li>
                <li>
                    <a href="#skill">プログラミングのスキル</a>
                </li>
                <li>
                    <a href="#profile">プロフィール</a>
                </li>
                <li>
                    <a href="#hobby">趣味</a>
                </li>
                <li>
                    <a href="#contact">連絡先</a>
                </li>
                <li>
                    <a href="index_English.html">English</a>
                </li>
            </ul>
        </div>
        <!--PC版のナビゲーションを作成-->
        <div class="pc-gnav">
            <ul>
                <li>
                    <a href="#">Top</a>
                </li>
                <li>
                    <a href="#site">このサイトについて</a>
                    <ul>
                        <li>
                            <a href="#me">自分について</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#works">ポートフォリオ</a>
                    <ul>
                        <li>
                            <a href="#skill">プログラミングのスキル</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#profile">プロフィール</a>
                    <ul>
                        <li>
                            <a href="#hobby">趣味</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#contact">連絡先</a>
                </li>
                <li>
                    <a href="index_English.html">English</a>
                </li>
            </ul>
        </div>
        <div class="contents">
            <!--トップ画面の写真(福岡の街並み)-->
            <div class="wrapper">
                <div id="slider"></div>
                <div id="txt_animation">
                    <h1 class="first">Welcome to My Portfolio Site !!</h1>
                    <h1 class="second">I Love Fukuoka !!</h1>
                </div>
            </div>
            <div class="position">
                <img src="images/fukuoka_town.jpg" alt="福岡の街のイラスト" class="town">
                <!--このサイトについて-->
                <div id="site" class="content">
                    <div id="hs">About this site</div>
                    <p>ここは、エンジニアIwaiのポートフォリオサイトです。</p>
                    <p>私のプロフィール、制作物をまとめています。</p>
                    <p>自分のことをもっと知ってほしいと思って作りました。</p>
                    <p>どうぞ、コーヒーでも飲みながらゆっくりとご覧ください。</p>
                    <img src="images/coffee.jpg" alt="コーヒー" class="coffee">
                </div>
                <!--自分について-->
                <div id="me" class="content">
                    <div class="hm">About me</div>
                    <img src="images/myface.jpg" alt="自分のイメージ画像" class="myface">
                    <p>愛知県名古屋市出身。南山大学法学部出身。</p>
                    <p>2015年3月に卒業し、あいち福祉医療専門学校へ進学。</p>
                    <p>2016年3月に精神保健福祉士の資格を取得。</p>
                    <p>2016年4月より、精神科病院の相談員などに５年従事。</p>
                    <p>2021年8月末に退職し、結婚を機に11月末に福岡県へ移住。</p>
                    <p>前職を経験する中で、DX化の推進に興味を持つ。</p>
                    <p>Webエンジニアへの転職を志す。</p>
                    <p>2021年12月より侍エンジニアを受講開始。</p>
                    <br>
                    <p id="git">GitHubのURLはこちらをクリック↓↓</p>
                    <a href="#">
                        <div class="box"></div>
                    </a>
                </div>
                <!--ポートフォリオサイトについて-->
                <div id="works" class="content">
                    <div class="h">My portfolio</div>
                    <p>侍エンジニア受講中に作成した成果物たちです</p>
                    <p>こちらをクリック↓↓</p>
                    <div id="open_2">
                        <img class="object" src="images/work.jpg" alt="制作物の画像">
                    </div>
                    <div id="mask" class="hidden"></div>
                    <div id="modal" class="hidden">
                        <div id="close_2">閉じる</div>
                        <p>
                            <a href="">1. アニメーション(jQuery)</a>
                        </p>
                        <p>
                            <a href="">2. 新規ユーザー登録アプリ(PHP, MySQL)</a>
                        </p>
                        <p>
                            <a href="">3. facebookもどきのアプリ(PHP, MySQL)</a>
                        </p>
                        <p>
                            <a href="">4. 相談記録アプリ(PHP, MySQL)</a>
                        </p>
                    </div>
                </div>
                <!--自分のスキルについて-->
                <div id="skill" class="content">
                    <div class="h">My programming skills</div>
                    <img src="images/skill.jpg" alt="スキルの画像" class="tech">
                    <div class="container mb-3 col-sm-8">
                        <div class="row mt-3 mb-3">
                            <p>スキル一覧</p>
                            <table class="table table-bordered">
                                <tr class="table-success">
                                    <th>プログラミング</th>
                                    <th>使用歴</th>
                                    <th>技術レベル</th>
                                </tr>
                                <tr>
                                    <td>HTML/CSS</td>
                                    <td>3か月</td>
                                    <td class="star">★★★</td>
                                </tr>
                                <tr class="table-success">
                                    <td>Javascript/jQuery</td>
                                    <td>2か月</td>
                                    <td class="star">★★</td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td>2か月</td>
                                    <td class="star">★★</td>
                                </tr>
                                <tr class="table-success">
                                    <td>MySQL</td>
                                    <td>1か月</td>
                                    <td class="star">★</td>
                                </tr>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td>1か月</td>
                                    <td class="star">★</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mt-5">
                            <p>スキルの見方</p>
                            <table class="table table-bordered">
                                <tr class="table-success">
                                    <th>星の数</th>
                                    <th>説明</th>
                                </tr>
                                <tr>
                                    <td class="star">★</td>
                                    <td>基礎構文は学習済み</td>
                                </tr>
                                <tr class="table-success">
                                    <td class="star">★★</td>
                                    <td>基礎構文を応用して簡単なサンプルプログラムを実装できる</td>
                                </tr>
                                <tr>
                                    <td class="star">★★★</td>
                                    <td>この技術を用いてオリジナルアプリを構築できる</td>
                                </tr>
                                <tr class="table-success">
                                    <td class="star">★★★★</td>
                                    <td>実務でこの技術を使った経験がある</td>
                                </tr>
                                <tr>
                                    <td class="star">★★★★★</td>
                                    <td>この技術に関して他人に指導できる</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--プロフィールについて-->
                <div id="profile" class="content">
                    <div class="h">My Profile</div>
                    <img src="images/road.jpg" alt="道の画像" class="road">
                    <div class="container mb-3 col-sm-9">
                        <div class="row">
                            <table class="table table-bordered">
                                <tr class="table-success">
                                    <th class="col-sm-3">年表</th>
                                    <th>エピソード</th>
                                </tr>
                                <tr>
                                    <td>1992.8</td>
                                    <td>愛知県名古屋市で出生。</td>
                                </tr>
                                <tr class="table-success">
                                    <td>1999.4~
                                        <br>小学校時代 
                                    </td>
                                    <td>祖母の影響で民謡を習う。ポケモンが大好きだった。</td>
                                </tr>
                                <tr>
                                    <td>2005.4~
                                        <br>中学時代 
                                    </td>
                                    <td>声変わりをきっかけに合唱にハマる。</td>
                                </tr>
                                <tr class="table-success">
                                    <td>2008.4~
                                        <br>高校時代 
                                    </td>
                                    <td>大学進学のため、勉強漬の毎日。自転車通学で、毎日往復約26キロ移動。
                                        <br>太ももが競輪選手のようになる。 
                                    </td>
                                </tr>
                                <tr>
                                    <td>2011.4~
                                        <br>大学時代 
                                    </td>
                                    <td>サークルでゴスペルを練習する毎日。
                                        <br>大学4年の時、ある精神科医との出会いを機に、精神保健福祉士を志す。 
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td>2015.4~
                                        <br>専門学校時代 
                                    </td>
                                    <td>精神保健福祉士取得のため、勉強や実習に明け暮れる。
                                        <br>病院の患者さんたちの現状に衝撃を受ける。 
                                    </td>
                                </tr>
                                <tr>
                                    <td>2016.4~
                                        <br>就職 
                                    </td>
                                    <td>精神科病院で勤務。うつ病や統合失調症など様々な患者と向き合う毎日。</td>
                                </tr>
                                <tr class="table-success">
                                    <td>2020.6~
                                        <br>転職 
                                    </td>
                                    <td>地域活動支援センターで、指導員として勤務。
                                        <br>利用者の障害特性を配慮しながら、余暇の場所づくりを研究する毎日。 
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021.8
                                        <br>退職 
                                    </td>
                                    <td>医療福祉業界を経験してきた中で、DX化を推進する仕事に興味を持つ。
                                        <br>Webエンジニアへの転職を決意。 
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td>2021.12~</td>
                                    <td>侍エンジニア塾を受講開始。</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--自分の趣味について-->
                <div id="hobby" class="content">
                    <div class="h">My hobby</div>
                    <div id="fadein_fadeout">
                        <img src="images/cook0.jpg" alt="一番目の料理の写真">
                    </div>
                    <p>趣味は料理です。妻と一緒にたくさん作っています。</p>
                    <p>得意料理は、炊き込みご飯、餃子などです。</p>
                    <p>食の健康を意識するようになり、スローフードに興味を持ちました。</p>
                </div>
                <!--連絡先-->
                <div id="contact" class="content">
                    <div class="hw">Contact</div>
                    <img src="images/mail.jpg" alt="メールの画像" class="mail">
                    <p>最後までご覧いただきありがとうございました。</p>
                    <p>このサイトを通して、私のことを少しでも知っていただけたのならうれしく思います。</p>
                    <p>もし、このサイトや私について何かコメントがありましたら、下記のフォームをご利用ください。</p>
                    <!--エラーメッセージ-->
                    <div id="message"></div>
                    <!--入力フォーム-->
                    <form>Name: 
                        <input type="text" name="name" placeholder="田中  太郎"/>
                        <br>
                        <br>Email: 
                        <input type="email" name="email" placeholder="sample@gmail.com">
                        <p>Comment</p>
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        <br>
                        <button type="button" id="btn">Send</button>
                    </form>
                </div>
                <!--クリックしたらTop画面に戻る-->
                <div id="back">
                    <a href="index.html">
                        <span class="material-icons">arrow_circle_up</span>
                    </a>
                    <p>Thank you for comming !!</p>
                </div>
                <!--フッタータグ-->
                <footer>
                    <small>©2022 Kazuma Iwai</small>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>