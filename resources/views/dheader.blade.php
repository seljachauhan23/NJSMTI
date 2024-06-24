<!doctype html>
<html lang="en">
  <head>
  <link href="{{ asset('css/dfsheader.css') }}" rel="stylesheet" type="text/css"> 
    <title>Director Header</title>
    <style>
       .p1 {
    display: inline-block;
    text-align: center;
    font-size: 23px;
    font-weight: bold;
    color: white;
    border: 3px solid #234F1E;
    border-radius: 10px;
    background: linear-gradient(160deg, #8fe27c, #339922);
    margin-left: 20%;
    margin-right: 30px;
    height: 50px;
    width: 50%;
}

.p1:hover {
    text-align: center;
    font-size: 23px;
    font-weight: bold;
    color: #0A6522;
    border: 3px solid #234F1E;
    border-radius: 10px 20px;
    background: white;
    margin-left: 20%;
    margin-right: 30px;
    height: 50px;
    width: 50%;
}

.btn3 {
    display: inline-block;
    background: linear-gradient(160deg, #FA8072, #FF2400);
    color: white;
    height: 50px;
    width: 10%;
    border: 3px solid #7C0A02;
    border-radius: 10px 20px;
    font-weight: bold;
}

.btn3:hover {
    background: white;
    color: red;
    height: 50px;
    width: 10%;
    border: 3px solid #7C0A02;
    border-radius: 10px 20px;
    font-weight: bold;
}

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
 
  <body> 
     
 @if(!isset($email) || !isset($role) || $role != "Director")

        <script> 
     window.location.href = "http://127.0.0.1:8000/login"; 
 </script>

  @endif
 

<div>
<div>
      <div class="div">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&s" style="margin-left: 8%; width: 150px; height: 150px;" alt="">
    <div>
        <h2>The Veraval Education Society Sanchalit</h2>
        <h3>NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE</h3>
        <h4>At. Chanduvav, Tal, Veraval, Dist. Gir Somnath (Gujrat)</h4>
    </div>
    </div>
     <div class="h1">Director Desk</div><br><br><br></div>
     <div style="display: inline-block; width: 100%;">
    <p style="display: inline-block;" class="p1">{{$email}} is Logged In </p>
    <a href="{{url('/dlogout')}}"><button type="button" class="btn3">LogOut</button></a>
</div>



     <div style="margin-left: 14%;margin-bottom: 10%;">
  <a href="{{url('/studentdata')}}">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/948/948256.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">Student Data</h3>
      </div>
    </div>
  </a>
  &nbsp;&nbsp;
  <a href="{{url('/allfacultydata')}}">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/9721/9721094.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">Faculty Data</h3>
      </div>
    </div>
  </a>
   &nbsp;&nbsp;
   <a href="{{url('/facultydata')}} ">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/1412/1412478.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">Faculty(req) Data</h3>
      </div>
    </div>
  </a><br><br><br>


  <a href="{{url('/querydata')}} ">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/9621/9621857.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">AllQuery</h3>
      </div>
    </div>
  </a>
  &nbsp;&nbsp;
  <a href="{{url('/reply')}} ">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/3889/3889281.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">ReplyToQuery</h3>
      </div>
    </div>
  </a>
   &nbsp;&nbsp;
   <a href="{{url('/contactdata')}} ">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/2593/2593646.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">ContactUs Data</h3>
      </div>
    </div>
  </a>
    <!-- <a href="{{url('/diarydata')}}">
    <div class="" style="border: 4px solid #000080; border-radius: 20px; width: 350px; height: 350px; display: inline-block;">
      <div class="round">
        <center>
          <div class="minround">
            <img src="https://cdn-icons-png.flaticon.com/128/828/828370.png" class="img2">
          </div>
        </center>
        <h3 style="text-align: center">Faculty Diary</h3>
      </div>
    </div>
  </a>  -->





        



  

  



    











   
</div>
      
           
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
  <script>
function Speech() {
    if ('speechSynthesis' in window) {
        // Wait for voices to be loaded
        window.speechSynthesis.onvoiceschanged = function() {
            // Create a new instance of the SpeechSynthesisUtterance object
            var message = new SpeechSynthesisUtterance();

            // Set the text to be spoken
            message.text = "Director Desk";

            // Set the voice to be used (optional)
            var voices = window.speechSynthesis.getVoices();

            // Find a male voice
            var maleVoice = voices.find(function(voice) {
                return voice.name.includes('Female');
            });

            // Set the male voice (if found), otherwise use the first available voice
            message.voice = maleVoice || voices[0];

            // Set other options (optional)
            message.volume = 1; // Range from 0 to 1
            message.rate = 1; // Range from 0.1 to 10
            message.pitch = 1; // Range from 0 to 2

            // Speak the text
            window.speechSynthesis.speak(message);
        };
    } else {
        console.log('Speech synthesis not supported');
    }
}

// Call Speech function when the page loads
Speech();
</script>
  
</html>