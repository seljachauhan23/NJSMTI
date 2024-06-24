<!doctype html>
<html lang="en">
<head>
    <title>Contact Data</title>

    <style>
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

        .h1 {
            color: black;
            text-shadow: 2px 2px 4px rgba(100, 10, 10, 1000);
            text-align: center;
            padding-top: 15px;
            font-family: algerian;
        }

        h2 {
            padding-left: 20%;
            color: blue;
            font-family: Cambria;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-weight: bolder;
        }

        h3 {
            font-family: Perpetua;
            color: red;
            font-size: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-weight: bold;
        }

        h4 {
            padding-left: 20%;
            color: blue;
            font-family: Cambria;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-weight: bolder;
        }

        form {
            margin-left: 20%;
        }

        .input {
            height: 50px;
            width: 50%;
        }
    </style>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous"/>
</head>
<body>
@if(!isset($email) || !isset($role) || $role !== "Director")
    <script>
        window.location.href = "http://127.0.0.1:8000/login";
    </script>
@endif
<!-- <div class="container"> -->
<div>
    <div class="div">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&amp;s"
             style="margin-left: 8%; width: 150px; height: 150px;" alt=""/>
        <div>
            <h2><b>The Veraval Education Society Sanchalit</h2>
            <h3><b>NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE</b></h3>
            <h4><b>At. Chanduvav, Tal, Veraval, Dist. Gir Somnath (Gujrat)</b></h4>
        </div>
    </div>
    <div class="h1">Contact Us Details</div>
    <br/>
    <br/>
</div>
@if(!isset($email) || !isset($role) || $role != "Director")

<script> 
window.location.href = "http://127.0.0.1:8000/login"; 
</script>

@endif
<div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Message</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->message }}</td>
            </tr>
        @endforeach
    </table>
</div>
<script>
function Speech() {
    if ('speechSynthesis' in window) {
        // Wait for voices to be loaded
        window.speechSynthesis.onvoiceschanged = function() {
            // Create a new instance of the SpeechSynthesisUtterance object
            var message = new SpeechSynthesisUtterance();

            // Set the text to be spoken
            message.text = "People Who Want to contact us";

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
</body>
</html>
