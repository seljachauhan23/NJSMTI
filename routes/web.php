 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Njsmti;
use App\Models\student;
use App\Models\contact;
use App\Models\diary;
use App\Models\dirlogin;
use App\Models\faclogin;
use App\Models\faculty;
use App\Models\login;
use App\Models\query;
use App\Models\replyquery;
use App\Models\director;
use App\Models\allfaculty;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Njsmti::class,'dashboard']);
Route::get('/about',[Njsmti::class,'about']);
Route::get('/efc',[Njsmti::class,'efc']);
Route::get('/gb',[Njsmti::class,'gb']);
Route::get('/classroom',[Njsmti::class,'classroom']);
Route::get('/computerlab',[Njsmti::class,'computerlab']);
Route::get('/languagelab',[Njsmti::class,'languagelab']);
Route::get('/library',[Njsmti::class,'library']);
Route::get('/auditoriumhall',[Njsmti::class,'auditoriumhall']);

Route::get('/aboutprogramme',[Njsmti::class,'aboutprogramme']);
Route::get('/directormessege',[Njsmti::class,'dm']);
Route::get('/hodmessege',[Njsmti::class,'hod']);
Route::get('/academic',[Njsmti::class,'academic']);
Route::get('/faculty',[Njsmti::class,'faculty']);
Route::get('/alumni',[Njsmti::class,'alumni']);
Route::get('/expert',[Njsmti::class,'expert']);

Route::get('/aboutMCAprogramme',[Njsmti::class,'aboutprogramme1']);
Route::get('/MCAhodmessege',[Njsmti::class,'hod1']);
Route::get('/MCAacademic',[Njsmti::class,'academic1']);
Route::get('/MCAfaculty',[Njsmti::class,'faculty1']);
Route::get('/MCAalumni',[Njsmti::class,'alumni1']);
Route::get('/MCAexpert',[Njsmti::class,'expert1']);

Route::get('/studentcorner',[Njsmti::class,'studentcorn']);
Route::get('/anti ragging commite',[Njsmti::class,'commity']);
Route::get('/event',[Njsmti::class,'event']);
Route::get('/galaxy',[Njsmti::class,'galaxy']);
Route::get('/press',[Njsmti::class,'press']);
Route::get('/contactus',[Njsmti::class,'contactus']);
Route::post('/contactus',[Njsmti::class,'contactus1']);

Route::get('/squery',[Njsmti::class,'squery']);
Route::post('/squery',[Njsmti::class,'squery1']);

Route::get('/dheader',[Njsmti::class,'dheader']);

Route::get('/reply/{email}',[Njsmti::class,'reply']);
Route::post('/reply/{email}',[Njsmti::class,'reply1']);
// Route::post('/reply',[Njsmti::class,'reply1']);

Route::get('/fheader',[Njsmti::class,'fheader']);
Route::get('/diary',[Njsmti::class,'diary']);
Route::post('/diary',[Njsmti::class,'diary1']);

Route::get('/sadmission',[Njsmti::class,'index']);
Route::post('/sadmission',[Njsmti::class,'store']);

// Route:: get('/stud',function(){
//     $stud=student::all();
//     echo "<pre>";
//     print_r($stud);
// });


Route::get('/addfaculty',[Njsmti::class,'addfaculty']);
Route::post('/addfaculty',[Njsmti::class,'addfaculty1']);
Route::get('/facultydata',[Njsmti::class,'facultydata']);

Route::get('/diraddfaculty',[Njsmti::class,'diraddfaculty']);
Route::post('/diraddfaculty',[Njsmti::class,'diraddfaculty1']);
Route::get('/allfacultydata',[Njsmti::class,'dirfacultydata']);

Route::get('/studentdata',[Njsmti::class,'studentdata']);

Route::get('/contactdata',[Njsmti::class,'contact']);

Route::get('/querydata',[Njsmti::class,'query']);

Route::get('/replydata',[Njsmti::class,'replydata']);

Route::get('/diarydata',[Njsmti::class,'diarydata']);

Route::get('/mydata',[Njsmti::class,'mydata']);

Route::get('/just',[Njsmti::class,'just']);

Route::get('/sdelete/{email}',[Njsmti::class,'sdelete']);

Route::get('/fdelete/{email}',[Njsmti::class,'fdelete']);
Route::get('/fdelete1/{email}',[Njsmti::class,'fdelete1']);

Route::get('/approv/{email}',[Njsmti::class,'approv']);

Route::get('/supdate/{email}', function( $email ){
    $student = student::where('email', $email)->first();
    $data = compact('email', 'student');
    return view('sedit')->with($data);
    });

Route::post('/sedit', [Njsmti::class, 'supdate']);

Route::get('/fupdate/{email}', function( $email ){
        $allfaculty = allfaculty::where('email', $email)->first();
        $data = compact('email', 'allfaculty');
        return view('fedit')->with($data);
        });
    
       
 Route::post('/fedit', [Njsmti::class, 'fupdate']);
    
Route::get('/login',[Njsmti::class,'login']);
Route::post('/login',[Njsmti::class,'slogin']);

Route::get('/forgot_pwd',[Njsmti::class,'forgot_pwd']);
Route::post('/forgot_pwd',[Njsmti::class,'sforgot_pwd']);

Route::get('/varify',[Njsmti::class,'varify']);
Route::post('/varify',[Njsmti::class,'svarify']);

Route::get('/change_pwd',[Njsmti::class,'change_pwd']);
Route::post('/change_pwd',[Njsmti::class,'schange_pwd']);


Route::get('/syllabus',[Njsmti::class,'syllabus']);

Route::get('/scholarship',[Njsmti::class,'scholarship']);

Route::get('/flogout',[Njsmti::class,'flogout']);

Route::get('/material',[Njsmti::class,'material']);
Route::post('/material',[Njsmti::class,'material_upload']);
Route::get('/student/show_material',[Njsmti::class,'show_material']);

//Route::get('/dlogout',[Njsmti::class,'dlogout']);

Route::get('/slogout',[Njsmti::class,'slogout']);

Route::get('/header1', function () {
         return view('header1');
     }); 

Route::get('/header', function () {
        return view('header');
    }); 
Route::get('/Sheader', function () {
        return view('Sheader');
    }); 

    
Route::get('/footer', function () {
        return view('footer');
     });  


Route::get('/dlogout', function () {

     Session::flush();
     
     return redirect('/login');
}); 
 
Route::get('/mail',[Njsmti::class,'mail']);


?>
