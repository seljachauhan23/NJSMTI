<!doctype html>
<html lang="en">
  <head>
    <title>My Data</title>
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
        form{
          margin-left: 20%;
        }
        .input{
          height: 50px;
          width: 50%;
        }</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  @if(!isset($email) || !isset($role) || $role != "Student")

<script> 
window.location.href = "http://127.0.0.1:8000/login"; 
</script>

@endif
  <div>
  <div class="div">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&s" style="margin-left: 8%; width: 150px; height: 150px;" alt="">
    <div>
        <h2>The Veraval Education Society Sanchalit</h2>
        <h3>NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE</h3>
        <h4>At. Chanduvav, Tal, Veraval, Dist. Gir Somnath (Gujrat)</h4>
    </div>
    </div>
     <div class="h1">My Profile</div><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Mobile Number(Student)</th>
                    <th>Mobile Number(Parent)</th>
                    <th>EMail ID</th>
                    <th>DOB</th>
                    <th>Birth Place</th>
                    <th>Category</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Password</th>
                    <th>Graducation Course</th>
                    <th>Graducation College</th>
                    <th>CGPA</th>
                    <th>Current Course</th>
                    <th>Semester</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($mydata as $mydata)
                <tr>
                    <td>{{$mydata->name}}</td>
                    <td>{{$mydata->address}}</td>
                    <td>{{$mydata->student_mobile}}</td>
                    <td>{{$mydata->parent_mobile}}</td>
                    <td>{{$mydata->email}}</td>
                    <td>{{$mydata->dob}}</td>
                    <td>{{$mydata->birthplace}}</td>
                    <td>{{$mydata->category}}</td>
                    <td>{{$mydata->gender}}</td>
                    <td>{{$mydata->nationality}}</td>
                    
                    <td>{{$mydata->password}}</td>
                    <td>{{$mydata->college}}</td>
                    <td>{{$mydata->course}}</td>
                    <td>{{$mydata->cgpa}}</td>
                    <td>{{$mydata->class}}</td>
                    <td>{{$mydata->semester}}</td>
                   
                    
                    
                    @endforeach
                </tr>
                
            </tbody>
        </table>
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
            message.text = "mydata";

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