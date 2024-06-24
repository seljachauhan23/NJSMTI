<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\contact;
use App\Models\diary;
use App\Models\dirlogin;
use App\Models\faclogin;
use App\Models\faculty;
use App\Models\login;
use App\Models\query;
use App\Models\replyquery;
use App\Models\allfaculty;
use App\Models\director;
use App\Models\material;
use Illuminate\Support\Facades\Session;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class Njsmti extends Controller{

    public function dashboard(){
        return view('home');
    }

    public function about(){
        return view('aboutus');
    }
    //echo-friendly campus
    public function efc(){
        return view('efc');
    }
    public function gb(){
        return view('gb');
    }

    public function classroom(){
        return view('classroom');
    }

    public function computerlab(){
        return view('computerlab');
    }

    public function languagelab(){
        return view('languagelab');
    }

    public function library(){
        return view('library');
    }

    public function auditoriumhall(){
        return view('auditoriumhall');
    }

    public function aboutprogramme(){
        return view('aboutprogramme');
    }

    public function dm(){
        return view('dm');
    }

    public function hod(){
        return view('hod');
    }

    public function academic(){
        return view('academic');
    }

    public function faculty(){
        return view('faculty');
    }

    public function alumni(){
        return view('Alumni');
    }

    public function expert(){
        return view('expert');
    }

    public function aboutprogramme1(){
        return view('aboutprogramme1');
    }

    public function hod1(){
        return view('hod1');
    }

    public function academic1(){
        return view('academic1');
    }

    public function faculty1(){
        return view('faculty1');
    }

    public function alumni1(){
        return view('Alumni1');
    }

    public function expert1(){
        return view('expert1');
    }

    public function studentcorn(){
        return view('studentcorn');
    }

    public function commity(){
        return view('commity');
    }

    public function event(){
        return view('event');
    }

    public function galaxy(){
        return view('galaxy');
    }

    public function press(){
        return view('press');
    }

    public function contactus(){
        return view('contactus');
    }

    public function contactus1(Request $request){

        $request->validate(
            [
                    'name'=>'required',
                    'email'=>'required|email',
                    'ph'=>'required|min:10',
                    'msg'=>'required',
    
            ]
            );
        $contact= new contact;
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->mobile=$request['ph'];
        $contact->message=$request['msg'];
        if($contact->save()){
            $SM="Message Sent Successfully";
            return view('contactus')->with(compact('SM'));
        }
        
    }

    public function contact(){
        $data = contact::all();
      return view('display_contactus', compact('data'));
    }


    public function squery(){
        return view('squery');
    }

    public function squery1(Request $request) {

        $request->validate(
            [
                    'name'=>'required',
                    'email'=>'required|email',
                    
                    'ph'=>'required',
    
            ]
            );
        $query= new query;
        $query->name=$request['name'];
        $query->email=$request['email'];
        $query->query=$request['ph'];
        if($query->save()){
            $to=$request['email'];
            $subject="Regrading Your Query";
            $content=$to." ,your query is submitted successfully.";
           // mail($to,$subject,$contect);
           Mail::send(new SendMail($to, $subject, $content));
            $SM="Query Sent Successfully";
            return view('squery')->with(compact('SM'));

        }
      
    }

    public function query(){
        $query=query::all();
        $data=compact('query');
        return view('querydata')->with($data);
    }

    public function dheader(){
        return view('dheader');
    }

    public function reply($email){
        return view('reply')->with(compact('email'));
    }

    public function reply1(Request $request){

        $request->validate(
            [
                    
                    'email'=>'required|email',
                    
                    'ph'=>'required',
    
            ]
            );
        $reply= new replyquery;
        $reply->email=$request['email'];
        $reply->query=$request['ph'];
       
        if($reply->save()){
            $to=$request['email'];
            $subject="Regrading Your Query";
            $content=$to." ,Greeting from N.J.Soneca MNG & TECH Institute,Your Query Will Resolved Successfully.
                      Director-K.C Dwivedi.";
           // mail($to,$subject,$contect);
           Mail::send(new SendMail($to, $subject, $content));

           $resolved = query::where('email', $to)->first();
           $resolved->delete();
           return redirect('/querydata');

        }
    
      }

    public function replydata(){
        $reply=replyquery::all();
        $data=compact('reply');
        return view('replydata')->with($data);
    }

    public function fheader(){
        return view('fheader');
    }

    public function diary(){
        $email = Session('email');
        return view('diary')->with(compact('email'));
    }

   public function diary1(Request $request){
    $request->validate(
        [
                'name'=>'required',
                'email'=>'required|email',
                'date'=>'required',
                'msg'=>'required',

        ]
        );
        $diary= new diary;
        $diary->name=$request['name'];
        $diary->email=$request['email'];
        $diary->date=$request['date'];
        $diary->message=$request['msg'];
        if($diary->save()){
            $SM="Diary Written Successfully.";
            return view('diary')->with(compact('SM'));
        }
        
    }

    public function diarydata(){

        $diary=diary::where('email',session('email'))->get();
        if($diary)
        {
        $data=compact('diary');
        return view('diarydata')->with($data);
        }
    }


    public function index(){
        return view('sadmission');
    }

    public function store(Request $request){

        $request->validate(
            [
                    'name'=>'required',
                    'adr'=>'required',
                    'sph'=>'required|min:10',
                    'pph'=>'required|numeric|min:10',
                    'email'=>'required|email',
                    'dob'=>'required',
                    'bp'=>'required',
                    'category'=>'required',
                    'gender'=>'required',
                    'nationality'=>'required|string',
                    'pwd'=>'required|min:8',
                    'clg'=>'required',
                    'course'=>'required',
                    'cgpa'=>'required',

            ]
            );
            
        $student= new student;
        $student->name=$request['name'];
        $student->address=$request['adr'];
        $student->student_mobile=$request['sph'];
        $student->parent_mobile=$request['pph'];
        $student->email=$request['email'];
        $student->dob=$request['dob'];
        $student->birthplace=$request['bp'];
        $student->category=$request['category'];
        $student->gender=$request['gender'];
        $student->nationality=$request['nationality'];
        $student->college=$request['clg'];
        $student->course=$request['course'];
        $student->semester=$request['sem'];
        $student->class=$request['class'];
        $student->cgpa=$request['cgpa'];
        $student->password=$request['pwd'];
       if($student->save()) {
        
            $to=$request['email'];
            $subject="Regrading Your Admission";
            $content=$student->name." ,Greeting from N.J.Soneca MNG & TECH Institute,Your Admission Preocess Complete Successfully
                      for Other Process Please Contact The Institute With Student Documents.Congratulation
                      Director-K.C Dwivedi.";
           // mail($to,$subject,$content);

           Mail::send(new SendMail($to, $subject, $content));
           $SM="Your Register Successfully Check Your Mail.";
            return view('sadmission')->with(compact('SM'));
           
       }
       else{
                $error="Internal Server Error..";
                return view('sadmission')->with(compact('error'));
       }
        }

    public function studentdata(Request $request){

        $search=$request['search']??" ";
        if($search!= " "){
                $student=student::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->orwhere('course','LIKE',"%$search%")->get();
        }
        else{
            $student=student::all();
        }
        
        // echo "<pre>";
        // print_r($student);
        // die;

        $data=compact('student','search');
        return view('studentdata')->with($data);
    }

    public function mydata(){
        $mydata=student::where('email',session('email'))->get();
        $data=compact('mydata');
        return view('mydata')->with($data);
    }


    public function addfaculty(){
        return view('addfaculty');
    }

    public function facultydata(){
        $faculty=faculty::all();
        $data=compact('faculty');
        return view('facultydata')->with($data);
    }

    public function addfaculty1(Request $request){
         
        $request->validate(
            [
                    'name'=>'required',
                    'adr'=>'required',
                    'sph'=>'required|min:10',
                    'email'=>'required|email',
                    'dob'=>'required',
                    'bp'=>'required',
                    'category'=>'required',
                    'gender'=>'required',
                    'nationality'=>'required|string',
                    'pwd'=>'required|min:8',
                    'course'=>'required',
                    

            ]
            );
        $faculty= new faculty;
        $faculty->name=$request['name'];
        $faculty->address=$request['adr'];
        $faculty->mobile=$request['sph'];
        $faculty->email=$request['email'];
        $faculty->dob=$request['dob'];
        $faculty->birthplace=$request['bp'];
        $faculty->category=$request['category'];
        $faculty->gender=$request['gender'];
        $faculty->nationality=$request['nationality'];
        $faculty->course=$request['course'];
        $faculty->password=$request['pwd'];
        $faculty->otp=rand(100000, 999999);
        if($faculty->save()){
            $SM="Applied Successfully";
            return view('addfaculty')->with(compact('SM'));
        }
        
    }

    public function diraddfaculty(){
        return view('dir_add_faculty');
    }

    public function diraddfaculty1(Request $request){

        $request->validate(
            [
                    'name'=>'required',
                    'adr'=>'required',
                    'sph'=>'required|min:10',
                    'email'=>'required|email',
                    'dob'=>'required',
                    'bp'=>'required',
                    'category'=>'required',
                    'gender'=>'required',
                    'nationality'=>'required|string',
                    'pwd'=>'required|min:8',
                    'course'=>'required',
                    

            ]
            );
        $faculty= new allfaculty;
        $faculty->name=$request['name'];
        $faculty->address=$request['adr'];
        $faculty->mobile=$request['sph'];
        $faculty->email=$request['email'];
        $faculty->dob=$request['dob'];
        $faculty->birthplace=$request['bp'];
        $faculty->category=$request['category'];
        $faculty->gender=$request['gender'];
        $faculty->nationality=$request['nationality'];
        $faculty->course=$request['course'];
        $faculty->password=$request['pwd'];
        $faculty->otp=$request['otp'];
        if($faculty->save()){
            $SM="Add faculty Successfully";
            return view('dir_add_faculty')->with(compact('SM'));
        }
    }

    public function dirfacultydata(Request $request){

        
        $search=$request['search']??" ";
        if($search!= " "){
                $faculty=allfaculty::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->orwhere('course','LIKE',"%$search%")->get();
        }
        else{
            $faculty=allfaculty::all();
        }
       

        $data = compact('faculty', 'search');
         return view('allfacultydata')->with($data);
        
    }


    public function sdelete($email){
        $student = student::where('email', $email)->first();
        if ($student) {
            student::where('email', $email)->delete();
        }
        // studentdata();
          return redirect()->back(); //return redirect('/studentdata');
    }

    public function fdelete($email){
        $faculty = allfaculty::where('email', $email)->first();
        if ($faculty) {
            allfaculty::where('email', $email)->delete();
           
        }
        // studentdata();
          return redirect()->back(); //return redirect('/studentdata');
    }

    

    public function fdelete1($email){
        $faculty = faculty::where('email', $email)->first();
        $name=$faculty->name;
        //dd($faculty); // Debugging line to check if $faculty is retrieved correctly
        if ($faculty) {
            //faculty::where('email', $email)->delete();
            $to=$faculty->email;
            if($faculty->delete()){
                
                $subject="Regarding Your Job Application";
                $content=$name." ,We are Sorry to not hiring to you as a professior but if we require more staff we 
                         contact you first,Thank You. Director-K.C.Dwivedi";
               // mail($to,$subject,$contact);
               Mail::send(new SendMail($to, $subject, $content));
               return redirect()->back();
            }
        }
        // studentdata();
    }
       
    
    public function approv($email){
        $faculty = faculty::where('email', $email)->first();
        
        if ($faculty) {
        $pfaculty= new allfaculty;
        $pfaculty->name=$faculty->name;
        $pfaculty->address=$faculty->address;
        $pfaculty->mobile=$faculty->mobile;
        $pfaculty->email=$faculty->email;
        $pfaculty->dob=$faculty->dob;
        $pfaculty->birthplace=$faculty->birthplace;
        $pfaculty->category=$faculty->category;
        $pfaculty->gender=$faculty->gender;
        $pfaculty->nationality=$faculty->nationality;
        $pfaculty->course=$faculty->course;
        $pfaculty->password=$faculty->password;
        $pfaculty->otp=$faculty->otp;
        if($pfaculty->save()){
            $to=$faculty->email;
            $subject="Regarding Your Job Application";
            $content=$faculty->name." ,Greeting from N.J.Soneca MNG & TECH Institute,Congratulations to Being a Part of NJSMTI as a Assistance Proffessor
                         Please Joining into maximum 10 Days with your Documents if You not want to join then inform us.
                         Thank You.
                          Director-K.C.Dwivedi";
                // mail($to,$subject,$contact);
                $faculty->delete();
                Mail::send(new SendMail($to, $subject, $content));
            
        }
        // studentdata();
          return redirect('/facultydata'); //return redirect('/studentdata');
    }

}

        
            public function supdate(Request $request){

                $request->validate(
                    [
                            'name'=>'required',
                            'adr'=>'required',
                            'sph'=>'required|min:10',
                            'pph'=>'required|numeric|min:10',
                            'email'=>'required|email',
                            'dob'=>'required',
                            'bp'=>'required',
                            'category'=>'required',
                            'gender'=>'required',
                            'nationality'=>'required|string',
                            'pwd'=>'required|min:8',
                            'clg'=>'required',
                            'course'=>'required',
                            'cgpa'=>'required',
        
                    ]
                    );
                $student = student::where('email', $request->email)->first();
                    $student->name=$request['name'];
                    $student->address=$request['adr'];
                    $student->student_mobile=$request['sph'];
                    $student->parent_mobile=$request['pph'];
                    $student->email=$request['email'];
                    $student->dob=$request['dob'];
                    $student->birthplace=$request['bp'];
                    $student->category=$request['category'];
                    $student->gender=$request['gender'];
                    $student->nationality=$request['nationality'];
                    $student->cgpa=$request['cgpa'];
                    $student->course=$request['course'];
                    $student->semester = $request['semester'];

                    $student->password=$request['pwd'];
                    if($student->save()){
                        // $SM="Update Student Record Successfully.";
                        return redirect('/studentdata');
                    }

            
                    
            }

            public function fupdate(Request $request){
                    
                $request->validate(
                    [
                            'name'=>'required',
                            'adr'=>'required',
                            'sph'=>'required|min:10',
                            'email'=>'required|email',
                            'dob'=>'required',
                            'bp'=>'required',
                            'category'=>'required',
                            'gender'=>'required',
                            'nationality'=>'required|string',
                            'pwd'=>'required|min:8',
                            'course'=>'required',
                            
        
                    ]
                    );
                    $allfaculty = allfaculty::where('email', $request->email)->first();
                    $allfaculty->name=$request['name'];
                    $allfaculty->address=$request['adr'];
                    $allfaculty->mobile=$request['sph'];
                    $allfaculty->email=$request['email'];
                    $allfaculty->dob=$request['dob'];
                    $allfaculty->birthplace=$request['bp'];
                    $allfaculty->category=$request['category'];
                    $allfaculty->gender=$request['gender'];
                    $allfaculty->nationality=$request['nationality'];
                    $allfaculty->course=$request['course'];
                    $allfaculty->password=$request['pwd'];
                    $allfaculty->save();
            
                    return redirect('/allfacultydata');
        }
            

     public function login(){
        return view('login');

     }

     public function slogin(Request $request){
        $pwd=$request->pwd;
        $email=$request->email;
        $role=$request->role;
       
        if($role=="Director"){

            $dir=director::where('email',$email)->where('password',$pwd)->first();
            if($dir){
               Session(['email'=>$email]);
               Session(['pwd'=>$pwd]);
               Session(['role'=>$role]);
               
               return redirect('/dheader');

            }
            else{
                $fail="Please Enter  Valid Email And Password According Your Role.";
                return view('login')->with(compact('fail'));
            }
        }
        
        elseif($role=="Faculty"){
            $faculty=allfaculty::where('email',$email)->where('password',$pwd)->first();
            if($faculty){
               Session(['email'=>$email]);
               Session(['pwd'=>$pwd]);
               Session(['role'=>$role]);
               return redirect('/fheader');

            }
            else{
                $fail="Please Enter  Valid Email And Password According Your Role.";
                return view('login')->with(compact('fail'));
            }
        }
        else{
            $student=student::where('email',$email)->where('password',$pwd)->first();
            if($student){
               Session(['email'=>$email]);
               Session(['pwd'=>$pwd]);
               Session(['role'=>$role]);
               return redirect('/Sheader');

            }
            else{
                $fail="Please Enter  Valid Email And Password According Your Role.";
                return view('login')->with(compact('fail'));
            }
        }
        

     }

     public function sforgot_pwd(Request $request){
        
        $email=$request->email;
        $role=$request->role;
       
        if($role=="Director"){
            $dir=director::where('email', '=', $email)->first();
            if($dir){
               Session(['email'=>$email]);
               Session(['role'=>$role]);
               $to=$email;
               $otp=rand(100000,999999);
               $content= $email."Your Forgot Password OTP is :". $otp;
               $subject="forgot Password ";
              // mail($to,$subject,$content,$otp);
              Mail::send(new SendMail($to, $subject, $content));
               $dir->otp=$otp;
               $dir->save();


               
               return redirect('/varify');

            }
            else{
                $fail1="Please Enter  Valid Email According Your Role.";
                return view('login')->with(compact('fail1'));
            }


        }
        elseif($role == "Faculty"){
            $faculty=allfaculty::where('email', '=', $email)->first();
            if($faculty){
               Session(['email'=>$email]);
               Session(['role'=>$role]);
               $to=$email;
               $otp=rand(100000,999999);
               $content=$email." Your Forgot Password OTP is : ".$otp;
               $subject="forgot Password ";
              //mail($to,$subject,$content,$otp);
              Mail::send(new SendMail($to, $subject, $content));

               $faculty->otp=$otp;
               $faculty->save();


               
               return redirect('/varify');

            }
            else{
                $fail1="Please Enter  Valid Email According Your Role.";
                return view('login')->with(compact('fail1'));
            }
        }
        else{
            $student=student::where('email',$email)->first();
            if($student){
               Session(['email'=>$email]);
               Session(['role'=>$role]);
               $to=$email;
               $otp=rand(100000,999999);
               $content= $email."Your Forgot Password OTP is : ".$otp;
               $subject="forgot Password ";
              // mail($to,$subject,$content,$otp);

              Mail::send(new SendMail($to, $subject, $content));

               $student->otp=$otp;
               $student->save();


               
               return redirect('/varify');

            }
            else{
                $fail1="Please Enter  Valid Email According Your Role.";
                return view('login')->with(compact('fail1'));
            }
        }
        

     }

     public function svarify(Request $request){
        $email=Session('email');
        $role=Session('role');
        $otp=$request->otp;
        
       
        if($role=="Director"){
            $dir=director::where('email',$email)->where('otp',$otp)->first();
            if($dir){
         
            return redirect('/change_pwd');

            }
            else{
               $err="Enter Valid OTP";
                return view('varify')->with(compact('err'));
            }

        }
        elseif($role=="Faculty"){
            $faculty=allfaculty::where('email',$email)->where('otp',$otp)->first();
            if($faculty){
         
            return redirect('/change_pwd');

            }
            else{
               
                $err="Enter Valid OTP";
                return view('varify')->with(compact('err'));
            }
        
        }
        else{
                $student=student::where('email',$email)->where('otp',$otp)->first();
                if($student){
  
                return redirect('/change_pwd');
    
                }
                else{
                   
                    $err="Enter Valid OTP";
                return view('varify')->with(compact('err'));
                }
            
            } 
    }

    public function schange_pwd(Request $request){
        $request->validate(
            [
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password_confirmation',
            ]
            );
        
        $role=Session('role');
        $password = $request->password;
        if($role=="Director"){
            $dir = director::where('email', Session('email'))->first();

         
        $dir->password= $password;
        if($dir->save())
        {
            $to=Session('email');
            $subject="Update Password";
            $content=$to." , Your Password Changed Successfully.";
           // mail($to,$subject,$contect);
           Mail::send(new SendMail($to, $subject, $content));
            $s="Your Password Change Successfully.";
            return redirect('/login');
        }
    }
        elseif($role=="Faculty"){
        $faculty = allfaculty::where('email', Session('email'))->first();

        $faculty->password = $password;
        if($faculty->save())
        {
            $to=Session('email');
            $subject="Update Password";
            $content=$to." , Your Password Changed Successfully.";
           // mail($to,$subject,$contect);
           Mail::send(new SendMail($to, $subject, $content));
            $s="Your Password Change Successfully.";
            return redirect('/login');
       }
    }
    else{
        $student = student::where('email', Session('email'))->first();

        $student->password = $password;
        if($student->save())
        {
            $to=Session('email');
            $subject="Update Password";
            $content=$to." , Your Password Changed Successfully.";
           // mail($to,$subject,$contect);
           Mail::send(new SendMail($to, $subject, $content));
            $s="Your Password Change Successfully.";
            return redirect('/login');
       }
    }
}
     public function forgot_pwd(){
        return view('forgot_pwd');
    }

    public function varify(){
        return view('varify');
    }

    public function change_pwd(){
        return view('change_pwd');
    }

    public function syllabus(){
        return view('syllabus');
    }

    public function scholarship(){
        return view('scholarship');
    }

    public function flogout(){
        session()->forget('email');
        session()->forget('pwd');
        session()->forget('role');
        return redirect('/login');
    }

    //  public function dlogout(){
    // //     Session::flush();
    // //     return redirect('/login');
    //     session()->forget('email');
    //     session()->forget('pwd');
    //     session()->forget('role');
    //     return redirect('/login');
    //  }

    public function slogout(){
        session()->forget('email');
        session()->forget('pwd');
        session()->forget('role');
        return redirect('/login');
    }

   public function material(Request $request)
   {
    
        return view('study_meterial');
   }

   public function material_upload(Request $request)
   {
    $request->validate(
        [
                'semester'=>'required',
                'material_path'=>'required',

        ]);

        $material= new material;
        $material->semester=$request['semester'];
        $material->link=$request['material_path'];
        $material->topic=$request['topic'];
        if($material->save()){
            $m="Study Material Uploaded Successfully.";
        return view('study_meterial')->with(compact('m'));
        }
        
   }

    public function show_material()
    {
        $student=student::where('email',session('email'))->first();
        if(isset($student))
        {
            $material=material::where('semester',$student->semester)->get();
            $data=compact('material');
            return view('show_material')->with($data);
        }
        else{
            return view('show_material');
        }
       
        
    }

    public function just(){
        return view('just');
    }

    public function mail(){
        return view('mail');
    }
}