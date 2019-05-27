<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use DB;
use App\opened_courses;
use App\course;
use App\department;
use App\infoNew;
use App\doctor;
use App\instructor;

class studentAffairsController extends Controller
{

  public function showTable()

  {
        $data2 =null;
        $courses   = course::all();
      if(request()->has('tableName')){
            
            $courses   = course::all();
            $tableName = request('tableName');
            $data2=DB::select("select * from $tableName;"); 
             return $this->show($data2,$tableName,$courses);

        }

        $tableName = null;

      return $this->show($data2,$tableName,$courses);
  }

	public function show($data2 = null,$tableName = null,$courses =null)

	{
            $tables_Names = null;
            $tables = DB::select('SHOW TABLES');
              foreach($tables as $table){

                if( strpos( $tablesName[] =$table->Tables_in_fcih_system, 'for' ) !== false ) {

                     $tables_Names[] = $tablesName[] =$table->Tables_in_fcih_system; 
                  }  
              }

      return view('dynamicTest',compact('tables_Names','data2','courses'))->with('tableName',$tableName);

	}

  public function createTable($table_name, $fields = [], $data1 = [], $data2 = [], $data3 = [], $data4 = [], $data5 = [])

  {

                if (!Schema::hasTable($table_name)) {
                    Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                    	$table->increments('id');
                        if (count($fields) > 0) {
                            foreach ($fields as $field) {

                                $table->{$field['type']}($field['name'])->nullable();
                            }
                        }

                        $table->timestamps();
                        session()->flash('message3','Table Create Sucessfully');

                    });

            return $this->insertIntoTable($table_name, $fields,$data1,$data2,$data3,$data4,$data5);
  }

       
      session()->flash('message','Table Exist');
       return redirect('showTable');

   
    }

    public function operate()
    {
      if(request()->has('btn_2'))
      { 
        $this->validate(request(),[
           'level'       =>'required',
            'Day_Sunday'  =>'required',
            'Day_Monday'  =>'required',
            'Day_Tusday'  =>'required',
            'Day_Wensday' =>'required',
            'Day_Thursday' =>'required',
            'table_name'  =>'required|max:20',
        ]);
        $table_name = request('table_name');
       // $table_name = substr($table_name, 0, -12);
        $table_name = $table_name.'_for_'.request('level');

        $test = $this->removeTable($table_name); 

        if($test == false){
          session()->flash('message2','Table Exist');
          return redirect('showTable');
        }
          

      }
      else if(request()->has('btn_1'))
      { 
          $this->validate(request(),[
            'level'       =>'required',
            'Day_Sunday'  =>'required',
            'Day_Monday'  =>'required',
            'Day_Tusday'  =>'required',
            'Day_Wensday' =>'required',
            'Day_Thursday' =>'required',
            'table_name'  =>'required|max:20',
            ]);
          $table_name = request('table_name').'_for_'.request('level');
      }
    	
        $fields = [
        	['name' => 'Days' , 'type' => 'string'],
            ['name' => 'AM_8' , 'type' => 'string'],
            ['name' => 'AM_9' , 'type' => 'string'],
            ['name' => 'AM_10', 'type' => 'string'],
            ['name' => 'AM_11', 'type' => 'string'],
            ['name' => 'AM_12', 'type' => 'string'],
            ['name' => 'PM_1' , 'type' => 'string'],
            ['name' => 'PM_2' , 'type' => 'string'],
            ['name' => 'PM_3' , 'type' => 'string'],
            ['name' => 'PM_4' , 'type' => 'string'],
            ['name' => 'PM_5' , 'type' => 'string'],
            ['name' => 'PM_6' , 'type' => 'string']
        ];

         $data1 = [
           	'First'    => request('Day_Sunday'),
           	'First_8'  => request('C_Sunday_8'),
           	'First_9'  => request('C_Sunday_9'),
           	'First_10' => request('C_Sunday_10'),
           	'First_11' => request('C_Sunday_11'),
           	'First_12' => request('C_Sunday_12'),
           	'First_1'  => request('C_Sunday_1'),
           	'First_2'  => request('C_Sunday_2'),
           	'First_3'  => request('C_Sunday_3'),
           	'First_4'  => request('C_Sunday_4'),
           	'First_5'  => request('C_Sunday_5'),
           	'First_6'  =>  request('C_Sunday_6'),
           ];
           $data2 = [
           	'second' => request('Day_Monday'),
           	'second_8' => request('C_Monday_8'),
           	'second_9' => request('C_Monday_9'),
           	'second_10' => request('C_Monday_10'),
           	'second_11' => request('C_Monday_11'),
           	'second_12' => request('C_Monday_12'),
           	'second_1' => request('C_Monday_1'),
           	'second_2' => request('C_Monday_2'),
           	'second_3' => request('C_Monday_3'),
           	'second_4' => request('C_Monday_4'),
           	'second_5' => request('C_Monday_5'),
           	'second_6' => request('C_Monday_6'),
           ];
           $data3 = [
           	'third' => request('Day_Tusday'),
           	'third_8' => request('C_Tusday_8'),
           	'third_9' => request('C_Tusday_9'),
           	'third_10' => request('C_Tusday_10'),
           	'third_11' => request('C_Tusday_11'),
           	'third_12' => request('C_Tusday_12'),
           	'third_1' => request('C_Tusday_1'),
           	'third_2' => request('C_Tusday_2'),
           	'third_3' => request('C_Tusday_3'),
           	'third_4' => request('C_Tusday_4'),
           	'third_5' => request('C_Tusday_5'),
           	'third_6' => request('C_Tusday_6'),
           ];
           $data4 = [
           	'fourth' => request('Day_Wensday'),
           	'fourth_8' => request('C_Wensday_8'),
           	'fourth_9' => request('C_Wensday_9'),
           	'fourth_10' => request('C_Wensday_10'),
           	'fourth_11' => request('C_Wensday_11'),
           	'fourth_12' => request('C_Wensday_12'),
           	'fourth_1' => request('C_Wensday_1'),
           	'fourth_2' => request('C_Wensday_2'),
           	'fourth_3' => request('C_Wensday_3'),
           	'fourth_4' => request('C_Wensday_4'),
           	'fourth_5' => request('C_Wensday_5'),
           	'fourth_6' => request('C_Wensday_6'),
           ];
           $data5 = [
           	'fifth' => request('Day_Thursday'),
           	'fifth_8' => request('C_Thursday_8'),
           	'fifth_9' => request('C_Thursday_9'),
           	'fifth_10' => request('C_Thursday_10'),
           	'fifth_11' => request('C_Thursday_11'),
           	'fifth_12' => request('C_Thursday_12'),
           	'fifth_1' => request('C_Thursday_1'),
           	'fifth_2' => request('C_Thursday_2'),
           	'fifth_3' => request('C_Thursday_3'),
           	'fifth_4' => request('C_Thursday_4'),
           	'fifth_5' => request('C_Thursday_5'),
           	'fifth_6' => request('C_Thursday_6'),
           ];
        return $this->createTable($table_name, $fields,$data1,$data2,$data3,$data4,$data5);
    }
    public function removeTable($table_name)
    {
        if(Schema::hasTable($table_name))
        {
          Schema::dropIfExists($table_name);
         return true;
        }
        else return false;
    }
        public function removeTable2()
    {
      if(request()->has('T_Name'))
      {
        if(Schema::hasTable(request('T_Name')))
          Schema::dropIfExists(request('T_Name'));
      }
         return redirect('showTable');
    }
    public function insertIntoTable($table_name, $fields = [], $data1 = [], $data2 = [], $data3 = [], $data4 = [], $data5 = [])
    {
    	DB::table($table_name)->insert(
   			 [
   			 	'Days'  => $data1['First'],
   			 	'AM_8'  => $data1['First_8'],
   			 	'AM_9'  => $data1['First_9'],
   			 	'AM_10' => $data1['First_10'],
   			 	'AM_11' => $data1['First_11'],
   			 	'AM_12' => $data1['First_12'],
   			 	'PM_1'  => $data1['First_1'],
   			 	'PM_2'  => $data1['First_2'],
   			 	'PM_3'  => $data1['First_3'],
   			 	'PM_4'  => $data1['First_4'],
   			 	'PM_5'  => $data1['First_5'],
   			 	'PM_6'  => $data1['First_6']
   			 ]
		);

		DB::table($table_name)->insert(
   			 [
   			 	'Days'  => $data2['second'],
   			 	'AM_8'  => $data2['second_8'],
   			 	'AM_9'  => $data2['second_9'],
   			 	'AM_10' => $data2['second_10'],
   			 	'AM_11' => $data2['second_11'],
   			 	'AM_12' => $data2['second_12'],
   			 	'PM_1'  => $data2['second_1'],
   			 	'PM_2'  => $data2['second_2'],
   			 	'PM_3'  => $data2['second_3'],
   			 	'PM_4'  => $data2['second_4'],
   			 	'PM_5'  => $data2['second_5'],
   			 	'PM_6'  => $data2['second_6']
   			 ]
		);

		DB::table($table_name)->insert(
   			 [
   			 	'Days'  => $data3['third'],
   			 	'AM_8'  => $data3['third_8'],
   			 	'AM_9'  => $data3['third_9'],
   			 	'AM_10' => $data3['third_10'],
   			 	'AM_11' => $data3['third_11'],
   			 	'AM_12' => $data3['third_12'],
   			 	'PM_1'  => $data3['third_1'],
   			 	'PM_2'  => $data3['third_2'],
   			 	'PM_3'  => $data3['third_3'],
   			 	'PM_4'  => $data3['third_4'],
   			 	'PM_5'  => $data3['third_5'],
   			 	'PM_6'  => $data3['third_6']
   			 ]
		);

		DB::table($table_name)->insert(
   			 [
   			 	'Days'  => $data4['fourth'],
   			 	'AM_8'  => $data4['fourth_8'],
   			 	'AM_9'  => $data4['fourth_9'],
   			 	'AM_10' => $data4['fourth_10'],
   			 	'AM_11' => $data4['fourth_11'],
   			 	'AM_12' => $data4['fourth_12'],
   			 	'PM_1'  => $data4['fourth_1'],
   			 	'PM_2'  => $data4['fourth_2'],
   			 	'PM_3'  => $data4['fourth_3'],
   			 	'PM_4'  => $data4['fourth_4'],
   			 	'PM_5'  => $data4['fourth_5'],
   			 	'PM_6'  => $data4['fourth_6']
   			 ]
		);

		DB::table($table_name)->insert(
   			 [
   			 	'Days'  => $data5['fifth'],
   			 	'AM_8'  => $data5['fifth_8'],
   			 	'AM_9'  => $data5['fifth_9'],
   			 	'AM_10' => $data5['fifth_10'],
   			 	'AM_11' => $data5['fifth_11'],
   			 	'AM_12' => $data5['fifth_12'],
   			 	'PM_1'  => $data5['fifth_1'],
   			 	'PM_2'  => $data5['fifth_2'],
   			 	'PM_3'  => $data5['fifth_3'],
   			 	'PM_4'  => $data5['fifth_4'],
   			 	'PM_5'  => $data5['fifth_5'],
   			 	'PM_6'  => $data5['fifth_6']
   			 ]
		);
    //return $this->showTable();
		//return back();
    return redirect('showTable');
    }

    public function shownews(){
    $allnews=infoNew::all();

    return view('newsview',compact('allnews'));}


         public function insertnews(Request $request){

                 $this->Validate( $request, [
            'new_date'      => 'required|date|max:255',
            'new_title'    => 'required|string|min:6|',
            'new_content'  =>'required|string|max:250',

        ]);


             $add =  new infoNew;
             $add->new_date    =request('new_date');
             $add->new_title   =request('new_title');
             $add->new_content =request('new_content');
             $add->save();

 
 
   return redirect('newsview');
  
    }


    //----------------------------------------payment--------------------------//

        public function paymentfunction()
    {
        $nopay = DB::select('select * from students where payment = ?', [0]);

        return view('studentNoPay', compact('nopay'));
    }

     public function editpay($id){

        DB::update('update students set payment = 1 where stu_id = ?', [$id]);
        return redirect('studentNoPay');
    }

    public function viewCourses(Request $request){

           $course_info  = course::where('dept_id',$request->input('department'))->get();
           $prerequisite = course::select('course_name')->where('dept_id',$request->input('department'))->get();

           return view('courses',compact('course_info','prerequisite'));

    }

    public function makeCourses(Request $request){

           $this->validate($request, [

                'course_code'      => 'unique:courses|required|numeric|digits_between:3,3',
                'course_name'         => 'unique:courses|required|string|max:128',
                'prerequisite_course' => 'required|string|max:25'

           ]);

           $new_course = new course();
           $new_course->course_code          = $request->input('course_code');
           $new_course->course_name          = $request->input('course_name');
           $new_course->prerequisite_course  = $request->input('prerequisite_course');
           $new_course->dept_id              = $request->input('dept_id');
           $new_course->save();

           return redirect('coursesDetails?department=' . $request->input('dept_id'));
    }



    public function registerCourse(Request $request){

          $coursesName = request('course');
              
              /*if($this->array_has_dupes($coursesName)){

              return redirect()->back()->with('message', 'Do not WORKS!');

            }*/

            $this->validate($request,[

                'course' => [

                  Rule::notIn([$request('course')])

                ]
            ]);

           

          for($i=0;$i<$request->get('course_no');$i++){

          ${"variable$i"} = new opened_courses();
          ${"variable$i"}->course_name = $coursesName[$i];
          ${"variable$i"}->doc_id      = $request->get('doctor'.$i);
          ${"variable$i"}->inst_id     = $request->get('instructor'.$i);
          ${"variable$i"}->level_no    = $request->get('level');
          ${"variable$i"}->semester    = $request->get('semester');
          ${"variable$i"}->save();

          }

          return redirect()->back()->with('message1', 'Do not WORKS!');

        // 3aizeen ndeef el code beta3 el mada wa 3azeen ne3mel valdiation 1-el code yab2a moazy esm el mada 2-mainf3sh td5al madten be nafs el esm aw el code tab3an
      
    }


    public function openCourses(Request $request){

        $this->validate($request,[

             'courses' => 'numeric|max:12|min:6'

        ]);
 
    $no_of_fields = $request->get('courses');
    $coursesNames = course::select('course_name','course_code')->get();
    $doctorNames  = doctor::select('full_name','doc_id')->get();
    $instructorNames = instructor::select('full_name','inst_id')->get();

    return view('registerCourse',compact('no_of_fields','coursesNames','doctorNames','instructorNames'));
  }

  public function array_has_dupes($array) {

   return count($array) !== count(array_unique($array));

  }

}
