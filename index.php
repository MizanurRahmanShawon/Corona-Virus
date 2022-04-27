<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Virus</title>
    <?php include 'link/link.php'; ?>
    <?php include 'css/style.php'; ?>
    <?php include 'dbcon.php'; ?>
</head>
<body onload ="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#navbarSupportedContentid">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li> 
    </ul> 
  </div>
</nav>
  
<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
     <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
      <img src="new/world.png" width="200" height="200" > 
     </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Against Cor<spam class="corona_rot"><img src="new/v.png"width="70"height="70">
        </spam>na Virus</h1> 
      </div>
    </div>

  </div>

</div>

                  <!-- Corona Latest Updates --> 


      <section class="corona_update container-fluid" id="Homeid">
        <div class="mb-3">
          <h3 class="text-uppercase text-center "> Covid-19 Updates</h3>

        </div>
        <div class= "table-responsive">
          <table class=" table table-bordered table-striped text-center" id="tbval">
            <tr>
              <th>Country</th>
              <th>TotalConfirmed</th>
              <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewConfirmed</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
             
              </tr>
          </table>
          
        </div>
                

      </section>

                   <!-- About Section --> 

      <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
          <h1>About COVID-19</h1>
        </div>
               <div class="row pt-5">
                 <div class="col-lg-5 col-md-6 col-12 ml-5">  
                   <img src="new/shawon.png" class="img-fluid">
                  </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <h2>What is COVID-19(Corona Virus)</h2>
                      <p>COVID-19 is the in fectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in wuhan,China,in December 2019.</p>
                      <p>Corona viruses are a large family or viruses which may cause illness in animals or human.In humans, several coronaviruses common cold to more severe diseases such as middle east respiratory syndrome(MERS) and severe acute Respiratory syndrome.The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>

                    </div>
               </div>
      </div>

                 <!-- Corona-Virus Symptoms -->
       
  <div class="container-fluid pt-5 pb-5" id="sympid">
        <div class="section_header text-center mb-5 mt-4">
          <h1>CoronaVirus Symptoms</h1>
        </div>
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/cough.jpg" class="new-fluid" width="150" height="150">
            <figcaption> Cough</figcaption>
             </figure>
           </div>

           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/tired.png" class="new-fluid" width="150" height="150">
            <figcaption> Tried</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/cold.jpg" class="new-fluid" width="150" height="150">
            <figcaption> Cold</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/Fever.png" class="new-fluid" width="150" height="150">
            <figcaption>Fever</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/runny nose.jpg" class="new-fluid" width="150" height="150">
            <figcaption> Runny Nose</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="new/difficulty breathing.jpg" class="new-fluid" width="150" height="150">
            <figcaption> Difficulty Breathing</figcaption>
             </figure>
           </div>
           
         </div>

       </div>

</div>
         <!-- Prevention against CoronaVirus -->
       
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
        <div class="section_header text-center mb-5 mt-4">
          <h1> 6 Staps Prevention Against CoronaVirus</h1>
        </div>
     <div class="container">
     
     <div class="row">
       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/hand.jpg" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p>Wash your hands regularly for 20 seconds,with soap and water or alcohol-based hand rub.</p>
          </div>
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/mask.png" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p>
              Cover your nose and mouth with a disposable tissue or flexed elbow whene you cough or sneeze.
            </p>
          </div>
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/distance.png" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p> Avoid close contuct (1 meter or 3 feet) with people who are unwell.</p>
          </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/house.jpg" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p>Stay home and safe-isolate form others in the household if you feel unwell.</p>
          </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/tv.png" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p>Stay informed by watching newa & follow the recommended practices.</p>
          </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 mt-5"> 
           <div class="row"> 

          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
             <img src="new/man.jpg" class="new-fluid" width="90" height="90">
             </figure>
          </div>
          <div class=" col-lg8 col-md col-12">
            <p>if you have fever,cough and difficulty breathing seek medical care early.</p>
          </div>
           </div>
       </div>
     </div>

     </div>
  </div>
    <!-- Contact Us ASAP -->

  <div class="container-fluid text-center pt-5 pb-5" id="contactid">
  <h1>  Contact Us ASAP</h1>
        <div class="section_header text-left mb-5 mt-4">
          
          <div class="container">
           <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">

 
            <form action =" " method ="POST">

  <div class="form-group">
    <label class ="align">Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete = "off" required>
  </div>

  <div class="form-group">
    <label class ="align">Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete = "off" required>
  </div>

  <div class="form-group">
    <label class ="align">Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete = "off" required>
  </div>

 
  <div class="form-group">
    <label >Select Symptoms</label> <br>
    
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="coronasym[]" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breath</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="coronasym[]" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">Feeling Weak</label>
</div>
  </div>


  <div class="form-group">
    <label >Discripe how you are feeling</label>
    <textarea class="form-control" name ="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
  <button type="Submit" class="btn btn-primary" name="submit">Submit</button> 
    
  </div>
</form>
            </div>
           </div>
          </div>
        </div>



      <!-- Fotter -->
      
          <footer class="mt-5">
            <div class="footer_style text-gray text-center container-fluid">
              <p>Copyright by Mizanur Rahman Shawon <br>Department of CSE,VU</p>
            </div>
        </footer>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" > </script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>

<script src ="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"> </script>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "> </script>

<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>



        <script type ="text/javascript">

      $(".count").counterUp({
        delay: 10,
        time: 3000 
      });

      function fetch(){
        $.get("https://api.covid19api.com/summary",
        function (data){
        //  console.log(data ['Countries'].length);
          var tbval = document.getElementById('tbval');
          for(var i=1; i<(data ['Countries'].length);i++){

          var x = tbval.insertRow();

          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML= data['Countries'] [i-1]['Country'];

          tbval.rows[i].cells[0].style.background= '#7a4a91';
          tbval.rows[i].cells[0].style.color= '#ffff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML= data['Countries'] [i-1]['TotalConfirmed'];

          tbval.rows[i].cells[1].style.background= '#4bb7da';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML= data['Countries'] [i-1]['TotalRecovered'];

          tbval.rows[i].cells[2].style.background= '#4bb7da';


          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML= data['Countries'] [i-1]['TotalDeaths'];

          tbval.rows[i].cells[3].style.background= '#f36e23';


          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML= data['Countries'] [i-1]['NewConfirmed'];

          tbval.rows[i].cells[4].style.background= '#4bb7db';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML= data['Countries'] [i-1]['NewRecovered'];

          tbval.rows[i].cells[5].style.background= '#9cc850';

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML= data['Countries'] [i-1]['NewDeaths'];

          tbval.rows[i].cells[6].style.background= '#f36e23';
              


        }
        }
        );
      }

 </script>
</body>
</html>

<?php 

if (isset($_POST ['submit'])){
  $username = ($_POST ['username']);
  $email = ($_POST ['email']);
  $mobile = ($_POST ['mobile']);
  $symptoms = ($_POST ['coronasym']);
  $message = ($_POST ['message']);

  $chk= "";
  foreach($symptoms as $chk1){
    $chk .= $chk1.",";
  }
 

 $insertquery ="INSERT INTO `coronacase`(`username`, `email`, `mobile`, `symptoms`, `message`) VALUES ('[$username]','[$email]','[$mobile]','[$chk]','[$message]')";

 $query = mysqli_query($con, $insertquery);


  

}
?>