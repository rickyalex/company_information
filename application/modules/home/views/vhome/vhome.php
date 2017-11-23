<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Dashboard Signage</title>

        <link style="text/css" href="<?php echo base_url(); ?>/assets/assets_front/css/bootstrap.css" rel="stylesheet prefecth">
        <link style="text/css" href="<?php echo base_url(); ?>/assets/assets_front/css/AdminLTE.css" rel="stylesheet prefecth">
       <!--<link style="text/css" href="<?php echo base_url(); ?>/assets/css/events.css" rel="stylesheet"> -->

        <!-- animated bar 
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets_front/animated-bar/css/style.css"> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets_front/jquery.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets_front/jquery.easing.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets_front/jquery.easy-ticker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets_front/js/bootstrap.min.js"></script>

        <style>
            body{
                font-family: 'Oswald', sans-serif;
            }

/*            .container{
                width: 100% !important;
            }*/
            #gradient {
                height:100%;
                width:100%;
                margin:0;
                overflow:hidden;
                background:url(<?php echo base_url(); ?>/assets/assets_front/images/login-bg.jpg) no-repeat;
                background-size:2000px 1250px; 
                -webkit-animation: mymove 55s infinite; Chrome, Safari, Opera

            }

             Chrome, Safari, Opera 
            @-webkit-keyframes mymove {
                50% {background-size: 3225px 1225px;}
            }

             Standard syntax 
            @keyframes mymove {
                25% {background-size: 1225px 1225px;}
            }
             Standard syntax 
            @keyframes mymove {
                50% {background-size: 2500px 1250px;}
            }
             Standard syntax 
            @keyframes mymove {
                75% {background-size: 3225px 3225px;}
            }

            .vticker{
                padding:0px;
                margin:0px;
                margin-bottom:0px;
                border: 0px solid red;
                z-index: 6;


                min-width:100%;
                overflow:hidden;
                position: relative;

            }
            .vticker ul{
                padding: 0;
                width:100% !important;
            }
            .vticker li{
                padding: 0px;
                width:100% !important;
            }
            .et-run{
                /* background: red; */
            }

            /* ini untuk marquee */
            #textlayer  { z-index: 300; width: 100%; height: 100%; background-color: black;}
            marquee#text1 { position: fixed; bottom: 0px; left: 5%; width: 95%; color: white; background-color: black;  font-size: 20px; }
            a#text2 { position: fixed; bottom: 0px; left: 0%; width: 5%;}

        </style>

        <script type="text/javascript">
            $(document).ready(function () {

                var dd = $('.vticker').easyTicker({
                    direction: 'left',
                    easing: 'swing',
                    speed: 'slow',
                    interval: 10000,
                    height: 'auto',
                    visible: 1,
                    mousePause: 0,
                    controls: {
                        up: '.up',
                        down: '.down',
                        toggle: '.toggle',
                        stopText: 'Stop !!!'
                    }
                }).data('easyTicker');

                cc = 1;
                $('.aa').click(function () {
                    $('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
                    cc++;
                });

                $('.vis').click(function () {
                    dd.options['visible'] = 3;

                });

                $('.visall').click(function () {
                    dd.stop();
                    dd.options['visible'] = 0;
                    dd.start();
                });

            });
        </script>

        <script type="text/javascript">
            //set timezone
<?php date_default_timezone_set('Asia/Jakarta'); ?>

            //buat object date berdasarkan waktu di server
            var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
            //buat object date berdasarkan waktu di client
            var clientTime = new Date();
            //hitung selisih
            var Diff = serverTime.getTime() - clientTime.getTime();
            //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
            function displayServerTime() {
                //buat object date berdasarkan waktu di client
                var clientTime = new Date();
                //buat object date dengan menghitung selisih waktu client dan server
                var time = new Date(clientTime.getTime() + Diff);
                //ambil nilai jam
                var sh = time.getHours().toString();
                //ambil nilai menit
                var sm = time.getMinutes().toString();
                //ambil nilai detik
                var ss = time.getSeconds().toString();
                //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
            }
        </script>

    </head>

    <body id="gradient" onload="setInterval('displayServerTime()', 1000);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-aqua">
                        <h3>
                            <?php echo date('l'); ?>
                        </h3>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-aqua">
                        <h3>
                            <?php echo date('d M Y'); ?>
                        </h3>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-aqua">
                        <h3>
                            <span id="clock"><?php echo date('H:i:s'); ?></span>
                        </h3>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                    </div>
                </div>
                
                
                <div class="vticker">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="data-1" style="padding-top: 0px;margin: 0px 0px 15px 0px;">
                                        <div id="container0" style="min-width: 310px; margin: 0 0"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="data-2" style="padding-top: 0px;margin: 0px 0px 15px 0px;">
                                        <div id="container1" style="min-width: 310px; margin: 0 0"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="data-4" style="padding-top: 0px;margin: 0px 0px 15px 0px;">
                                        <div id="container2" style="min-width: 310px; margin: 0 0"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="data-5" style="padding-top: 0px;margin: 0px 0px 15px 0px;">
                                        <div class="box box-warning">
                                            <div class="box-body">
                                                <table style="padding:0px" class="slug-table table table-bordered table-striped table-responsive dt-responsive" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <td width="5%"><strong>No.</strong></td>
                                                            <td width="10%"><strong>Kendaraan</strong></td>
                                                            <td width="10%"><strong>No Polisi</strong></td>
                                                            <td width="20%"><strong>Divisi</strong></td>
                                                            <td width="10%"><strong>Tujuan</strong></td>
                                                            <td align='center' width="5%"><strong>08.00</strong></td>
                                                            <td align='center' width="5%"><strong>09.00</strong></td>
                                                            <td align='center' width="5%"><strong>10.00</strong></td>
                                                            <td align='center' width="5%"><strong>11.00</strong></td>
                                                            <td align='center' width="5%"><strong>12.00</strong></td>
                                                            <td align='center' width="5%"><strong>13.00</strong></td>
                                                            <td align='center' width="5%"><strong>14.00</strong></td>
                                                            <td align='center' width="5%"><strong>15.00</strong></td>
                                                            <td align='center' width="5%"><strong>16.00</strong></td>
                                                            <td align='center' width="5%"><strong>17.00</strong></td>
                                                        </tr>
                                                    </thead>

                                                    <tbody id="content"></tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            
        </div>
        <div id="textlayer">
            <a href="<?php echo base_url(); ?>auth/login" id="text2" class="btn btn-small btn-info">Admin</a>
            <marquee id="text1" behavior="scroll" loop="infinite" starttime="0" displaytime="20">     
            </marquee>

        </div>

        <!-- animated bar -->
        <script  src="<?php echo base_url(); ?>/assets/assets_front/animated-bar/js/index.js"></script>
        <script src="<?php echo base_url(); ?>/assets/assets_front/highchart2/highcharts/highcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/assets_front/highchart2/highcharts/modules/exporting.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/assets_front/highchart2/highcharts/themes/gray.js" type="text/javascript"></script>

        <!-- u/ canvas chart -->
        <script src="<?php echo base_url(); ?>/assets/assets_front/concretecharts/js/CircleChart.js" type="application/javascript"></script>
        <link href='<?php echo base_url(); ?>/assets/assets_front/concretecharts/css/style_concretecharts.css' rel='stylesheet' type='text/css' />
<!--    <link href='<?php echo base_url(); ?>/assets/assets_front/concretecharts/css/font.css' rel='stylesheet' type='text/css'>-->
        
        <!-- auto refresh data-->
        <script>
            var timerId = setInterval(function () {
                console.log("retrieving data from server ");
                
                //runing text
                $("#container0").load('<?php echo base_url(); ?>home/view_canvas');
                
                //chart1
                $("#container1").load('<?php echo base_url(); ?>home/view_absen');

                //chart2
                $("#container2").load('<?php echo base_url(); ?>home/view_denda');

                //mobil ga
                $("#content").load('<?php echo base_url(); ?>home/view_bar_portal');

                //runing text
                //$("#text1").load('<?php echo base_url(); ?>home/view_info_text');
                
            }, 5000);
        </script>
    </body>
</html>