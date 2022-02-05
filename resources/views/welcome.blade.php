<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- full page js lib css-->
    <link href="disc/css/fullpage.min.css" rel="stylesheet">


    <style>

*{
    margin:0;
    padding:0;
    /* box-sizing: border-box; */
}
body{
    padding:0 !important;
    margin:0 !important;
    background: url('disc/img/Background-1.svg');
    background-size:cover;
    background-repeat: no-repeat;
}
a{
    text-decoration: none;
}
h1{
    color:#fff;
    font-size:3em;
	position:relative;
	top:-1em;
	margin-bottom:0em;
}





.my-card{
    border-radius: 0.5em;
    border:0.1em solid #3795fc;
    transition: all ease 0.5s;
    min-height: 20vh;
    display: grid;
    place-items: center;
    background-image: url('disc/img/Background-card.svg');
    background-repeat: no-repeat;
    background-size:auto;
}

.my-card h5{
    text-transform: uppercase;
}
.my-card a{
    color: #000;
}

.my-card:hover{
    border-radius: 1em;
    border:0.1em solid #ec37fc;
}
.my-card a:hover{
    color: #3795fc;
}


.footer{
	position:absolute;
	bottom:0em;
	left:0em;
	min-height:30px;
	text-align:center;
}
.footer a{
	color:red;
}


@media (max-width:909px){
    h1{
        color:#000;
        font-size:2em;
    }
    .my-card{
        min-height: 4vh;
    }
    .my-card h5{
        font-size:0.6em;
    }
    .row{
        padding:0em;
    }
}

    </style>
    
  
    <title>Dashboard</title>
  </head>
  <body>


    <div class="container-fluid" id="outer">


        <div class="row section main-row">
            <div class="col-sm-12 sec-main">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="disc/img/logo1.png" style="height:15em;">
                        </div>
                    </div>
    


                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">Who You Are...?</h1>
                    </div>
                </div>



            



              <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                      <div class="row">

                        <div class="col-sm-4">
                            <div class="card my-card">
                                <a href="/superadmin">
                               <div class="card-body text-center">
                                  <h5 class="card-title">Super Admin</h5>
                                </div>
                                </a>
                            </div>
                      </div>
    
                      <div class="col-sm-4">
                        <div class="card my-card">
                            <a href="#">
                            <div class="card-body text-center">
                               <h5 class="card-title">Admin</h5>
                             </div>
                             </a>
                         </div>
                      </div>
                      
                      <div class="col-sm-4">
                        <div class="card my-card">
                            <a href="{{url('/supervisor/login/101')}}">
                            <div class="card-body text-center">
                               <h5 class="card-title">Stock Manager</h5>
                             </div>
                             </a>
                         </div>
                      </div>

                      </div>
                  </div>
                  <div class="col-sm-1"></div>


              </div>

              <div class="row pt-1">

                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card my-card">
                                <a href="{{url('/recptionist/login/102')}}">
                               <div class="card-body text-center">
                                  <h5 class="card-title">Recptionist</h5>
                                </div>
                                </a>
                            </div>
                      </div>
    
                      <div class="col-sm-4">
                        <div class="card my-card">
                            <a href="#">
                            <div class="card-body text-center">
                               <h5 class="card-title">title</h5>
                             </div>
                             </a>
                         </div>
                      </div>
                      
                      <div class="col-sm-4">
                        <div class="card my-card">
                            <a href="#">
                            <div class="card-body text-center">
                               <h5 class="card-title">title</h5>
                             </div>
                             </a>
                         </div>
                      </div>

                    </div>
                </div>
                <div class="col-sm-1"></div>

              </div>

             
			 
			 <div class="row">
				<div class="col-sm-12 footer p-0">
					<p>© Copyright 2021 Designed & Developed By <a href="https://softproindia.in" target="_black">Softpro India Computer Technologies (P) Ltd.</a></p>
				</div>
			 </div>




            </div>
            </div>
        </div>



        <!-- end outer -->
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- full page js lib javascript start -->
    <script src="disc/js/fullpage.min.js"></script>
   
   <script>
        new fullpage('#outer', {
	//options here
	autoScrolling:true,
	scrollHorizontally: true
    });
    </script>

    <!-- full page js lib javascript end -->

  </body>
</html>