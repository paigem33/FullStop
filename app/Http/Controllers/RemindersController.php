<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Reminder;
use Log;
use Session;

class RemindersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $success = session('success') ?? '';
        
        $reminders = Reminder::where('user_id', Auth::user()->id)->get();
        
        if(count($reminders) === 0){
            $errors = array();
            array_push($errors, "You don't have any reminders!");
            return view('user.partials.reminders.reminders')->with('errors', $errors);
        }

        return view('user.partials.reminders.reminders')->with(['reminders' => $reminders, 'success' => $success]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.partials.reminders.new_reminder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {

            Reminder::create([
                'user_id' => Auth::user()->id,
                'title' => $request['title'],
                'content' => $request['content'],
            ]);

            return redirect()->action('RemindersController@index')->with('success', 'New reminder added!');
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::error('hit');
        Reminder::where('id',$id)->delete();
        return redirect()->action('RemindersController@index')->with('success', 'Reminder deleted!');
    }
}
