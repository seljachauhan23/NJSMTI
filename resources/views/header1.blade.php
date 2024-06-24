<!doctype html>
<html lang="en">
  <head>
  <title></title>
   
    <style>
       

        .img_banner{
            display : block;
            margin-left:auto;
            margin-right:auto;
            width: 50%;
            
            
            }

            .inline-container {
        display: flex;
        align-items: center;
    }

    .nav-tabs {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        color:blue;
    }
    

    .nav-item {
        margin-right: 20px;
       
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        
    }

    .nav-item:hover .dropdown-menu {
        display: block;
    }

           
        </style>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <center><img src="https://www.veravaleducationsociety.org/images/banner1.png" class="img_banner" alt=""></center><br>

    <div class="img_banner ">
    <!--<nav class="navbar bg-body-tertiary " >
  <div class="container-fluid">-->
    <form method="get">
      <center><input  type="search" placeholder="Search" style="height: 8%; width: 30%;" >
      <button class="btn btn-success" style="height: 8%; width: 9%;" type="submit">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-primary" style="height: 8%; width: 9%%;">LOGIN</button>&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-danger" style="height: 8%; width: 9%;">SIGNUP</button></center>

      
    </form>

        
    </div>
  </div>
</nav>
</div>

   
    <div class="inline-container">
    <span>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8WWBR8KWYgBMJ2uiEIFKl1vPgP82UHujWFwSMOQahA&s" style="margin-left: 50px; width: 100px" alt="">
    </span>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="{{URL('/')}}">NJSMTI</a></li>
        <li class="nav-item"><a href="{{URL('/about')}}">ABOUT US</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">INFRSTRUCTURE</a>
            <ul class="dropdown-menu">
                <li class="dropdown-item">
                    <a href="{{url('/classroom')}}">CLASSROOM</a></li>
                <li><hr class="dropdown-divider"></li>
                <li class="dropdown-item"><a href="{{url('/computerlab')}}">COMPUTER LAB</a></li>
                <li class="dropdown-item"><a href="{{url('/languagelab')}}">LANGUAGE LAB</a></li>
                <li class="dropdown-item"><a href="{{url('/library')}}">LIBRARY</a></li>
                <li class="dropdown-item"><a href="{{url('/auditoriumhall')}}">AUDITORIM HALL</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MBA</a>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a  href="{{url('/aboutprogramme')}}">ABOUT PROGRAM</a></li>
                <li class="dropdown-item"><a href="{{url('/directormessege')}}">DIRECTOR MESSAGE</a></li>
                <li class="dropdown-item"><a href="{{url('/hodmessege')}}">HOD'S MESSAGE</a></li>
                <li class="dropdown-item"><a href="{{url('/academic')}}">ACADEMIC</a></li>
                <li class="dropdown-item"><a href="{{url('/faculty')}}">FACULTY</a></li>
                <li class="dropdown-item"><a href="{{url('/alumni')}}">TOPPERS</a></li>
                <li class="dropdown-item"><a href="{{url('/expert')}}">EXPERT</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MCA</a>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="{{url('/aboutMCAprogramme')}}">ABOUT PROGRAM</a></li>
                <li class="dropdown-item"><a href="{{url('/directormessege')}}">DIRECTOR MESSAGE</a></li>
                <li class="dropdown-item"><a href="{{url('/MCAhodmessege')}}">HOD'S MESSAGE</a></li>
                <li class="dropdown-item"><a href="{{url('/MCAacademic')}}">ACADEMIC</a></li>
                <li class="dropdown-item"><a href="{{url('/MCAfaculty')}}">FACULTY</a></li>
                <li class="dropdown-item"><a href="{{url('/MCAalumni')}}">TOPPERS</a></li>
                <li class="dropdown-item"><a href="{{url('/MCAexpert')}}">EXPERT</a></li>
                <li class="dropdown-item"><a href="https://www.veravaleducationsociety.org/njsmti/img/MCAvideolectures.pdf">VIDEO LACTURES</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="{{url('/studentcorner')}}">STUDENTS CORNER</a></li>
        <li class="nav-item"><a href="{{url('/galaxy')}}">GALAXY</a></li>
        <li class="nav-item"><a href="{{url('/event')}}">EVENTS</a></li>
        <li class="nav-item"><a href="{{url('/press')}}">PRESS</a></li>
        <li class="nav-item"><a href="{{url('/contactus')}}">CONTACT US</a></li>
    </ul>

    
</div>


   
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


