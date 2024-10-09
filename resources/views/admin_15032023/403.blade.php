<!DOCTYPE html>
<html>
<head>
<title>403 - Forbiden</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<style>
    html { box-sizing: border-box; }

*,
*::before,
*::after { box-sizing: inherit;text-decoration: none;}

body * {
  margin: 0;
  padding: 0;
  text-align: center;
  font-size: 20px;
}

img{
    user-drag: none;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-drag: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}

.page_403{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 625px;
}

h1{
font-size:80px;
}

h3{
font-size:30px;
}
.link_404{
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}

</style>
</head>
<body>


    <section class="page_403">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 ">
            <div class="col-sm-10 col-sm-offset-1  text-center">
            <div class="four_zero_four_bg">
                <h1>403</h1>

            <p>Sorry, it's not allowed to go beyond this point!</p>
            <img src="{{ asset('admin-assets/images/403.gif')}}" style="width: 500px;">


            </div>

            <div class="contant_box_404">
            <h3 class="h2">
                You don’t have permission to access!
            </h3>
            <a href="{{ URL::previous() }}" class="link_404">Please, go back this way.</a>
        </div>
            </div>
            </div>
            </div>
        </div>
    </section>





</body>
</html>


