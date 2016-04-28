<?php
namespace App\Http\Controllers;
use App\Hotel;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Validator;

class HotelController extends Controller {

    /**
     * Display hotels.
     *
     * @return Response
     */
    public function index()
    {
        //get all hotel table data
        $hotels = Hotel::all();
        //return result to welcome blade file for user interface
        return view('welcome', compact('hotels'));
    }
//------------------------------------------------------------------------------------------------// 
     /**
     * Show all comments of hotel
     *
     * @return Response
     */
    public function show($id)
    {
        //find comments as per jotel id basis coming through page request
        $comments = Hotel::find($id)->comments;
        $hotelid = $id;
        $hotelname = Hotel::findOrFail($id);
        // send result to detail blade file for all comments listing
        return view('detail', compact('comments','hotelid','hotelname'));
    }
//------------------------------------------------------------------------------------------------// 
    /**
     * Post comment
     *
     * @return Response
     */
    public function postComment(Request $request)
    {
         //$input = $request->all();
         //create object of comment class
         $comment = new Comment;
         //get input and store to table column respectively
         $comment->description = $request->input('body');
         $comment->hotel_id = $request->input('hotel_id');
         //save
         $comment->save();
         //return to the previous view
         return redirect()->back();
    }
//------------------------------------------------------------------------------------------------//     
}
?>