<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{
	/*add contact page route function are here*/
    public function add_contact(){


    	return view ('addcontact');
    }

    /*welcome page route function are here*/

    public function dashboard(){


    	return view ('welcome');
    }

    /*all contact page route function are here*/

     public function all_contact(){
      /*database fetch operation*/

      $allcontact_info=DB::table('tbl_contact') /*tbl_contact is database table*/
                        ->get(); /*get from database*/
          $manage_contact=view('allcontact') /*allcontact page used for retriving database*/
                       ->with('all_contact_info',$allcontact_info);

           return view ('layout')
                      ->with('allcontact',$manage_contact);           

       


    	return view ('allcontact');
    }

/*contact added part in database */
    public function save_contact(Request $request){


       $data = array();
       $data['contact_name']=$request->contact_name;
       $data['contact_number']=$request->contact_number;
 

       DB::table('tbl_contact')->insert($data);

       Session::put('message','Contact Added Successfully!!'); /*give message when name and id sucessfully insert to database*/

       return Redirect::to('/addcontact'); /*addcontact is a url used for work on with this page*/


       }



          /*delet contact function*/

        
    public function delete_contact($id){


    

      DB::table('tbl_contact')->where('id',$id)->delete();

      Session::put('message','Delete Contact Successfully!!');
      return Redirect::to('/allcontact');
    }


       /*edit contact function*/

     
    public function edit_contact($id){


    

     $contact_info= DB::table('tbl_contact')->where('id',$id)->first();

       /*echo "</pre>";
       print_r(  $contact_info);*/

       $manage_contact=view('contact_edit') /*contact_edit page used for update database*/
                       ->with('all_contact_info',$contact_info);

           return view ('layout')
                      ->with('contact_edit',$manage_contact);   

    }


     /* update contact submit*/
     public function contact_update(Request $request,$id){


      // echo "string";


       $data = array();
       $data['contact_name']=$request->contact_name;
       $data['contact_number']=$request->contact_number;

 

       DB::table('tbl_contact')->where('id',$id)->update($data);
  
      Session::put('message','update Contact Successfully!!'); /*give message when name and id sucessfully update to database*/

       return Redirect::to('/allcontact'); /*when data updated goes to allcontact*/



     }




   }