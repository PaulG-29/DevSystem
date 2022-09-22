<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheat Sheet</title>
    <link rel="stylesheet" href="collabfolder/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="collabfolder/assets/css/all.min.css">
    <link rel="stylesheet" href="collabfolder/assets/css/style.css">
    <script src="https://kit.fontawesome.com/0b6f55e1d6.js" crossorigin="anonymous"></script>
</head>
	<style>
* {
  box-sizing: border-box;
}



/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row{
	padding-right: 35px;
	padding-left: 35px;
	margin-top: 5px;
	margin-left: 20px;
	margin right: 20px;
	background-color: #8B43B1;

}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 80%;
    display: block;
    margin-bottom: 20px;
	margin-right: 50px;
	margin-left: 50px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.video {
      padding-top: 50px;
      padding-right: 30px;
      padding-bottom: 50px;
      padding-left: 80px;
      margin-top: 5px;
	  margin-bottom: 5px;
    }
    
    body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 12px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: right;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

.content{
  background-color: ;
  padding 10px;
}
/* Content */

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.container img {vertical-align: middle;}

.container2 img {
  float: right;
}

.container3{
background-color:#8B43B1;
}

.footer{
  background-color: #8b43b1;
}



.column5 {
  float: left;
  width: 29%;
  height: 75%;
  margin-bottom: 16px;
  padding: 12px;
}

@media screen and (max-width: 650px) {
  .column5 {
    width: 50%;
    display: block;
  }
}

.card5 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  float: center;
  margin-left: 100px;
  
}

.container5 {
  padding: 16 16px;
  margin-left: 50px;
  margin-right: 50px;
  
}

.container5::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button5 {
  border: none;
  outline: 0;
  display: center;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button5:hover {
  background-color: #555;
}

</style>

<body>
<nav
      class="navbar navbar-expand-sm">

      <div class="container">
          <h4
            class="fw-bold font-color text-light d-inline-block align-text-top bg-transparent mt-5px">
           DevSys
</h4>
<div class="nav-container d-flex mb-2px p-2px">
				<nav-link class="button type">
				<a class="nav-link" href="./login.blade.php">Login</a>
	  </nav>
			  <header class="showcase">
				<div class="container">
						<div class="row">
						<div class="col img-main" >
							<img src="collabfolder/assets/img/library.png" class="float-end" alt="..." width="65%" height="auto">
						  </div>
						  <div class="col main">
						  </br></br><h2 class="text-start w-100 text-white"><strong>Need to borrow Something?</strong></h2>
               <h3 class="text-start w-100 text-white">Don't worry your virtual library is here!</h3>
						  </div>
						</div>
				     </div>
			     </header>
				 <br>
				 <div class="youtube-container">
			  <div class="video">
				<h3 class="text-dark text-center bold-text ">Just to give you an idea.</h3>
           <div class="bg-light"><br>
        <center><iframe width="700" height="315"  src="https://www.youtube.com/embed/UCKqCmpP-EE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
		</div>
		</div>
		<hr>
		</div>
		<!-- section3 -->

	<div class="row"><br><br>
	<center>
<h2 class="font text text-light">Want to know more?</h2>
<p class="font text text-light">Here you go.</p>
    </center>
  <div class="column">
    <div class="card">
      <p>DevSys is a digital library, also called an online library, an internet library,a digital repository, or a digital collection is an online database of digital objects that can include text,</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <p>  still images, audio, video, digital documents, or other digital media formats or a library accessible through the internet.Many more and et.This is just a simple paragraph</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p>The technology used to create digital libraries is even more revolutionary for archives since it breaks down the second and third of these general rules. In other words, "digital archives" or "online archives" will still generally contain primary sources.</p></div>
  </div>
    
  <div class="column">
    <div class="card">
      <p>
	  No physical boundary: The user of a digital library need not to go to the library physically; people from all over the world can gain access to the same information, as long as an Internet connection is available.
       Round the clock availability:</p>
    </div>
	<br><br><br>
        </div>
  </div>
</div>
<br><br><br>

<!-- Portfolio Gallery Grid -->

<div class="row bg-transparent">
  <div class="column bg-transparent ">
    <div class="content">
      <img src="data:image/jpeg;base64,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" alt="software" style="width:100%">
      <h3>Software</h3>
      <p>There are a number of software packages for use in general digital libraries.<br>Institutional repository software, which focuses primarily on ingest,<br> preservation and access of locally produced documents, particularly locally produced academic outputs.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="data:image/jpeg;base64,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" alt="metadata" style="width:100%"" alt="Lights" style="width:100%">
      <h3>Metadata</h3>
      <p>In traditional libraries, the ability to find works of interest is directly related to how well they were cataloged. While cataloging electronic works digitized from a library's existing holding may be as simple as copying or moving a record from, the print to the electronic form.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="data:image/jpeg;base64,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" alt="search" style="width:100%" alt="Nature" style="width:100%">
      <h3>Searching</h3>
      <p>Most digital libraries provide a search interface which allows resources to be found.Digital libraries frequently use the Open Archives Initiative Protocol for Metadata Harvesting (OAI-PMH) to expose their metadata to other digital libraries,and search engine</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwftMLgqeCtaVwgG5yBtLgE0xLX6eCHahOQtLwue1VDmuR6-uAdaO7Y764yKNTNbe0MF8&usqp=CAU" alt="Digiterm" style="width:100%" alt="Mountains" style="width:100%">
      <h3>Terminology</h3>
      <p>The term digital library was first popularized by the NSF/DARPA/NASA Digital Libraries Initiative in 1994.<br>
         With the availability of the computer networks the information resources are expected to stay distributed and accessed as needed</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<!-- END MAIN -->
<br><br> <br>
<div>
<div class="container2">
  <div class="container3"><br><br>
<h2 class="text-center text-white font-small">Let's Talk about  History.</h2><br><br>
<p class="font-text text-white font-small"><img src="https://media.istockphoto.com/photos/history-research-in-library-concept-old-book-magnifier-picture-id1400418177?b=1&k=20&m=1400418177&s=170667a&w=0&h=u-Gdhb86b2ZlbMeS5tuQECuKiJI-9B5u8Tx3Xa1DVzc=">
                           The early history of digital libraries is not well documented, but several key thinkers are connected to the emergence of the concept.[3] Predecessors include Paul Otlet and Henri La Fontaine's Mundaneum, an attempt begun in 1895 to gather and systematically catalogue the world's knowledge, with the hope of bringing about world peace.[4] The visions of the digital library were largely realized a century later during the great expansion of the Internet, with access to the books and searching of the documents by millions of individuals on the World Wide Web.[5]

Vannevar Bush and J.C.R. Licklider are two contributors that advanced this idea into then current technology. Bush had supported research that led to the bomb that was dropped on Hiroshima. After seeing the disaster, he wanted to create a machine that would show how technology can lead to understanding instead of destruction. This machine would include a desk with two screens, switches and buttons, and a keyboard.[6] He named this the "Memex". This way individuals would be able to access stored books and files at a rapid speed. In 1956, Ford Foundation funded Licklider to analyze how libraries could be improved with technology. Almost a decade later, his book entitled "Libraries of the Future" included his vision. He wanted to create a system that would use computers and networks so human knowledge would be accessible for human needs and feedback would be automatic for machine purposes. This system contained three components, the corpus of knowledge, the question, and the answer. Licklider called it a procognitive system.

Early projects centered on the creation of an electronic card catalogue known as Online Public Access Catalog (OPAC). By the 1980s, the success of these endeavors resulted in OPAC replacing the traditional card catalog in many academic, public and special libraries. This permitted libraries to undertake additional rewarding co-operative efforts to support resource sharing and expand access to library materials beyond an individual library</p>
        </div>
        </div><br><br>

  <h3 class="text-center text-dark text-bold">Meet The Team</h3>
<div class="row5">
  <div class="column5"><br><br><br>
    <div class="card5 float-center">
      <img src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t39.30808-6/304944663_1242573853205724_3346973997931927794_n.jpg?stp=cp6_dst-jpg&_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=kokFgAHgidkAX-Rw4nB&_nc_ht=scontent.fcrk1-1.fna&oh=00_AT8MORjy1Udaly19YKPj8sMPXxwwPe074gl5AzjP5Zwsbw&oe=633049C3" alt="Cj" style="width:75%">
        <strong><p class="text-bold  text-dark">Christine Joy Pablo</p>
        <p class="title text-bold  text-dark">Web Developer</p>
        <p class="title text-bold  text-dark">CEO of ISCP</p>
        <p class="title text-bold text-dark">enitsirchyojpablo@gmail.com</p>
        <p class="title text-bold  text-dark"><button5 class="button">Contact: +63 9215263295</button></p></strong>
      </div>
    </div>
  </div>

  <div class="column5"><br><br><br>
    <div class="card5 float-center">
      <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t1.6435-9/149685172_10214741155681886_5156988059180962004_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=174925&_nc_ohc=3rSfmW7uaZ4AX93Ew9a&_nc_ht=scontent.fcrk1-3.fna&oh=00_AT_AruRj_z1yZRr_qitsK6B1CSocEQc-Exs3O7yYUrtjtg&oe=63521B3D" alt="Paul" style="width:75%"></center>
      <div class="container">
        <strong><p class="text-bold  text-dark">Paul Gilbuena</p>
        <p class="title text-bold  text-dark">Full-Stack Web Developer</p>
        <p class="title text-bold  text-dark">CEO of ISCP-Biringan Campus</p>
        <p class="title text-bold text-dark">"paulgilbuena1@gmail.com</p>
        <p class="title text-bold  text-dark"><button5 class="button">Contact: +63 9213456789</button></p></strong>
      </div>
    </div>
  </div>


  <div class="column5"><br><br><br>
    <div class="card5 float-center">
      <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t39.30808-6/249215647_1042503943212717_5422633567973827937_n.jpg?stp=c0.23.206.206a_dst-jpg_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=da31f3&_nc_ohc=odYwXhecT5IAX9SA7W_&_nc_ht=scontent.fcrk1-4.fna&oh=00_AT_Kz-qzbe0uLd7oj4hRwjWpcxxPuKloiiePkq1xxubshw&oe=63316B60" alt="Taki" style="width:75%"><div class="container">
        <strong><p class="text-bold  text-dark">Taki Ocampo</p>
        <p class="title text-bold  text-dark">Nocturnal Shitzhu</p>
        <p class="title text-bold  text-dark">CEO of Itikan ng Neigbhorhood</p>
        <p class="title text-bold text-dark">"attaki@gmail.com</p>
        <p class="title text-bold  text-dark"><button5 class="button">Contact: +63 9213456770</button></p></strong>
      </div>
    </div>
      </div>
        </div>
           </div>
           <br><br>

           <div>
<!--Footer-->
   

  <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"
      ></script>
  </body>
</html>