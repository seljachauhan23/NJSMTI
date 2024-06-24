<!doctype html>
<html lang="en">
  <head>
    <title>HOD's Message</title>
     @include('header') 
    <style>
        .image {
        display: inline-block;
        width: 20%;
        vertical-align: top;
        padding:40px;
        
    }
    .hh3{
      color:#000080;
      font-family:Algerian;
      margin-left:150px;
      padding:20px;
    }
    .dv{
      display:inline-block;
      width:50%;
      margin-left:80px;
    }
    .im{
      height: 500px;
      width:250%
    }
    .hh4{
      padding-left:0px; 
     color:black;
    font-weight:bold;   }
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
            <div style=" " class="dv">
                <h3 style="" class="hh3">HOD's Message</h3>
                <h4 class="hh4">Pradip L. Mehta</h4>
                
                <p style="color:#000080;font-family: serif;font-size: 16px;text-align: justify;
                text-justify: inter-word;">
                Management education, in the recent days context has to do much more than just importing management 
                knowledge. The outside world expects from any management post graduate beyond the syllabi and curricula 
                in the areas of ability to apply the theory into practical requirements, exhibit the qualities of smartness, 
                fast learning, ability to adopt changing work nature and so on. Mere exposure to the management and technologies 
                without personality development can result only in an inferior output. This Institute is equipped and committed 
                to provide through its various activities, ample opportunities to the students, to sharpen their talents and to hone
                 their skills. The experienced and committed faculties are fine-tuned to guide the students in preparing themselves 
                 for facing the outside world. Job markets are highly dynamic in nature due to continuously changing demands. 
                 Our students are seasoned to face this dynamism. It becomes highly interesting to work with the changing scenario, 
                 to evolve new strategies, to transform low profile students into successful managers and to set bench marks.

                <br><br>

                <span style="color:red;font-size:20px;font-family: Algerian">HOD</span> -MBA Department.<br>

                </p>
            </div>
            <div style=""class="image">
                <img style="  " class= "im"src="https://www.veravaleducationsociety.org/njsmti/img/about/hodmba.png" alt="">
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
            message.text = "hod of mba";

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