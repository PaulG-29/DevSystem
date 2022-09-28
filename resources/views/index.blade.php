
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/0b6f55e1d6.js" crossorigin="anonymous"></script>
</head>

<style>
    

:root{
    --bd-purple: #581C87;
    --bd-violet: #581C87;
    --bd-accent: #ffe484;
    --bd-violet-rgb: 112.520718,44.062154,249.437846;
    --bd-accent-rgb: 255,228,132;
    --bd-pink-rgb: 214,51,132;
    --bd-teal-rgb: 32,201,151;
}


*, ::after, ::before 
{
    box-sizing: border-box;
}
.showcase
{
	height: 600px;
	background: rgb(2,0,36);
	background: var(--bd-purple);
    color: #fff;
    position: relative;
}
.showcase-doc
{
    height: 300px;
	background: rgb(2,0,36);
	background: var(--bd-purple);
    color: #fff;
    position: relative;
}
.showcase::before,
.showcase::after 
{
  content: '';
  position: absolute;
  height: 100px;
  bottom: -70px;
  right: 0;
  left: 0;
  background: #fff;
  transform: skewY(-3deg);
  -webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
}
.nb
{
	background: rgb(2,0,36);
	background: var(--bd-purple);
}
.navbar-nav
{
	color: #fff;
}
.tile
{
    margin-top: 5rem;
}
.nav-link
{
	color: #fff;
}
.btn-outline
{
	background-color: transparent;
    border: 1px #fff solid;
	color: #fff;
}
.bd-sidebar 
{
    grid-area: sidebar;
}
.dwd
{
	position: relative;
	height: 60vh;
	margin-top: 50px;
}
pre, code 
{
    color: #000;
    word-break: normal;
	font-size: inherit;
    color: inherit;
    word-break: normal;
}

.highlight .nt 
{
    color: #000080;
}
.highlight .na 
{
    color: #008080;
}
.highlight .s 
{
    color: #d14;
}
.highlight .na 
{
    color: #008080;
}
.highlight .s 
{
    color: #d14;
}
.highlight .nt 
{
    color: #000080;
}
.showbox-wrapper .showbox-copy-buttons 
{
    display: inline-block;
    background: #38383e;
    padding: 1px 7px;
    border-radius: 3px 3px 0 0;
	margin-left: 42.2rem;
}


.highlight
{
    cursor: pointer;
}
.px
{
    padding-left: 100px;
    text-align: center;
}

.popup {
    opacity: 0;
    pointer-events: none;
    position: absolute;
    width: fit-content;
    top: -100px;
    left: 50%;
    transform: translate(-50%, -20px);
    background-color: white;
    text-align: center;
    font-size: 18px;
    border-radius: 5px;
    padding: 10px;
    transition: 0.5s ease-in-out all;
  }
  .popup.active {
    animation: copyPopup 1s ease forwards;
  }
  
  @keyframes copyPopup {
    0% {
      opacity: 0;
      pointer-events: none;
      transform: translate(-50%, -20px);
    }
    40% {
      opacity: 1;
      pointer-events: all;
      transform: translate(-50%, 0);
    }
    80% {
      opacity: 1;
      pointer-events: all;
      transform: translate(-50%, 0);
    }
    100% {
      opacity: 0;
      pointer-events: none;
      transform: translate(-50%, -20px);
    }
  }
  

 .category-heading {
	background: rgb(2,0,36);
	background: var(--bd-purple);
    margin-bottom: 0;
    padding: 10px;
    font-size: 20px;
    border-radius: 3px 3px 0 0;
    color: white;
}

.item-element{
    list-style: none;
    line-height: 1.9 ;
    font-size: 1.2rem;
    
}
.item-element:hover
{
    background-color: var(--bd-violet);
}


.item-element a
{
    padding-top: 5px;
    text-decoration: none;
}

.category ul
{
    padding: 0;
    margin: 0;
}
 .category li a.item-link {
    padding: 3px 10px;
    display: inline-block;
    width: calc(100% - 60px);
    color: black;
}

.category li .item-link:hover{
    color: #fff;
}

#exp
{
    border: 1px solid;
    border-color: var(--bd-purple);
}
#exp:hover
{
    background-color: var(--bd-purple);
    color: #fff;
}

.white-wrapper
{
    background-color: var(--bd-purple);
}

#bottom-frame 
{
    position: fixed;
    height: 30px;
    bottom: 0;
    width: 100%;
    left: 0;
    background-color: var(--bd-purple)  ;
}
a#back-to-top 
{

    position: fixed;
    right: 30px;
    bottom: 30px;
    background: var(--bd-purple);
    padding: 10px 20px;
    opacity: 2;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -ms-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    color: #fff;
}

a#back-to-top.show 
{
    opacity: 1;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -ms-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out
}


#footer-widgets 
{
    border-top: 1px solid #333;
}

footer.white-wrapper 
{
    padding: 60px 0;
    clear: both;
}

footer.white-wrapper *, footer.white-wrapper a {
    color: #fff;
}

footer.white-wrapper span.copyright {
    letter-spacing: 1px;
    text-transform: uppercase;
    text-transform: none;
    line-height: 40px;
    padding: 15px 10px;
    display: block;
    font-size: 14px;
}

footer.white-wrapper .social-links i {
    padding: 15px 30px;
}

footer.white-wrapper .social-links i a {
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 26px;
}


.section-1-box .section-1-box-icon 
{
    width: 80px;
    height: 80px;
    margin: 0 auto;
    border: 1px solid --bd-violet;
    font-size: 40px;
    color: var(--bd-purple);
    line-height: 78px;
    text-align: center;
    border-radius: 50%;
}
.title-w
{
    color: var(--bd-purple)
}

.section-1 h2
{
    font-size: 3rem;
    color: var(--bd-violet);
}

.dwd1
{
    position: relative;
	height: 50vh;
    background-color: var(--bd-purple);
}

.Contacts
{
    position: relative;
	height: 70vh;
	margin-top: 50px;
}
.section-2-box
{
    margin-top: 50px;
}

.section-6-container
{
    height: 60vh;
}
.section-6-container
{
    margin-top: 5rem;
}

.section-6-form
{
    padding: 10px 5px;
}

.btn-customized{
    background-color: var(--bd-violet);
    border: 1px solid --bd-violet;
    color: #fff;
}

.section-6-social
{
    color: var(--bd-purple);
}
.main
{
    margin-top: 6rem;
}
.img-main
{
    margin-top: 4rem;
}

</style>

<body>
    
	<nav class="navbar fixed-top nb navbar-expand-lg ">
		<div class="container header-inner">
		  <a class="navbar-brand text-white" href="#">{{$title_head}}</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active text-white" aria-current="page" href="/index">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/login">Login</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
			  <header class="showcase">
				<div class="container">
						<div class="row">
						  <div class="col main" style="margin-bottom: 70px;">
							<h1>{{$title_head}}</h1>
                        </br>  </br>	<h2>This is you Virtual Libray.
                            Where you can borrow books and gadgets and other school materials for your learnings.</h2>
                          </br>
                        </br> <a href="/login" class="btn btn-outline">Sign in</a>
						  </div>
						  <div class="col img-main">
							<img src="{{url('/storage/bg.png')}}" class="rounded float-end" alt="..." style="width: 70%; margin-bottom: 50px; margin-right: 100px;">
						  </div>
						</div>
				</div>
			  </header>
			  
			  <section class="dwd">
				<div class="container">
					<div class="row">
						<div class="col section-1 section-description wow fadeIn">
							<h2 class="text-center">Want to know more?</h2>
							<div class="divider-1 wow fadeInUp"><span></span></div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-4 section-1-box wow fadeInUp">
							<div class="row">
								<div class="col-md-4">
									<div class="section-1-box-icon">
										<i class="fas fa-magic"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h3 class="title-w">Branding</h3>
									<p>DevSys is a digital library, also called an online library, an internet library,a digital repository, or a digital collection is an online database of digital objects that can include text,
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 section-1-box wow fadeInDown">
							<div class="row">
								<div class="col-md-4">
									<div class="section-1-box-icon">
										<i class="fas fa-cog"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h3 class="title-w">Web design</h3>
									<p> still images, audio, video, digital documents, or other digital media formats or a library accessible through the internet.Many more and et.This is just a simple paragraph</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 section-1-box wow fadeInUp">
							<div class="row">
								<div class="col-md-4">
									<div class="section-1-box-icon">
										<i class="fab fa-twitter"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h3 class="title-w">Social media</h3>
									<p>The technology used to create digital libraries is even more revolutionary for archives since it breaks down the second and third of these general rules. In other words, "digital archives" or "online archives" will still generally contain primary sources.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>


			  <section class="dwd1" id="started">
				<div class="container">
					<div class="row">
						<div class="col-6 section-2-box wow fadeInLeft" style="color: #fff;">
							<h3>History</h3>
							<p class="medium-paragraph">
								The early history of digital libraries is not well documented, but several key thinkers are connected to the emergence of the concept. Predecessors include Paul Otlet and Henri La Fontaine's Mundaneum, an attempt begun in 1895 to gather and systematically catalogue the world's knowledge, with the hope of bringing about world peace. The visions of the digital library were largely realized a century later during the great expansion of the Internet, with access to the books and searching of the documents by millions of individuals on the World Wide Web.
							</p>
						</div>
						<div class="col-6 my-5">
							<img src="{{url('/storage/bg2.png')}}" class="rounded float-end" alt="..." style="width: 50%; margin-bottom: 100px; position: relative;  margin-right: 100px;">
						</div>
				</div>

			</section>			


			<div class="section-6-container section-container section-container-image-bg" id="section-6">
				<div class="container">
					<div class="row">
						<div class="">
							<div class="section-6-form">
								<div class="bg-light"><br>
									<center><iframe width="700" height="315"  src="https://www.youtube.com/embed/UCKqCmpP-EE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</center>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			  
				<footer class="footer white-wrapper mt-5">
					<div class="container-fluid">
						<div class="row text-center">
							<div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
								<span class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Designed by <a href="#">{{$title_head}}</a></span>
							</div>
							<div class="col-md-12">
								<div class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a> 
								  </div>
							</div>
						</div>
					</div>
				  </footer>

				  <div id="bottom-frame"></div>
			  
				  <a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i>

 
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



</body>
</html>