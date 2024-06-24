<!doctype html>
<html lang="en">
  <head>
    <title>library</title>
    @include('header')
    <link href="{{ asset('css/class_com_lang_lib_aud.css') }}" rel="stylesheet" type="text/css"> 
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
        .div2{
    display: inline-box;
    margin-left:15%;
    padding:23px;
}

 /* @media only screen and (max-width: 600px){
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
.div2 {
    display: inline-box;
    margin-left: 20%;
    padding: 23px;
}

} 
        */
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
            <center> <h1 style=" " class="hh1">Library</h1></center>
        </div>
        <br>
        <div style=" " class="div1">
            <h3 style=" " class="hh3"><b>Library</b></h1>
            <p style=" ">The NJSMTI library is spread in 139 Sq.M. area having a seating capacity for more than 100 students. 
        In addition to the Reading Facilities in Library Premises, the Institute has special Reading cubical rooms spread over in 80 Sq.M. for the serious reading. 
        The library supports the teaching and research programmes of the Institute. The NJSMTI Library growing rapidly and is expected to expand into an outstanding library within the next few years. 
        The NJSMTI library has huge collection of text books, reference books and books of general reading, journals, periodicals, multimedia facilities, Working Papers and Fieldwork reports. 
        In addition to this, the library is equipped with facilities such as Multimedia.</p><br>
        <p  style=" "class="p1"><b><ul><li>Books:</b>
            <span class="p2">Currently, NJSMTI library houses around 5,000 books; in the disciplines of Management (2200 +) , 
        Computer Applications (2400 +), Cooperation and others 200.</span></li></ul></p><br>

        <p class="p1"><b><ul><li>Journals :</b>
            <span class="p2">Currently, NJSMTI library houses 50 periodicals including professional journals, popular magazines, 
        4 newspapers and more than 100 multimedia CD/DVDs on various aspects of Management and Computer Science.
            </span> </li></ul></p><br>

        <p class="p1"><b><ul><li>Multimedia PCs :</b>
            <span class="p2">The Institute has installed 4 multimedia PCs in the Library for accessing of online journals and other reading available on various online resources.
         Electronic Material:The Institute has more than 100 CDs/DVDs and 50 Video Recordings on various subjects related to Management, Computer Applications.
        </span></li></ul></p><br>
        </div>
        <div style=" background:linear-gradient(to bottom,#000080,#63C5DA);display: inline-box; margin-left:20px; margin-right:20px;border-radius:20px;">
            <div style="display: inline-box;margin-left:15%;padding:23px;">
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/lib1.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/lib2.jpg" alt=""><br><br>
                <img class="im" src="https://www.veravaleducationsociety.org/njsmti/img/about/lib3.jpg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img  class="im"  src="https://www.veravaleducationsociety.org/njsmti/img/about/lib4.jpg" alt="">
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
            message.text = "library";

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