<!doctype html>
<html lang="en">
  <head>
    <title>classroom</title>
    @include('header');
    <link href="{{ asset('css/class_com_lang_lib_aud.css') }}" rel="stylesheet" type="text/css"> 
    <style>
       .dv{
    background-image:url('img/ab.jpeg');
    height:200px;
    width:100%;
}

.im{
    height: 400px;
    width: 500px;
    border:3px solid white;
    border-radius:20px;
}
.div2{
    display: inline-box;
    margin-left:15%;
    padding:23px;
}
/*
 @media only screen and (max-width: 600px){
.im{
    height: 200px;
    width: 200px;
    border:3px solid white;
    border-radius:20px;
} 
.div2 {
        display: inline-box;
        margin-left: 10%;
        padding: 23px;
    }
} 





@media only screen and (min-width: 768px){
    .im {
    height: 200px;
    width: 200px;
    border: 3px solid white;
    border-radius: 20px;
}
.div2 {
    display: inline-box;
    margin-left: 15%;
    padding: 23px;
}

}




@media only screen and(min-width: 992px){
    .im {
    height: 300px;
    width: 300px;
    border: 3px solid white;
    border-radius: 20px;
}
.div2 {
    display: inline-box;
    margin-left: 20%;
    padding: 23px;
}

}

@media only screen and(min-width:1200px){
    .im {
    height: 300px;
    width: 400px;
    border: 3px solid white;
    border-radius: 20px;
}

} */

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
            <center> <h1 style=" " class="hh1">Classroom</h1></center>
        </div>
        <br>
        <div  class="div1">
            <h3 class="hh3"><b>Classrooms</b></h3>
            <p style=" ">The NJSMTI has modern Four Lecture Halls (Class Rooms) and two Tutorial Class Rooms with modern audio-visual equipments. 
                The total built up area of Lecture Halls / Class-rooms at NJSMTI is more than 1100 Sqm. All the class-room / 
                tutorial rooms are equipped with Audio-Visual System and CCTV Cameras with recording facilities.</p>
        </div>
        <div style=" background:linear-gradient(to bottom,#000080,#63C5DA);display: inline-box; margin-left:20px; margin-right:20px;border-radius:20px;">
            <div class="div2">
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/blog/Classroom1.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/blog/Classroom_2.jpg" alt=""><br><br>
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/blog/Classroom_3.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/blog/Classroom_4.jpg" alt="">
            </div>
        </div>
    </div><br><br>
      
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
            message.text = "classroom view";

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