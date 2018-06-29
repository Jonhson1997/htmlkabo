<?php 
include("list.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>技能介紹</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			body{
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/SK_bg.jpg");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/SK_bg.jpg");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/SK_bg.jpg");
				background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/SK_bg.jpg");
				background-attachment: fixed;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
				padding-top: 0;
			}
		</style>
	</head>
	<body class="landing-features" style="background-color:transparent">
		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<?php 
				navbar();
				?>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><font color="#00DDAA" size="50">技 	能	介	紹</font></h2>
							<p>最	酷	炫	的	技 	能	特	效</p>
						</div>
						<a href="#one" class="more scrolly">更多</a>
					</section>
				<!-- Main -->
						<article id="main-custom">
						<section id="one" class="wrapper alt style1 " style="background-color:transparent">
						<hr />
						<hr />
						<section class="spotlight">
							<div class="image">
								<img src="images/character1.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>閃	亮	嘎	波</h3>
								<li>煉獄風暴</li>
									<img src="images/character1_atk1.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
								<li>輪迴怒火</li>
									<img src="images/character1_atk2.gif" alt="" style="height:50px;width:50px;margin-left:0%" />

							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character2.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>口	水	嘎	波</h3>
								<li>冰川風暴</li>
									<img src="images/character2_atk1.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
								<li>寒冰閃燿</li>
									<img src="images/character2_atk2.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
							</div>
						</section>
						<hr />
						
						<section class="spotlight">
							<div class="image">
								<img src="images/character3.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>啾	咪	嘎	波</h3>
								<li>先聲奪人</li>
									<img src="images/character3_atk1.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
								<li>奪命氣息</li>
									<img src="images/character3_atk2.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character4.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>Love	嘎	波</h3>
								<li>迷戀甘風</li>
									<img src="images/character4_atk1.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
								<li>Death Wink</li>
									<img src="images/character4_atk2.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character5.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>淚	眼	嘎	波</h3>
								<li>大炎戒●炎帝</li>
									<img src="images/character5_atk1.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
								<li>能量爆裂</li>
									<img src="images/character5_atk2.gif" alt="" style="height:50px;width:50px;margin-left:0%" />
							</div>
						</section>
						<hr />
					</article>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>