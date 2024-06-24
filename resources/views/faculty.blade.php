<!doctype html>
<html lang="en">
  <head>
    <title>Faculty of MBA</title>
    @include('header')
    <style>
        .im{
    /* height:1000px;
    width:1000px; */
    width:300px;
    height:400px;
    border:3px solid #000080;
    border-radius:20px;
    
  }

  .im:hover{
    border:3px solid blue;
    transform: scale(1.2);
    
  }
  .hi{
    color:#000080;
    /* margin-left: 500px; */
    font-family: Algerian;

  }

  .hi:hover{
    color:#FCA510;
  }
  .dv{
      display:inline-block;
      margin-left: 16%;
  }
  
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <div style="display:inline-block;">
  
            <center> <h1 class=" hi" style="">Faculty Profile MBA</h1><br><br></center>
            <div style=" " class="dv">
                  <img class="im" style=" "
                        src="https://www.veravaleducationsociety.org/njsmti/img/team/teammember1.jpg" alt=""><br>
                  <center><p style="font-size:20px; font-family: serif"><b>Prof.(Dr.)K.C.Dwivedi<b></p>
                          <p style="font-size:15px; font-family: serif;color:gray;">Director-NJSMTI<br>M.Com, MBA, Ph.D. (Finance)<br>Exp. 19 Years</p>
                  </center>
                  <hr class="hr1">
            </div>

            <div style=" display:inline-block">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="im" style=" "
                      src="https://www.veravaleducationsociety.org/njsmti/img/team/teammember2.jpg" alt=""><br>
                <center><p style="font-size:20px; font-family: serif"><b>Mr.Pradip Maheta<b></p>
                        <p style="font-size:15px; font-family: serif;color:gray">HOD's MBA Department<br>MBA<br>Exp. 10 Years</p>
   
                </center>
                <hr class="hr1" style="margin-left:20px;">

            </div>

            <div style=" display:inline-block">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img class="im" style=""
                        src="https://www.veravaleducationsociety.org/njsmti/img/team/bharatsir.jpg" alt=""><br>
                  <center><p style="font-size:20px; font-family: serif"><b>Mr. Bharat Barad<b></p>
                          <p style="font-size:15px; font-family: serif;color:gray">Asst. Prof<br>MBA,NET<br>Exp. 12 Years</p>
  
                  </center>
                  <hr class="hr1" style="margin-left: 20px;">  
   
            </div>

            <div style=" " class="dv">
                <img class="im" style=""
                      src="https://www.veravaleducationsociety.org/njsmti/img/team/shitalmem.jpg" alt=""><br>
                <center><p style="font-size:20px; font-family: serif"><b>Miss. Shital Vadhavi<b></p>
                        <p style="font-size:15px; font-family: serif;color:gray;">Asst. Prof<br>MBA<br>Exp. 8 Years</p>
                </center>
                <hr class="hr1">
            </div>

            <div style=" display:inline-block">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="im" style=""
                      src="https://www.veravaleducationsociety.org/njsmti/img/team/dharamem.jpg" alt=""><br>
                <center><p style="font-size:20px; font-family: serif"><b>Miss. Dhara Abhani<b></p>
                        <p style="font-size:15px; font-family: serif;color:gray">Asst. Prof<br>MBA<br>Exp. 8 Years</p>
   
                </center>
                <hr class="hr1" style="margin-left:20px;">
            </div>

            <div style=" display:inline-block">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img class="im" style=""
                        src="https://www.veravaleducationsociety.org/njsmti/img/team/nidhimem.jpg" alt=""><br>
                  <center><p style="font-size:20px; font-family: serif"><b>Miss. Nidhi Popat<b></p>
                          <p style="font-size:15px; font-family: serif;color:gray">Asst. Prof<br>MBA,NET<br>Exp. 10 Years
                          </p>
  
                  </center>
                  <hr class="hr1" style="margin-left: 20px;">  
   
            </div>
        </div>
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
            message.text = "faculty of mba";

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
@include('footer')