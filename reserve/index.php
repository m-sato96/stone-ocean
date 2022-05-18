<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoneOcean || reserve</title>
    <link rel="stylesheet" href="/StoneOcean/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/StoneOcean/css/style.css">
</head>
<body>
<?php include '../layout/header.php' ?>
<main class="reserve">
    <div class="page-title">
        <h1>Reserve</h1>
    </div>
    <div class="form-wrap">
        <form action="#" method="post">
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" placeholder="例）佐藤マーク">
            <label for="name-huri">ふりがな</label>
            <input type="text" name="name-huri" id="name-huri" placeholder="例）さとうまーく">
            <label for="tel">電話番号</label>
            <input type="number" name="tel" id="tel" placeholder="例）09012345678">
            <label for="number-of-people">ご予約人数</label>
            <select name="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <span>人</span>
            <label for="reservation" class="reservation-c">ご予約希望日時</label>
            <select name="month">
                      <option value="">--</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <span>月</span>

                    <select name="day" id="day">
                      <option value="">--</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <span>日</span>

                    <select name="time" id="time">
                       <option value="">--</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option>
                     </select>
                     <span>時〜</span>
                     <input type="submit" value="Send" class="foot-reserve-btn">
        </form>
    </div>
</main>
<footer>
    <div>
        <img src="/StoneOcean/imgs/logo.png" alt="StoneOceanロゴ" class="logo-img">
        <div class="footer-item">
            <ul>
                <li><a href="/StoneOcean/#access">Accesee</a></li>
                <li><a href="/StoneOcean/menu">Menu</a></li>
            </ul>
            <small>&copy;StoneOcean</small>
        </div>
    </div>
</footer>
<script src="/StoneOcean/script.js"></script>
</body>
</html>