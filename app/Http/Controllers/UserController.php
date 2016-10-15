<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
	/**
	 * Index page of a user profile
	 * @return mixed
     */
	public function index(){

		//Bring the profile using the id of the Logged user!
		$user_data = User::find(\Auth::user()->id);

		//Bring the phone types from DB
		$phone_types = DB::table('core_phone_type')->select('name')->lists('name');

		if(empty($user_data->detail->cedula) || empty($user_data->detail->city) || empty($user_data->detail->province) || empty($user_data->detail->sector) || empty($user_data->detail->address) || empty($user_data->detail->image) || empty($user_data->detail->facebook) || ($user_data->detail->country_id == 0) || (count($user_data->third->phone) < 2)) {
			flash('<center>Para poder solicitar o prestar libros, debe registrar y validar todos los datos de su perfil de usuario. <br/> Presiona editar usuario para actualizar los datos que hagan falta.</center>', 'warning');
			if(count($user_data->third->phone) < 2){
				flash('<center>Para poder solicitar o prestar libros, debe registrar y validar todos los datos de su perfil de usuario y debe agregar al menos 2 numeros de telefono de contacto. <br/> Presiona editar usuario para actualizar los datos que hagan falta.</center>', 'warning');
			}
		}

		//profile page for registered users with data
		return view(('users.detail'))->with('user', $user_data)
									 ->with('phone_types', $phone_types);

	}


	/**
	 * Main view of edit profile page
	 * @param $id
	 * @return mixed
     */
	public function edit($id){

		if ($id != Auth::user()->id) { abort(403); }
		//Bring the profile using the id of the Logged user!
		$user_data = User::find(\Auth::user()->id);

		//Bring the phone types from DB
		$phone_types = DB::table('core_phone_type')->select('name')->lists('name');

		return view('users.edit')->with('user', $user_data)
								 ->with('phone_types', $phone_types);

	}


	/**
	 * Process a modification (edit) of a user profile
	 * @param Request $request
	 * @param $id
     */
	public function update(Request $request, $id)
	{
		if ($id != Auth::user()->id) { abort(403); }
		//find proper user by id
		$user = User::find($id);
		//Modify fields in Third table
		$user->third->name = $request->name;
		//Modify fields in Detail table
		$user->detail->cedula = $request->cedula;
		$user->detail->country_id = $request->country_id;
		$user->detail->city = $request->city;
		$user->detail->province = $request->province;
		$user->detail->address = $request->address;
		$user->detail->address = $request->address;
		$user->detail->sector = $request->sector;
		$user->detail->facebook = $request->facebook;
		$user->detail->instagram = $request->instagram;
		$user->detail->twitter = $request->twitter;

		if (!empty($request->phonenumber))
		{	//add new phone number if the user add it
			$phone = new Phone;
			$phone->third_id = Auth::user()->third_id;
			$phone->phone_type_id = $request->phonetype;
			$phone->number = $request->phonenumber;
			$phone->save();
		}

		if($request->image)
		{	//Add new image if the user change it
			$image = $request->image;
			$filename = time().'.'. $image->getClientOriginalExtension();
			$path = public_path('profilepics/'.$filename);


			Image::make($image->getRealPath())->save($path);
			$user->detail->image = $filename;
		}

		//Save all changes
		$user->third->save();
		$user->detail->save();

		//Message and redirect to user profile page
		flash('Tu usuario ha sido editado exitosamente', 'success');
		return redirect('/user/profile');

	}


	/**
	 * Delete a user profile
	 * @param $id
     */
	public function destroy($id)
	{
		if ($id != Auth::user()->id) { abort(403); }
		//Find the user by id and delete it!
		$user = User::find($id);

		$user->detail()->delete();
		$user->third()->delete();
		$user->delete();

		//Borrar libros que haya inscrito????

		Auth::logout();
		flash("El Usuario ha sido eliminada de manera exitosa!", 'success');
		return redirect('/');
	}

	/**
	 * Delete a phone number in the edit mode of a user profile
	 * @param $id
	 */
	public function deletephone($id){

		if (Phone::find($id)->third_id != Auth::user()->third->id) { abort(403); }
		//Find the phone by ID and delete it
		$phone = Phone::find($id);
		$phone->delete();

		return redirect('/user/profile/'.Auth::user()->id.'/edit');
	}
}
