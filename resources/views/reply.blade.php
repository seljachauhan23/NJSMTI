<!doctype html>
<html lang="en">
  <head>
    <title>ReplyToQuery</title>
  
    <style>
        .dv{
            background:linear-gradient(to left, #89CFF0, #0096FF);
            margin-left:300px;
            margin-right:300px;
            width:60%;
            height:700px;
            border-radius:20px;
        }
        .div {
     display: flex;
    align-items: center;
      }

        .div img {
        margin-right: 20px;
        margin-left: 20%;
        }


        .img {
        width: 100px;
        height: 150px;
        margin-left: 50px;
        }
      
        .h1{
        color: black;
        text-shadow: 2px 2px 4px rgba(100, 10,10 , 1000);
        text-align: center;
        padding-top: 15px;
        font-family: algerian;
        }
        h2{
        padding-left: 20%;
        color: blue;
        font-family: Cambria; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
        font-weight:bolder;
        }
       h3{
        font-familt: Perpetua;
        color: red;
        font-size:20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-weight: bold;
        }
        h4{
        padding-left: 20%;
        color: blue;
        font-family: Cambria; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
        font-weight:bolder;
        }
        .im{
          height:80px;
          width:90px;
        }
        .h3{
          color:#000080;
          font-family:Algerian;
          padding:100px;
        }
        .dv1{
          margin-left: 300px;
          padding:20px 0px 0px 0px;
        }
        .input{
          border-radius: 20px; 
          width: 260px; 
          height: 40px;
        }
        .btn1{
          border-radius: 20px; 
          width: 260px; 
          height: 60px;
          background:#000080;
          color:yellow;
          font-weight:bold;
          border:3px solid white;
        }
        .btn1:hover{
            border-radius: 20px; 
            width: 260px; 
            height: 60px;
            background:linear-gradient(to left,white , #89CFF0);
            color:#000080;
            font-weight:bold;
            border:3px solid #000080;
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
    @if(isset($SM))
           <h4 style="color:red;">{{$SM}}</h4>
        @endif
        <div class="div">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&s" style="margin-left: 8%; width: 150px; height: 150px;" alt="">
    <div>
        <h2>The Veraval Education Society Sanchalit</h2>
        <h3>NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE</h3>
        <h4>At. Chanduvav, Tal, Veraval, Dist. Gir Somnath (Gujrat)</h4>
    </div>
    </div>
     <div class="h1">Reply On Query</div><br><br>
     @if(isset($SM))
        <h4>{{$SM}}</h4>
    @endif
        <div class="dv" >
        <center>
                    <img style="" class="im"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf8-U3YJwjGVstUfFRN0agVNQe7nVRe_dtL-TTbq_hB5kTHPksbwoVd2TUJQdsUYD7T3k&usqp=CAU" alt="">
                </center>
           
        <center><h3 style="" class="h3">Reply To Student's Query</h3></center>
       
        <div style="" class="dv1">
            <form method="post" action="">
              @csrf
            
                <input style="margin-left: 29px;" type="email" name="email" placeholder="Enter the Student Email Whose Query" style="" class="input" required value="{{$email}}">
                <span class="text-danger">
                                 @error('email')
                                      {{"Enter Email"}}
                                   @enderror</span><br><br>
                <input style="margin-left: 29px;" type="text" placeholder="Enter the Query Reply" name="ph" style= " " class="input"  required value=" ">
                <span class="text-danger">
                                 @error('ph')
                                      {{"Enter the Query Reply"}}
                                   @enderror</span><br><br>
                    <input style="margin-left: 29px;" type="submit" name="btn" value="Resolved Query" style="" class="btn1"><br><br><br>
            </form>
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
            message.text = "reply on query";

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
