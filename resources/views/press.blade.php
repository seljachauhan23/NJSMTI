<!doctype html>
<html lang="en">
  <head>
    <title>Press</title>
    @include('header')
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
.hh1{
    padding:50px;
    font-family:Algerian;
    color:white;
}
.h{
    font-family:Castellar;
    color:#000080;
    margin-left:30px;
}
.dv1{
    background:linear-gradient(to bottom,#000080,#63C5DA);
    display: inline-box;
    border-radius:20px;
    margin-left:20px;
    margin-right:20px;
}
.dv2{
    display: inline-box;
    margin-left:150px;
    padding:5%;
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
        <div class="dv">
           <center> <h1 style="" class="hh1">Press</h1></center>
        </div><br>
        <div>
            <h3 style="" class="hh3"><b>Press Media Covrage
                </b></h3>
        </div>
        <div style=" " class="dv1">
            <div style="" class="dv2">
            <img class="im" src="{{asset('/img/p1.jpeg')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/press_pd1.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/press_pd2.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/press5.jpg" alt=""><br><br>
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/press7.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/press4.jpg" alt=""><br><br>
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/press6.jpg" alt="">
            </div>
        </div><br>
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
            message.text = "our press";

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