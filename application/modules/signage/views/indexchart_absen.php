<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CodePen Stats InfoGraphic</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_codepen/1/css/style.css">

  
</head>

<body>
  <!--View Full Screen For Best Experience & Please Note >> circle chart and bar graph animation does not accurately correspond with the actual numbers, it's just a visual !-->
<body>
<div class="container">
    <h1><small>CodePen</small>
	<span class = 'stat'><a href = 'https://codepen.io/stats/'>STATS</a></span><br /><span class = 'date'>as of 12.9.2014</span><br/><span class ='quote'>"It's important that you prove your point with numbers."</i></span><br />
	<span class='auth'>- Samantha Levan</span></h1></div>
    <div class="statistics">
        <div>
            <h2 class="title-one">Unstoppable Growth</h2>
            <div class="rings">
                <div class="pie pie1">
                    <div class="title">Identified Users</div>
                    <div class="outer-right mask">
                        <div class="inner-right"></div>
                    </div>

                    <div class="outer-left mask">
                        <div class="inner-left"></div>
                    </div>
                    <div class="content">
                        <span>195,161</span>
                    </div>
                    <div class="arrow"></div>
                </div>

                <div class="pie pie2">
                    <div class="title">New Users</div>
                    <div class="outer-right mask">
                        <div class="inner-right"></div>
                    </div>

                    <div class="outer-left mask">
                        <div class="inner-left"></div>
                    </div>
                    <div class="content">
                        <span>373</span>
                    </div>
                    <div class="arrow"></div>
                </div>

                <div class="pie pie3">
                    <div class="title">Anonymous Users</div>
                    <div class="outer-right mask">
                        <div class="inner-right"></div>
                    </div>

                    <div class="outer-left mask">
                        <div class="inner-left"></div>
                    </div>
                    <div class="content">
                        <span>478,373</span>
                    </div>
                    <div class="arrow"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div>
            <h2 class="title-two">FrontEnd Activity</h2>
            <div class="circles">
                <div class="circle-one">
                    <div class="text">&nbsp;&nbsp;7,233<br />Created<br />&nbsp;&nbsp;Today</div>
                </div>
                <div class="circle-two">
                    <div class="text">Unique Pens<br />&nbsp;&nbsp;2,349,448</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div>
            <h2 class="title-three">Activity Breakdown</h2>
            <div class="h-bars">
                <div class="bar-one"></div>
                <div class="bar-two"></div>
                <div class="bar-three"></div>
                <div class="bar-four"></div>
                <div class="bar-five"></div>
                <div class="clear"></div>
            </div>
        </div>
      </div>
    </body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url(); ?>assets/assets_codepen/1/js/index.js"></script>

</body>
</html>
