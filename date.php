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

  <div class="container">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">

        <!--写真のスライドショー-->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:900px; height:500px; margin:60px auto 0 auto;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active" style="overflow: hidden;width:900px; height:500px;">
              <img src="img/photo1.jpg" alt="photo1" style="width:900px;">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item" style="overflow: hidden;width:900px; height:500px;">
              <img src="img/photo2.jpg" alt="photo2" style="width:900px;">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item" style="overflow: hidden;width:900px; height:500px;">
              <img src="img/photo3.jpg" alt="photo3" style="width:900px;">
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
        <div style="border:1px solid #ccc;">
          <h2 style="text-align:center;">渋谷デート</h2>
          <div class="row">
            <div class="col-sm-5">
              <h3 style="text-align:center">デートスケジュール</h3>
              <table class="table">
                <a href=""><tr><td>10月10日11:15</td><td>@渋谷駅ハチ公口</td></tr></a><!--ページ内リンクを貼り付け-->
                <a href=""><tr><td>10月10日12:35</td><td>@スターバックスコーヒー</td></tr></a>
                <a href=""><tr><td>10月10日14:15</td><td>@宇田川カフェ</td></tr></a>
                <a href=""><tr><td>10月10日18:23</td><td>@センター街</td></tr></a>
              </table>
            </div>
            <div class="col-sm-7">
              <h3 style="text-align:center">デート詳細</h3>
              
              <div class="row" style="margin:10px 0 10px 0;">
                <div class="col-sm-4">
                  <i class="fa fa-map-marker" style="font-size:16px;font-weight:bold;"> 渋谷</i>
                </div>
                <div class="col-sm-5">
                  <i class="fa fa-clock-o" style="font-size:16px;font-weight:bold;"> 2015年10月10日</i>
                </div>
                <div class="col-sm-3">
                  <i class="fa fa-jpy" style="font-size:16px;font-weight:bold;"> 4000(予算)</i>
                </div>
              </div>
              
              <p style="font-weight:bold;">初めての渋谷に来るカップルにおすすめのデートプランです！センター街で歩きながらThe都会の雰囲気を感じながら、宇田川カフェで一息休憩しました。本当に充実の一日でした！</p>
              <a href="couple.php"><!--カップルページへのリンク-->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row" style="position: relative;">
                      <div class="col-sm-6">
                        <img src="img/kohei.jpg" style="height:100px;width:100px;">
                      </div>
                      <div class="col-sm-6" style="position: absolute;top: 20px;left:120px;">
                        <h4>新居航平</h4>
                        <p>２２歳 / 学生</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="row" style="position: relative;">
                      <div class="col-sm-6">
                        <img src="img/aragaki.jpg" style="height:100px;width:100px;">
                      </div>
                      <div class="col-sm-6" style="position: absolute;top: 20px;left:120px;">
                        <h4>新垣結衣</h4>
                        <p>２５歳 / 女優</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div> 
        <!--デート全体説明終了--> 

        <!--デート詳細、サイドバー-->

        <div class="row" style="margin-top:40px;">
          <!--デート詳細-->
          <div class="col-sm-8">
            <div class="row" style="border:1px solid #ccc;">
              <div class="col-sm-6" >
                <div style="width:300px;height:200px; overflow:hidden;">
                  <img src="img/photo1.jpg" style="width:350px;">
                </div>
              </div>
              <div class="col-sm-6" style="position: relative; width:300px;height:200px;">
                <p style="font-weight:bold;font-size:18px;margin-top:20px;">初めての渋谷ー！まずはもちろんハチ公に直行！噂通り人が多すぎるー！とくに外人さん多いねー。さぁ、これから渋谷散策行ってきますー！</p>
                <div class="row" style="position: absolute;bottom: 10px; width:300px;">
                  <div class="col-sm-6">
                    <i class="fa fa-clock-o" style="font-size:13px;font-weight:bold;"> 10月10日11:15</i>
                  </div>
                  <div class="col-sm-6">
                    <i class="fa fa-map-marker" style="font-size:13px;font-weight:bold;"> 渋谷駅ハチ公口</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--デート詳細終了-->




          <!--サイドバー開始-->
          <div class="col-sm-4"></div>        
          <!--サイドバー終了-->

        </div>
        <!--デート詳細、サイドバー終了-->

      </div>
    </div>
  </div>



  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>