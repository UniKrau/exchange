<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__topmine_io">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" async="" src="./Topmine mining cryptocurrency_files/recaptcha__en.js"></script>

		<title>DashBoard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="./assets/css/bootstrap.css">
		<link rel="stylesheet" href="./assets/css/css.css">
		<link rel="stylesheet" href="./assets/css/grayscale.css">
	
	</head>
	

<body>
 
 <header class="intro"> 	
 <nav class="navbar NavbarMenu navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar "></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
<!--					<a class="navbar-brand" href="#"> <img src="./assets/img/TopMine.png" alt=""> </a>-->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav soc">
						<li class="icon icon-fb">
							<a href="#" target="_blank"></a>
						</li>
						<li class="icon icon-tv">
							<a href="#" target="_blank"></a>
						</li>
						<li class="icon icon-vk">
							<a href="#" target="_blank"></a>
						</li>

					</ul>
					<ul class="nav navbar-nav header-menu">

						<li>
							<a href="#">Home</a>
						</li>

						<li>
							<a href="#">News </a>
						</li>

						<li>
							<a href="#">FAQ </a>
						</li>

						<li>
							<a href="#">Support </a>
						</li>

						<li>
							<a href="##"><img src="./assets/img/calc.png" alt=""> </a>
						</li>
						<li>
							<a href="#">Account</a>
						</li>
					</ul>

<!--					<ul class="nav navbar-nav navbar-right lang text-center">-->
<!--						<li>-->
<!--							<a href="#" class="active" data-lang="eng">En</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" data-lang="cn">Zh</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" data-lang="ru">Ru</a>-->
<!--						</li>-->
<!---->
<!--					</ul>-->
					<ul class="nav navbar-right out">
						<li>
							<a href="#">Logout</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
  
  <!--after this section all the sidebar and content pops -->
  <div class="content-account">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<h3> Welcome to your account , stony </h3>
						<br>
						<input type="hidden" id="value-select" value="3">
						<input type="hidden" class="cloud" value="5.00009028">
						<div class="mob-menu collapsed">
							<div class="form-group">
								<button class="btn btn-info btn-block">
									Меню
								</button>
							</div>
						</div>
						<div class="ms col-md-3 ac-menu">
							<ul>
								<li class="selectmenu" onclick="G()">
									Account
								</li>
								<li onclick="gotos(&#39;ex&#39; ,event)">
									Exchange
								</li>
								<li onclick="gotos(&#39;Deposit&#39;,event)">
									Make a deposit
								</li>
								<li onclick="gotos(&#39;Withdraw&#39;,event)">
									Withdraw
								</li>
								<li onclick="gotos(&#39;ref&#39;,event)">
									Affiliate
								</li>
								<li onclick="gotos(&#39;history&#39;,event)">
									History
								</li>

								<li onclick="gotos(&#39;profile&#39;,event)">
									Settings
								</li>

							</ul>
						</div>
						<div class="col-md-9 bg-ac template">

							<div class="blocks col-md-12" id="cloud">

								<div class="col-md-2 col-xs-3 col-sm-2">
									<img src="./assets/img/cloud.png" alt="">
								</div>
								<div class="col-md-10 col-xs-9 col-sm-9">

									<div class="info col-md-6 col-xs-10 col-sm-5 ">
										<div class="name">
											TeraX
										</div>
										<div class="price">
											Price: <span>$&nbsp;0.12</span>
										</div>
										<input type="hidden" id="cloudvalue" value="5.00009028">
										<div class="counted">
											Amount:<span class="renderCount">5.00009028<font color="red">00</font></span>
										</div>

									</div>
									<div class="col-md-6 col-xs-12 cont-m col-sm-7">
										<input type="button" onclick="mining(&#39;cloud&#39;)" class="btn btn-block pull-right btn-border" value="Start Mining">
									</div>
								</div>

							</div>
							<ul class="block col-md-12">
								<div class="row">
									<li id="1" class="col-md-6">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/USA Dollar.png"> USA Dollar
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">0.00000000<font color="red">00</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.0000010833">
												<input type="hidden" id="tsar" value="0.0000000000">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">1</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.00000000<font color="red">00</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;1&#39;)" class="btn-border m text-center btn-block" value="Start Mining ">
											</div>
										</div>
									</li>
									<li id="3" class="col-md-6 activet">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/Bitcoin.png"> Bitcoin
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">0.00007885<font color="red">85</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.00000000221808">
												<input type="hidden" id="tsar" value="0.00007885846589852706">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">480.00</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.03785206<font color="red">36</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;3&#39;)" class="btn-border m text-center btn-block" value="Mining">
											</div>
										</div>
									</li>
								</div>
								<div class="row">
									<li id="4" class="col-md-6">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/Litecoin.png"> Litecoin
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">0.00000000<font color="red">00</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.000000276352">
												<input type="hidden" id="tsar" value="0.0000000000">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">4.55</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.00000000<font color="red">00</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;4&#39;)" class="btn-border m text-center btn-block" value="Start Mining ">
											</div>
										</div>
									</li>
									<li id="5" class="col-md-6">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/Dogecoin.png"> Dogecoin
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">30.00000000<font color="red">00</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.00462409">
												<input type="hidden" id="tsar" value="30.0000000000">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">0.00022</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.00660000<font color="red">00</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;5&#39;)" class="btn-border m text-center btn-block" value="Start Mining ">
											</div>
										</div>
									</li>
								</div>
								<div class="row">
									<li id="7" class="col-md-6">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/Ethereum.png"> Ethereum
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">0.00000000<font color="red">00</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.0000000698903">
												<input type="hidden" id="tsar" value="0.0000000000">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">11.05</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.00000000<font color="red">00</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;7&#39;)" class="btn-border m text-center btn-block" value="Start Mining ">
											</div>
										</div>
									</li>
									<li id="8" class="col-md-6">
										<div class="it">
											<div class="header-mining">

												<img src="./assets/img/Dash.png"> Dash
											</div>

											<div class="info t-table">

												<div class="counted t-row">
													<span class="t-cell">Amount:</span><span class="renderCount t-cell">0.00000000<font color="red">00</font></span>
												</div>
												<input type="hidden" class="renderSpeed" value="0.000000139421">
												<input type="hidden" id="tsar" value="0.0000000000">

												<div class="price t-row">
													<span class="t-cell">Price:</span>
													<span class="t-cell">$&nbsp;<span class="renderPrice">7.47</span></span>
												</div>

												<div class="t-row">
													<span class="t-cell"> Cash: </span><span class="t-cell">$&nbsp;<span class="renderSum">0.00000000<font color="red">00</font></span></span>
												</div>
											</div>
											<div class="t-row btn-m">
												<input type="button" onclick="mining(&#39;8&#39;)" class="btn-border m text-center btn-block" value="Start Mining ">
											</div>
										</div>
									</li>
								</div>
							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>
</header>
 	    <script src="./assets/js/lang-eng.js"></script>
		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/js/knockout-3.4.0.js"></script>
		<script src="./assets/js/site.js"></script>
		
		
	

	
</body>
</html>
