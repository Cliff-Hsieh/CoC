<!doctype HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://alvarotrigo.com/fullPage/jquery.fullpage.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://alvarotrigo.com/fullPage/jquery.fullPage.min.js"></script> 

<style>
#query{
    position: absolute;
    top: 500px;
    margin-left: 40%;
    background: #316f68;
    padding: 15px 30px;
    border-radius: 5px;
    display: block;
}
#query a{
    color: #fff;
}
</style>
</head>
<body>
<div id="fullpage">
    <div class="section">
        <img src="{{ URL::to('/') }}/img/image2.jpg" />
        <div id="query"><a href="{{ URL::to('/clans') }}">Get Clash of Clans Data</a></div>
    </div>
    <div class="section"><img src="https://downloads.andyroid.net/website/v2//wp-content/uploads/2014/12/clash.png"></div>
    <div class="section"><img src="http://loyalknights.com/wp-content/uploads/2014/10/CoC_titlescreen_2013.jpg"></div>
    <div class="section">
        <div class="container">
            <span><h2 class="text-center text-primary">Replay</h2></span>
            <div class="container-fluid">
                <div class="row">
                     <div class="col-md-3">
                         <div class="embed-responsive embed-responsive-16by9">
                             <iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/s0S6ZzbimYM" frameborder="0" allowfullscreen></iframe>
                         </div>
                         <span class="text-center">表哥狗球流1</span>
                     </div>
                     <div class="col-md-3">
                         <div class="embed-responsive embed-responsive-16by9"> 
                              <iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/KqRKMrMUIyY" frameborder="0" allowfullscreen></iframe>
                         </div>
                         <span class="text-center">表哥狗球流2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- GA start-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104180492-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- GA end -->
<script>
$(document).ready(function() {
  $('#fullpage').fullpage();
});
</script>
</html>
