<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Reminder;
use Log;

class RemindersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reminders = Reminder::where('user_id', Auth::user()->id)->get()->toArray();
        Log::error($reminders);
        if(empty($reminders)){
            $errors = array();
            array_push($errors, "You don't have any reminders!");
            return view('user.partials.reminders.reminders')->with('errors', $errors);
        }

        return view('user.partials.reminders.reminders')->with('reminders', $reminders);
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
            'name' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $daily = NULL;
            $monthly = NULL;
            if($request['daily']){
                $daily = 1;
            } else if($request['monthly']){
                $monthly = 1;
            }

            $reminder = new Reminder;
            $reminder->user_id = Auth::user()->id;
            $reminder->name = $request['name'];
            $reminder->content = $request['content'];
            $reminder->start_date = $request['start_date'];
            $reminder->end_date = $request['end_date'];
            $reminder->daily = $daily;
            $reminder->monthly = $monthly;
            $saved = $reminder->save();

            if($saved){
                $success = 'New reminder added!';
                return view('user.partials.reminders.reminders')->with('success',$success);
            } else {
                $errors = array();
                array_push($errors, "There was an issue saving your reminder. Please try again.");
                return Redirect::back()->with('errors',$errors);
            }
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
        //
    }
}
