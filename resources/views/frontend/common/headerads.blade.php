
<header class="regular-header sticky_gallery">
    @section('content')
    @php

    use App\Models\ {ProductCategory};
       
$ProductCategory = ProductCategory::get();
       
    @endphp   
	
	<div class="mainmenu headerfordesktop">
		<div class="header">
			<div class="logo">
				<img src="https://wigomania.com/storage/gallery/logonw.webp">
			</div>
			<div class="center-text">
				<span class="desH">WIG-O-MANIA</span><br/>
				<span class="smalldes">UK hair brand in India<br/>
				Designed in London Made for the world</span>
			</div>
			<div class="phone-number">
				<a href="tel:+919962831281"><i class="fa fa-phone" aria-hidden="true"></i> +91 99628 31281</a>
			</div>
		</div>
	</div>
	<div class="mainmenu headerforphone">
		<div class="header">
			<div class="leftDIVP">
				<div class="logo">
					<img src="https://wigomania.com/storage/gallery/logonw.webp">
				</div>
				<div class="center-text">
					<div class="desH">WIG-O-MANIA</div>
					<div class="smalldes"><div>UK hair brand in India</div>
					<div>Designed in London Made for the world</div>
					</div>
				</div>
			</div>
			
			<div class="phone-number rightDIVP">
				<a href="tel:+919962831281"><i class="fa fa-phone" aria-hidden="true"></i> +91 99628 31281</a>
			</div>
		</div>
	</div>
</header>
<style>
.headerforphone{
	display:none;
}
.headerforphone{
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #fff;
}
.phone-number a{
	display: inline-block;
    color: #fff;
    padding: 11px 25px;
    border-radius: 4px;
    font-weight: 400;
    background: #ee4695;
}
.header {
	display: flex;
    justify-content: space-between;
    align-items: center;
    /* padding: 5px; */
    background-color: #fff;
    padding-bottom: 0px !important;
    padding-left: 20px;
    padding-right: 20px;
}
.logo {
	flex: 1;
}
.logo img {
	max-height: 50px; /* Adjust as needed */
}
.center-text {
	flex: 2;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
}
.center-text span{
    font-size: 20px;
	color:#ee4695;
}
.center-text .smalldes{
    font-size: 12px;
	color:#000;
	font-style: italic;
}
.phone-number {
	flex: 1;
	text-align: right;
}
.mobileview23{
	display:none;
}
.video-container{
	margin-top: 0px;
    margin-bottom: 0px;
    position: relative;
}
.mainmenu {
    height:80px;
    padding-top: 5px;
	border-bottom: 1px solid #ee4695;
}
.logo img {
     height: 50px; 
}
.header-cont-info {
    text-align: right;
    margin-top: 5px;
}
.header-cont-info ul {
	list-style: none;
    display: inline-flex;
}
.header-cont-info ul li {
    margin-right: 20px;
}
.header-cont-info a {
    display: inline-block;
    color: #fff;
    padding: 11px 25px;
    border-radius: 4px;
    font-weight: 400;
    background:#ee4695;
}
.mainmenuAdsheader{
	height: 80px;
    padding-top: 5px;
}
.mainmenuAdsheader .img-fluid {
    max-width: 100%;
    height: 70px;
}
.mainmenuAdsheader .header-cont-info{
	text-align: right;
    margin-top: 13px;
}
.mainmenuAdsheader .header-cont-info ul{
	display: inline-flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
.mainmenuAdsheader .header-cont-info ul li{
	display: inline-flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
.mainmenuAdsheader .header-cont-info ul li a{
	display: inline-block;
    color: #fff;
    padding: 11px 25px;
    border-radius: 4px;
    font-weight: 400;
    background: #ee4695;
}
.headerphoneads{
	text-align:center;
	width:100%;
	margin-top: 10px;
	padding-bottom: 10px;
}

.headerphoneads .mobile_num1:hover{
	color:#ee4695;
}
.header-phone {
  position: absolute;
  top: 1px;
  right: 5px;
}
.whatsapp-chat {
  position: fixed;
  top: auto;
  right: 0;
  z-index: 99;
  display: block;
  bottom:90px;
}
.mobile-line{
	display: inline-block !important;
	width: 100%;
}
.leftside {
	float: left;
	width:50%;
}
.rightsidetext{
	float: right;
	width:50%;
}
.rightsidetext .headerinner{
	text-align: right;
}
#blinkbutton button{
	width:500px;
}
#carouselExampleIndicators .carousel-caption{
	padding-top: 0.35rem;
    padding-bottom: 0.35rem;
}
#carouselExampleIndicators p.banner-para{
	margin-bottom: 0px;
}
#coupon-sectionID .coupon-right{
	    padding-top: 0px !important;
}
@media screen and (max-width: 1360px){
	.regular-header .main-nav {
		padding: 17px 0 0;
	}
}
@media (max-width: 768px) {
	.regular-header .main-nav{
		margin-top:0px;
		padding-top:0px;
		padding-bottom:0px;
	}
	.mobile-line .col-lg-7{
		display:block !important;
		text-align:center;
	}
	.whatsapp-chat {
	  top: auto;left: 0;
	  right: 0;
	  bottom:90px;
	}
	.whatsapp-chat img {
	  width: auto;
	}
	section.mobile-banner.adsmobilre{
		margin-top: 100px !important;
	}
}
@media screen and (max-width:568px){
	.headerforphone .header{
		padding: 0px;
	}
	.headerforphone .phone-number a{
		padding: 11px 10px;
	}
	.headerforphone .leftDIVP{
		float: left;
		width: 50%;
	}
	.headerforphone .logo{
		text-align: center;
	}
	.headerforphone .logo img{
		height: 44px;
	}
	.headerforphone .center-text .desH{
		font-size: 17px;
		color: #ee4695;
		margin-top: 5px;
	}
	.headerforphone.mainmenu{
		height: 120px;
	}
	.headerforphone .center-text .smalldes{
		font-size: 10px;
		line-height: 11px;
	}
	#coupon-sectionID .coupon-left{
		display:none;
	}
	#blinkbutton button{
		width: 85%;
	}
	.footerads .imageDiv{
		display:none;
	}
	#coupon-sectionID .review-header p{
		font-size: 19px !important;
		text-transform: capitalize;
	}
	.footerads .coupontxt{
		padding-bottom: 0px;
	}
	.gallery_para2 p{
		color: #000 !important;
	}
	.navbar-brand img {
		width: 100px; 
	}
	.forphone1{
		display:block;
	}
	.regular-header .main-nav{
		margin-top:0px;
		padding-top:0px;
		padding-bottom:0px;
	}
	.customtesting.navbar .container-fluid{
		padding-top:0px !important;
		padding-bottom:0px !important;
	}
	button.navbar-toggler{
		margin-top: 0px !important;
	}
	.rightsidetext .headerinner{
		margin-top:8px;
	}
	section.review-banner{
		padding:111px 0px;
	}
	.leftside{
		width:100%;
	}
	.rightsidetext{
		width:100%;
	}
	.regular-header .main-nav{
		margin-top: -8px;
	}
	.navbar-brand{
		padding-top: 0px;
		padding-bottom: 0.5125rem;
	}
}
@media screen and (max-width: 480px){
	
	.regular-header .main-nav{
		margin-top: 0px;
	}
	.whatsapp-chat{
		width:10%;
	}
	
}

.navbar .container-fluid {
    padding: 12px 25px !important;
}
.error_class{
	color:red;
}
</style>