<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>個別ページ</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">


</head>
<body>

  <!--ヘッダー-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".target">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Planbox</a>
    </div>

    <div class="collapse navbar-collapse target">
      <ul class="nav navbar-nav">
        <li><a href="">行きたいリスト</a></li>
        <li><a href="">マイページ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">設定</a></li>
      </ul>
    </div>
  </nav>
  <!--ヘッダー終了-->



<div class="container-fluid" style="padding-right:0;padding-left:0;"> 
    <h2 style="text-align:center; margin-top:60px;">渋谷デート</h2>
    <!--写真のスライドショー-->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:320px; height:200px; margin:5px auto 0 auto;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="overflow: hidden;width:320px; height:200px;">
          <img src="img/photo1.jpg" alt="photo1" style="width:320px;">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item" style="overflow: hidden;width:320px; height:200px;">
          <img src="img/photo2.jpg" alt="photo2" style="width:320px;">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item" style="overflow: hidden;width:320px; height:200px;">
          <img src="img/photo3.jpg" alt="photo3" style="width:320px;">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--写真のスライドショー終了-->

    <!--デート全体説明-->
    <p style="font-weight:bold;padding:10px;">初めての渋谷に来るカップルにおすすめのデートプランです！センター街で歩きながらThe都会の雰囲気を感じながら、宇田川カフェで一息休憩しました。本当に充実の一日でした！</p>
    <hr>
    <div class="row" style="padding-right:10px;padding-left:10px;">
      <div class="col-xs-6"><i class="fa fa-map-marker" style="font-size:16px;font-weight:bold;"> 渋谷</i></div>
      <div class="col-xs-6"><i class="fa fa-jpy" style="font-size:16px;font-weight:bold;"> 4000(予算)</i></div>
      <div class="col-xs-12" style="margin-top:10px;"><i class="fa fa-calendar" style="font-size:16px;font-weight:bold;"> 2015年10月10日</i></div>
    </div>

    <hr>

    <h3 style="text-align:center">デートスケジュール</h3>
    <table class="table table-hover">
      <tr><td style="width:200px;height:40px;"><a href="#tweet1" class="fa fa-clock-o" style="display:block;width:100%;height:100%;">10月10日11:15</a></td><td style="width:250px;height:40px;"><a href="#tweet1" class="fa fa-map-marker" style="display:block;width:100%;height:100%;">渋谷駅ハチ公口</a></td></tr><!--ページ内リンクを貼り付け-->
      <tr><td style="width:200px;height:40px;"><a href="#tweet2" class="fa fa-clock-o" style="display:block;width:100%;height:100%;">10月10日12:35</a></td><td style="width:250px;height:40px;"><a href="#tweet2" class="fa fa-map-marker" style="display:block;width:100%;height:100%;">スターバックスコーヒー</a></td></tr><!--ページ内リンクを貼り付け-->
      <tr><td style="width:200px;height:40px;"><a href="#tweet3" class="fa fa-clock-o" style="display:block;width:100%;height:100%;">10月10日14:15</a></td><td style="width:250px;height:40px;"><a href="#tweet3" class="fa fa-map-marker" style="display:block;width:100%;height:100%;">宇田川カフェ</a></td></tr><!--ページ内リンクを貼り付け-->
      <tr><td style="width:200px;height:40px;"><a href="#tweet4" class="fa fa-clock-o" style="display:block;width:100%;height:100%;">10月10日18:23</a></td><td style="width:250px;height:40px;"><a href="#tweet4" class="fa fa-map-marker" style="display:block;width:100%;height:100%;">センター街</a></td></tr><!--ページ内リンクを貼り付け-->
    </table>

    <a href="couple.php"><!--カップルページへのリンク-->


      <div class="row">
        <div class="col-xs-6">
          <img src="img/kohei.jpg" style="height:150px;width:150px;">
          <h4 style="text-align:center;">新居航平</h4>
          <p style="text-align:center;">２２歳 / 学生</p>
        </div>
        <div class="col-xs-6">
          <img src="img/aragaki.jpg" style="height:150px;width:150px;">
          <h4 style="text-align:center;">新垣結衣</h4>
          <p style="text-align:center;">２５歳 / 女優</p>
        </div>
      </div>
    </a>

<!--デート全体説明終了--> 


<!--デート詳細-->
    <!--一つのツイートの塊-->
    <hr>
    <div id="tweet1">
      <div class="row">
        <div class="col-xs-6"><i class="fa fa-clock-o" style="font-size:15px;font-weight:bold;"> 10月10日11:15</i></div>
        <div class="col-xs-6"><i class="fa fa-map-marker" style="font-size:15px;font-weight:bold;"> 渋谷駅ハチ公口</i></div>
      </div>
      <div style="width:320px;height:220px; overflow:hidden;">
          <img src="img/photo1.jpg" style="width:320px;">
      </div>
      <p style="font-weight:bold;font-size:14px;margin-top:20px;padding-left:10px;padding-right:10px;">初めての渋谷ー！まずはもちろんハチ公に直行！噂通り人が多すぎるー！とくに外人さん多いねー。さぁ、これから渋谷散策行ってきますー！</p>


    </div>
  <!--一つのツイートの塊終了-->
<!--デート詳細終了-->




<!--似ているプラン-->
  <hr>
    <h4 style="text-align:center">似ているプラン</h4>
    <!--似ているプランのひとつ-->
    <hr>
    <a href="date.php"><!--このデートプランに飛ぶリンク-->
      <div style="background-color:#FF8C00; padding:5px;">
        <div style="overflow:hidden; width:100%; height:180px;">
          <img src="img/photo1.jpg" style="width:100%;">
        </div>
        <h4 >自由が丘スイーツ満喫デート</h4>
        <p class="fa fa-map-marker" style="font-size:13px;font-weight:bold;text-align:center;width:100%;">自由が丘周辺</p>
        <p>彼女が好きなデザートを巡りに自由が丘に行ってきました！自由が丘は歩いてるだけで楽しい街です！スイーツ、雑貨巡りにおすすめです！</p>
      </div>
    </a>
    <!--似ているプランのひとつ終了-->     
  <!--似ているプラン終了-->



</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
$(function(){
  $('a[href^=#]').click(function(){ 
        var speed = 500; //移動完了までの時間(sec)を指定
        var href= $(this).attr("href"); 
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
      });
});
</script>
</body>
</html>