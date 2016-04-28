<?php

namespace App\Http\Controllers;
use App\Hotel;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // auth middle
        $this->middleware('auth');
    }
//------------------------------------------------------------------------------------------------//    
    /**
     * if user id is 1 then show hotel add page else return to main page
     *
     */
    public function index()
    {
        // get logged in user id
        $id = Auth::id();
        // match logged in user id ==1 .
        if($id == 1)
        {
            //if yes the load hoteladd blade file for adding hotel
            return view('hoteladd');
        }
        else
        {
            //else return to main/home page
            return redirect('');
        }      
    }
//------------------------------------------------------------------------------------------------// 
    /**
     * add hotel info in hotel table
     *
     */
    public function add(Request $request)
    {
        
        // setting up rules
        $rules = array(
        'hotelname' => 'required',
        'address' => 'required',
        'price' => 'required|numeric'
        ); 
        // get image name (hotelname.attachmentname) with extension
        if($request->file('theimage')!='')
        {
            $imageName =  $request->get('name'). '.' . 
            $request->file('theimage')->getClientOriginalName();
            // upload image to public/image/hotel directory
            $request->file('theimage')->move(base_path() . '/public/image/hotel/', $imageName );
        }
        else
        {
            $imageName = '';
        }
        // get all input values
        $data = array(
        'hotelname' => $request->get('name'),
        'address'  => $request->get('address'),
        'price'  => $request->get('price')
        );

        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            //store information in an array 
            $hotel = new Hotel(array(
            'hotelname' => $request->get('name'),
            'address'  => $request->get('address'),
            'price'  => $request->get('price'),
            'img'  => $imageName
            ));
            //save into databse
            $hotel->save();
            //return to home/main page
            return redirect('');
        }
    }
//------------------------------------------------------------------------------------------------//     
}