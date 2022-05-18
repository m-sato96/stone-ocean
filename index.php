<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoneOcean</title>
    <meta name="description" content="This is a test site.">
    <link rel="stylesheet" href="/StoneOcean/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/StoneOcean/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/StoneOcean/css/style.css">
</head>
<body>
    <?php include './layout/header.php' ?>
    <div class="loading"></div>
    <main id="top-main">
        <video src="/StoneOcean/imgs/kv.mp4" webkit-playsinline playsinline muted autoplay loop></video>
        <h1>
            食通や肉好き、イタリア好きが通う<br>前橋の新しい
            <span>隠れ家レストラン</span>
            <span class="name">Stone<span>Ocean</span></span>
        </h1>
        <section class="news">
            <div class="news-content">
                <h2>News</h2>
                <p>2021.08.21</p>
                <h3 class="news-item">営業時間・酒類提供についてのお知らせ<span></span></h3>
                <p class="news-text">
                日頃より当レストランをご愛顧頂きまして誠にありがとうございます。
                当面の間、営業時間と酒類の提供の有無に関しましては、国・自治体の指示に従った営業形態となります。日々情勢が変わりますので、ニュースや報道をご覧いただき営業時間等については店舗までお問合せ下さい。
                引き続き、感染予防と衛生管理を徹底しながら、皆様に楽しい会食の場をご提供できるよう営業してまいります。ご来店予定の方をはじめお客様には、大変ご不便をおかけいたしますが、何卒ご理解を賜りますようお願いいたします。
                </p>
            </div>
            <div class="news-content">
                <p>2021.08.02</p>
                <h3 class="news-item">緊急事態宣言に伴う当店の対応について</h3>
                <p class="news-text">
                緊急事態宣言発令に伴う東京都からの要請を受け、8/31(火)までの期間、時短営業を行っております。
                尚、アルコール類のご提供は休止しております。
                </p>
            </div>
        </section>
        <section class="concept">
            <h2>Concept</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-title">Enjoy Rich</div>
                        <img src="/StoneOcean/imgs/concept_img_1.jpg" alt="高級感：イメージ写真">
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-title">Fantastic</div>
                        <img src="/StoneOcean/imgs/concept_img_2.jpg" alt="店内：イメージ写真">
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-title">Experience</div>
                        <img src="/StoneOcean/imgs/concept_img_3.jpg" alt="料理：イメージ写真">
                    </div>
                </div>
            </div>
            <div class="concept-inner">
                <p class="fade-text">
                    落ち着きのあるインテリアに囲まれた店内で本格的イタリア料理をお楽しみいただけます。<br>
                    お昼はシェフ自慢の手打ちパスタを中心に様々なコースをご用意。<br>
                    ディナーはイタリアトスカーナ地方の名物料理・ビステッカをお楽しみ頂けます。<br>
                    ビステッカは骨付牛肉のTボーンステーキです。<br>
                    国内最大級専用熟成庫で3か月を目安にゆっくりとドライエイジングした<br class="min768-block">
                    「プライムグレード」の牛肉を薪火でじっくりと丁寧に焼き上げ提供いたします。
                </p>
                <div class="concept-item">
                    <div class="img-wrap"><img src="/StoneOcean/imgs/concept_img_4.jpg" alt="名物料理「ビステッカ」"></div>
                    <div class="concept-text">
                        <h3>熟成肉の旨みが凝縮<span>名物料理「ビステッカ」</span></h3>
                        <p class="fade-text">
                            イタリア人は日本人と違って脂身の多い肉より、脂肪の少ない赤身を好みます。
                            塩と胡椒で外をカリッと炭火焼きするだけ、アル・サングエが一般的な焼き方です。このシンプルな調理法が驚くほど肉のうまみを引き出す重要な鍵。
                            塩と胡椒、オリーブオイルをかけて食べるのがフィレンツェ流です。
                        </p>
                    </div>
                </div>
                <div class="concept-item">
                <div class="img-wrap"><img src="/StoneOcean/imgs/concept_img_5.jpg" alt="大人のくつろぎのレストラン：イメージ写真"></div>
                    <div class="concept-text">
                        <h3>ふたりの距離が縮まる<span>大人のくつろぎのレストラン</span></h3>
                        <p class="fade-text">
                            イタリア・トスカーナの小屋をイメージしたテラスが印象的。清潔感あふれる店内は、上品でシックな雰囲気。
                            ほどよい距離感の接客が心地よく、ゆっくりとお食事をお楽しみ頂けます。デートや夫婦の記念日におすすめです。
                            あたたかな明かりが包みこむ、大人が集う空間でゆったりとしたお時間をお過ごしください。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="access">
            <h2>Access</h2>
            <div class="map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747798533305!2d139.74324421548496!3d35.658584838820644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1643524680190!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="access-text">
                <img src="/StoneOcean/imgs/logo.png"  alt="StoneOceanロゴ" class="logo-img">
                    <h3>〒105-0011 東京都港区芝公園４丁目２−８</h3>
                    <p class="margin-bottom-40px">
                        東京メトロ日比谷線 杜欧駅 G4番口 徒歩5分<br>
                        東京メトロ有楽町線 鳳凰一丁目駅 徒歩1分
                    </p>
                    <h3>営業時間</h3>
                    <p>
                    火〜金　11:00〜15:00/17:30～23:00<br>
                    土日祝　11:00〜15:00/17:00～22:00<br>
                    月曜定休日
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php include './layout/foot.php' ?>
    <script src="/StoneOcean/pace.min.js"></script>
    <script src="/StoneOcean/swiper-bundle.min.js"></script>
    <script src="/StoneOcean/script.js"></script>
</body>
</html>