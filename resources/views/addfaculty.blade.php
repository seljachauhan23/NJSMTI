<!doctype html>
<html lang="en">
     <head>
        <title>Add faculty</title>
    <!-- <link href="{{ asset('css/addfaculty.css') }}" rel="stylesheet" type="text/css">   -->
    <!-- Required meta tags -->
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
       p{
        text-align: center;
        padding-bottom: 3%;
        font-size: 30px;
        font-family:algerian;
        color:#000080;
       
        margin-right:100px;
        
        
        }

        form{
        margin-left:10%;
        }
        .input{
                border-radius: 20px; 
                width: 40%; 
                height: 40px;
                margin-left:25%;
        }
        .dvv {
    background: linear-gradient(to left, #89CFF0, #0096FF);
    height: 1200px;
    width: 85%;
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 100px;
    margin-bottom: 100px;
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.dvv1 {
    background: white;
    height: 1110px;
    width: 75%;
    padding-right: 10px;
    border-radius: 20px;
    border: 3px solid #000080;

}
.btn1 {
    margin-left: 30%;
    border-radius: 20px;
    width: 260px;
    height: 60px;
    background: #000080;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border: 3px solid yellow;
}

.btn1:hover {
    margin-left: 30%;
    border-radius: 20px;
    width: 260px;
    height: 60px;
    background: white;
    color: #000080;
    font-weight: bold;
    font-size: 20px;
    border: 3px solid #000080;
}
span{
        font-weight: bold;
}



</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div>
    <div class="div">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&s" style="margin-left: 8%; width: 150px; height: 150px;" alt="">
    <div>
        <h2>The Veraval Education Society Sanchalit</h2>
        <h3>NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE</h3>
        <h4>At. Chanduvav, Tal, Veraval, Dist. Gir Somnath (Gujrat)</h4>
    </div>
    </div>
     <div class="h1">Apply Your Application</div>
     @if(isset($SM))
        <h3>{{$SM}}</h3>
    @endif
    <div class="dvv">
        <div class="dvv1">
        <center>
            <img style="height:100px;width:90px;"src="https://www.wbcareer.org/wp-content/uploads/2023/04/Apply-Now-New.jpg" alt="">
        </center>
        
        <form method="POST" action="">
          @csrf
          
          <p style=" ">Personal Details</p>
        
                
                        <input type="text" class="input" name="name" placeholder="Enter Your Full Name(FML)" value="{{old('name')}}">
                        <span class="text-danger">
                         @error('name')
                         {{" Enter Your Name "}}
                         @enderror
                        </span><br><br>

               
                        <input type="text" class="input" name="adr" placeholder="Enter Your Full Permenent Address" value="{{old('adr')}}">
                        <span class="text-danger">
                         @error('adr')
                        {{" Enter Your Address "}}
                        @enderror
                        </span><br><br>

               
                        <input type="digit" class="input" name="sph" placeholder="Enter Your Mobile Number" value="{{old('sph')}}">
                        <span class="text-danger">
                         @error('sph')
                        {{"Enter Your Phone Number In 10 Degits"}}
                        @enderror
                        </span><br><br>

                
                        <input type="email" class="input" name="email" placeholder="Enter Your E-Mail" value="{{old('email')}}">
                        <span class="text-danger">
                        @error('email')
                        {{"Enter Your Email"}}
                        @enderror
                        </span><br><br>

                
                        <input type="date" class="input" name="dob" placeholder="Select Your Date Of Birth" value="{{old('dob')}}">
                        <span class="text-danger">
                        @error('dob')
                        {{"Enter Your Birth Date"}}
                        @enderror
                        </span><br><br>

               
                        <input type="text" class="input" name="bp" placeholder="Enter Your Birth Place" value="{{old('bp')}}">
                        <span class="text-danger">
                         @error('bp')
                         {{"Enter Your Birth Place"}}
                        @enderror
                         </span><br><br>

                
                        <select class="input" name="category" required>
                                <option value="" disabled selected>Select Category</option>
                                <option value="sc">SC</option>
                                <option value="st">ST</option>
                                <option value="sebc">SEBC</option>
                                <option value="open">OPEN</option>
                                <option value="openebc">OPEN-EBC</option>
                        </select>
                         <span class="text-danger">
                        @error('category')
                        {{"Enter Your Category"}}
                        @enderror
                        </span><br><br>

                 <label style="margin-left:25%;font-size: 20px;font-weight: bold;">Gender :</label>
                        <input type="radio" name="gender" value="Male" ><label style="font-size: 20px;font-weight: bold; ">Male</label>
                        <input type="radio" name="gender" value="Female"><label style="font-size: 20px;font-weight: bold; ">Female</label>
                        <input type="radio" name="gender" value="Other"><label style="font-size: 20px;font-weight: bold; ">Other</label>
                        <span class="text-danger">
                         @error('gender')
                        {{"Enter Your Gender"}}
                        @enderror
                        </span><br><br>

              
                        <input type="text" class="input" name="nationality" placeholder="Enter Your Nationality" value="{{old('nationality')}}">
                        <span class="text-danger">
                         @error('nationality')
                        {{"Enter Your Nationality"}}
                        @enderror
                        </span><br><br>
                        <p style=" ">Education Details</p>
                
                        <input type="text" class="input" name="course" placeholder="Enter Your Education Qualification" value="{{old('course')}}">
                        <span class="text-danger">
                        @error('course')
                         {{"Enter Your Course"}}
                        @enderror
                        </span><br><br>

                        <input type="text" class="input" name="apply" placeholder="Enter Field To Apply" value="{{old('course')}}">
                        <span class="text-danger">
                        @error('course')
                         {{"Enter Your Course"}}
                        @enderror
                        </span><br><br>
        
            
                        <input type="password" class="input" name="pwd" placeholder="Set Your Password">
                        <span class="text-danger">
                        @error('pwd')
                        {{"Enter Your Password"}}
                        @enderror
                        </span><br><br>
        
                <input class="btn1" type="submit" name="submit" value="Apply">
       
        
        </form>
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
            message.text = "Add faculty";

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