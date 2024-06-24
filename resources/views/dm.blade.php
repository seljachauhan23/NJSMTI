<!doctype html>
<html lang="en">
  <head>
    <title>Director's Message</title>
    @include('header')
    <style>
        .image {
        display: inline-block;
        width: 19.5%;
        vertical-align: top;
        padding:40px;
    }
    .div1{
      display:inline-block;
      width:50%;
      margin-left:80px;
    }
    .hh3{
      color:#000080;
      font-family:Algerian;
      margin-left:200px;
      padding:20px;
    }
    .im{
      height: 600px;
      width:290%;
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
            <div style=" " class="div1">
                <h3 style="" class="hh3">Director's Message</h3>
                <h4>Prof.(Dr.)Krishna C. Dwivedi</h4>
                <span style="color: #000080;font-size: 18px;font-family: serif;"><b>(A Two Years Full Time Course of Gujarat Technological University & Approved by AICTE, NEW DELHI)</b></span>
                <p style="color:#000080;font-family: serif;font-size: 16px;text-align: justify;
                text-justify: inter-word;">
                It is my pleasure to welcome you to Narandas Jethalal Sonecha Management and Technical Institute (NJSMTI MBA and MCA). 
                The Indian corporate sector has been swept by a force of change led by remarkable growth and global integration. 
                This has led managers to adapt to the new environment by re-inventing their organizations and practices. 
                On the other side, the Indian education fraternity has struggled to respond to this demand of the corporate sector. 
                Thus time has arrived to create a new system of education. A system that is for today and educates not just for a degree, 
                but for a career and for life. NJSMTI has commenced its journey 10 years ago providing invaluable contribution to 
                the field of education and management learning. In entire Gujarat, NJSMTI enjoys strategic and financial autonomy that very
                few colleges have managed to achieve. Our main focus is quality education which is reflected in our unique course curriculum, 
                faculty development, research initiatives and design of programs. Our motto is to transform every student into leaders 
                in every area of life and identify their capabilities. At NJSMTI, students receive a solid grounding in all the functional 
                areas of business, and learn how to go beyond them to consider the big picture, approaching each challenge with creativity and a 
                willingness to take risks. It's a ground breaking approach that can help you shape your career, business and the world-for the better. 
                NJSMTI professional programs will prepare you to outsmart the competition, excel the fast paced global economy, solve problems creativity 
                and build consensus across diverse groups. I invite you to be a part of NJSMTI.<br>

                <span style="color:red"><b>Dirctor</b></span> - NJSMTI<br>

                MBA/MCA Department.</p>
            </div>
            <div style=""class="image">
                <img style="" class="im"src="https://www.veravaleducationsociety.org/njsmti/img/about/directorsir.png" alt="">
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
            message.text = "director message";

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