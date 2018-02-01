<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManager;



class UserDetailsController extends Controller
{
   
	public function processusers(Request $req)
	{

		try{

		//Gather Basic Details

		$email = $req->input('email');
		$name_1 = $req->input('name');
		$add_1 = $req->input('address_1');
		$add_2 = $req->input('address_2');
		$eircode = $req->input('eircode');
		$country = $req->input('country');
		$password = $req->input('password');

	    //Process Image

	   $file_data = $req->input('image');
	   $file_name = 'image_'.time().'.png'; //generating unique file name; 
	   @list($type, $file_data) = explode(';', $file_data);
	   @list(, $file_data) = explode(',', $file_data); 
	   if($file_data!=""){ // storing image in storage/app/public Folder 
	   \Storage::disk('public')->put($file_name,base64_decode($file_data)); 
	   $p_pic = \Storage::url("app/public/".$file_name);

	}

		//Resize image to 250 x 250 using Intervention Library

		$manager = new ImageManager();
		$image = $manager->make(storage_path().'/app/public/'.$file_name)->resize(250, 250);
		$image->save(storage_path().'/app/public/'.$file_name);

		//Save all details in MySQL DB

		\DB::table('user_details')->insert(
        ['email_address' => $email,'name'=>$name_1,'address_1'=>$add_1,'address_2'=>$add_2,'eircode'=>$eircode,'country'=>$country,'password' => $password, 'image_path' =>'storage/'.$file_name]
        );

        echo "Done";

	} catch(Execption $ex){

		echo "An Error has occured".$ex;
	}

	}
}
