<!doctype html>
<html lang="en">
  <head>
    <title>Register Online</title>
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
    height: 1500px;
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
    height: 1400px;
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        @if(isset($error))
           <h4 style="color:red;">{{$error}}</h4>
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
    @if(isset($SM))
        <h3>{{$SM}}</h3>
    @endif
     <div class="h1">Register Online</div>
    <div class="dvv">
        <div class="dvv1">
        <center>
            <img style="height:100px;width:100px;padding-top:10px;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniG88UOON7ppH4lGOmR_2rM4-6jbihgTRfw&usqp=CAU" alt="">
        </center>
        
        <form action="" method="post">
            @csrf
        
            <p style="padding-top:10px; ">Personal Details</p>
                
                <input type="text" class="input" name="name" value="{{old('name')}}" placeholder="Enter Your Full Name(FML)">
                <span class="text-danger">
                  @error('name')
                         {{" Enter Name "}}
                 @enderror
                 </span><br><br>

                
                <input type="textarea" name="adr" class="input" value="{{old('adr')}}" placeholder="Enter Your Full Permenent Address">
                <span class="text-danger">
                @error('adr')
                         {{" Enter Your Address "}}
                 @enderror
                 </span><br><br>

                
                <input type="number" name="sph" class="input" value="{{old('sph')}}" placeholder="Enter Your Mobile Number"> 
                <span class="text-danger">
                @error('sph')
                         {{"Enter Your Phone Number In 10  Degits"}}
                 @enderror
                 </span><br><br>
                
                <input type="number" name="pph" value="{{old('pph')}}" class="input" placeholder="Enter Your Parents Mobile Number">
                <span class="text-danger">
                @error('pph')
                         {{"Enter Your Parents Phone Number In 10 Degits "}}
                 @enderror</span><br><br>

                
                <input type="email" name="email" class="input" value="{{old('email')}}" placeholder="Enter Your E-Mail">
                <span class="text-danger">
                @error('email')
                         {{"Enter Your Email"}}
                 @enderror</span><br><br>

               
                <input type="date" value="{{old('dob')}}" name="dob" class="input" placeholder="Select Your Date Of Birth">
                <span class="text-danger">
                @error('dob')
                         {{"Enter Your Birth Date"}}
                 @enderror</span><br><br>
                
                <input type="text" name="bp" value="{{old('bp')}}" class="input" placeholder="Enter Your Birth Place">
                <span class="text-danger">
                @error('bp')
                         {{"Enter Your Birth Place"}}
                 @enderror</span><br><br>

                
                <select name="category" value="" class="input"  required>
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
                 @enderror</span><br><br>

                <label style="margin-left:25%;font-size: 20px;font-weight: bold;">Gender :</label>
                <input type="radio" name="gender" placeholder="" value="Male"><label style="font-size: 20px;font-weight: bold; ">Male</label>
                <input type="radio" name="gender" placeholder="" value="Female"><label style="font-size: 20px;font-weight: bold; ">Female</label>
                <input type="radio" name="gender" placeholder="" value="Other"><label style="font-size: 20px;font-weight: bold; ">Other</label>
                <span class="text-danger">
                @error('gender')
                         {{"Enter Your Gender"}}
                 @enderror</span><br><br>

                
                <input type="text" name="nationality" class="input" placeholder="Enter Your Nationality" value="{{old('nationality')}}">
                <span class="text-danger">
                 @error('nationality')
                         {{"Enter Your Nationality"}}
                 @enderror</span><br><br>
                
                 <p style="padding-top:10px; ">Graducation Details</p>
                        
                       <input type="text" name="course" placeholder="Enter Your Education Qualification" class="input" value="{{old('course')}}">
                       <span class="text-danger">
                       @error('course')
                         {{"Enter Your Graducation Course "}}
                 @enderror</span><br><br>

                 
                <input type="textfield" name="clg" placeholder="Enter Your Graducation College" class="input" value="{{old('clg')}}">
                <span class="text-danger">
                @error('clg')
                         {{"Enter Your Graducation College"}}
                 @enderror</span><br><br>
                
                <input type="number" name="cgpa" placeholder="Enter Your cgpa" class="input" value="{{old('cgpa')}}" step="0.01" min="0" max="10">
                <span class="text-danger">
                @error('cgpa')
                         {{"Enter Your cgpa "}}
                 @enderror</span><br><br>

                 <select name="class" value="" class="input"  required>
                <option value="" disabled selected>Select Course</option>
                    <option value="MCA" selected>MCA </option>
                    <option value="MBA">MBA</option>
                    
                </select>
                <br><br>

                 <select name="sem" value="" class="input"  required>
                <option value="" disabled selected>Select Semester</option>
                    <option value="MCA SEM 1">MCA SEM 1</option>
                    <option value="MCA SEM 2">MCA SEM 2</option>
                    <option value="MCA SEM 3">MCA SEM 3</option>
                    <option value="MCA SEM 4">MCA SEM 4</option>
                    <option value="MBA SEM 1">MBA SEM 1</option>
                    <option value="MBA SEM 2">MBA SEM 2</option>
                    <option value="MBA SEM 3">MBA SEM 3</option>
                    <option value="MBA SEM 4">MBA SEM 4</option>
                </select>
                <br><br>

                 <!-- <input type="text" class="input" name="apply" placeholder="Enter Your Course For Apply" value="{{old('course')}}">
                        <span class="text-danger">
                        @error('course')
                         {{"Enter Your Course For Apply"}}
                        @enderror
                        </span><br><br> -->

                
                <input type="password" name="pwd" class="input" placeholder="Enter Your Password">
                <span class="text-danger">
                @error('pwd')
                         {{"Enter Your Password"}}
                 @enderror</span> <br><br>

                <input class="btn1"type="submit" name="submit" value="Register">



                
        </form>
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
            message.text = "Student addmission";

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