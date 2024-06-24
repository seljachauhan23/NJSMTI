<!doctype html>
<html lang="en">
  <head>
    <style>
        .dv{
            background:url('{{asset('img/ab.jpeg')}}');
            height:200px;
            width:100%;
        }
        .im{
            height: 400px;
            width: 500px;
            border:3px solid white;
            border-radius:20px;
            
        }
        h1{
            padding:50px;
            font-family:Algerian;
            color:white;
        }
        .dv1{
            display: inline-box;
            margin-left:220px;
            padding:23px;
        }
        .dv2{
            font-family:Castellar;
            color:#000080;
            padding: 23px;
        }
        
        </style>
    <title>Eacho-Friendaly Campus</title>
    @include('header')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <div class="dv">
           <center> <h1 style="" >Echo friendly campus</h1></center>
        </div><br>
        <div>
            <h3 style="font-family:Castellar;color:#000080"><b>Echo-Friendly Campus</b></h1>
        </div>
        <div style=" background:linear-gradient(to bottom,#000080,#63C5DA);display: inline-box; margin-left:20px; margin-right:20px;border-radius:20px;">
            <div style="" class="dv1">
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/gr11.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/gr5.jpg" alt=""><br><br>
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/gr3.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/gr4.jpg" alt="">
            </div>
        </div>

        <div>
            <h3 style="" class="dv2"><b>Free Enviorment for Students</b></h1>
        </div>
        <div style=" background:linear-gradient(to bottom,#000080,#63C5DA);display: inline-box; margin-left:20px; margin-right:20px;border-radius:20px;">
            <div style="" class="dv1">
                <img class="im" src="https://lh3.googleusercontent.com/p/AF1QipO9v3OYRVPPNhiHA9Ut7k5i-0T1Qu20TMvmqUvM=s1360-w1360-h1020" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/gr_photo.jpg" alt=""><br><br>
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/gr8.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/gr9.jpg" alt="">
            </div>
        </div>


    </div><br>
      
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
            message.text = "campus view";

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