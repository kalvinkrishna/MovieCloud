<script type="text/javascript" src="js/slider/js/jssor.core.js"></script>
<script type="text/javascript" src="js/slider/js/jssor.utils.js"></script>
<script type="text/javascript" src="js/slider/js/jssor.slider.js"></script>
    <!-- use jssor.slider.player.ytiframe.min.js for release -->
<script type="text/javascript" src="js/slider/js/jssor.player.ytiframe.js"></script>
<script type="text/javascript" src="js/slider/js/slideFunction.js"></script>
<link rel="stylesheet" type="text/css" href="css/slidercss/sliderFunction.css">
<?php

$video = array(
	'http://www.youtube.com/embed/H7jtC8vjXw8?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/QjKO10hKtYw?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/b-3BI9AspYc?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/YbT0xy_Jai0?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/YbT0xy_Jai0?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/YbT0xy_Jai0?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent',
	'http://www.youtube.com/embed/YbT0xy_Jai0?enablejsapi=1&version=3&playerapiid=ytplayer&fs=1&wmode=transparent'
);


echo"
	<div id='slider1_container'>
        <!-- Slides Container -->
        <div u='slides' style='cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 390px;
            overflow: hidden;'>";
            for ($i=0; $i <7 ; $i++) { 
            	
            	echo "
            	<div class='VideoKu'>
		                <div u='player' style='position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;'>
		                    <!-- iframe in ebay page is not allowed, youtube iframe video is not supported for ebay listing -->
		                    <iframe pHandler='ytiframe' pHideControls='0' width='640' height='390' style='z-index: 0;' url='".$video[$i]."' frameborder='0' scrolling='no'></iframe>
		                    <!-- play cover begin (optional, can remove play cover) -->
		                    <div u='cover' class='videoCover' style='position: absolute; top: 0px; left: 0px; background-color: #000; background-image: url(img/play.png); background-position: center center; background-repeat: no-repeat; filter: alpha(opacity=40); opacity: .4; cursor: pointer; display: none; z-index: 1;'></div>
		                    <!-- play cover end -->
		                    <!-- close button begin (optional, can remove close button) -->
		    
		                    <div u='close' class='closeButton' style='position: absolute; top: 0px; right: 1px;
		                        width: 30px; height: 30px; background-color: #000; cursor: pointer; display: none; z-index: 2;'>
		                    </div>
		                    <!-- close button end -->
		                </div>
           		 </div>

            	";
            }
           
echo"
        </div>
 

        <!-- Bullet Navigator Skin Begin -->
    
        <!-- bullet navigator container -->
        <div u='navigator' class='jssorb03' style='position: absolute;left: 6px;'>
            <!-- bullet navigator item prototype -->
            <div u='prototype' style='POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;'><NumberTemplate></NumberTemplate></div>
        </div>
        <!-- Bullet Navigator Skin End -->
    
    </div>
";

?>
  <script>
            jssor_slider1_starter('slider1_container');
  </script>
