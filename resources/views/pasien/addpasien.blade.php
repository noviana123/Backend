@section('title', 'Add Pasien')
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Pasien | VISS - protect yourself</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../css/morris../js/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../css/form/all-type-forms.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="../css/dropzone/dropzone.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <!--Sidebar-->
    @include('leftmenu')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                    <br>
                    <br>
                    </div>
                </div>
            </div>
        </div>
        <!--header-->
        @include('header')
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li>
                                <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="firstname" type="text" class="form-control" placeholder="Full Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="address" type="text" class="form-control" placeholder="Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
																		<option value="none" selected="" disabled="">Select Gender</option>
																		<option value="0">Male</option>
																		<option value="1">Female</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="country" class="form-control">
																			<option value="none" selected="" disabled="">Select country</option>
																			<option value="0">India</option>
																			<option value="1">Pakistan</option>
																			<option value="2">Amerika</option>
																			<option value="3">China</option>
																			<option value="4">Dubai</option>
																			<option value="5">Nepal</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="state" class="form-control">
																			<option value="none" selected="" disabled="">Select state</option>
																			<option value="0">Gujarat</option>
																			<option value="1">Maharastra</option>
																			<option value="2">Rajastan</option>
																			<option value="3">Maharastra</option>
																			<option value="4">Rajastan</option>
																			<option value="5">Gujarat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="city" class="form-control">
																			<option value="none" selected="" disabled="">Select city</option>
																			<option value="0">Surat</option>
																			<option value="1">Baroda</option>
																			<option value="2">Navsari</option>
																			<option value="3">Baroda</option>
																			<option value="4">Surat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Facebook URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        @include('footer')
    </div>

    <!-- jquery
		============================================ -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../js/metisMenu/metisMenu.min.js"></script>
    <script src="../js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../js/calendar/moment.min.js"></script>
    <script src="../js/calendar/fullcalendar.min.js"></script>
    <script src="../js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="../js/jquery.maskedinput.min.js"></script>
    <script src="../js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="../js/datepicker/jquery-ui.min.js"></script>
    <script src="../js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="../js/form-validation/jquery.form.min.js"></script>
    <script src="../js/form-validation/jquery.validate.min.js"></script>
    <script src="../js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="../js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="../js/tawk-chat.js"></script>
</body>

</html>