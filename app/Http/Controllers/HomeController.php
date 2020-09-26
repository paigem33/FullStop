<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reminder_errors = '';
        $reminders = Reminder::where('user_id', Auth::user()->id)->get();

        if(count($reminders) === 0){
            $reminder_errors = "You don't have any reminders!";
        }

        return view('user.partials.home')->with(['reminders' => $reminders, 'reminder_errors' => $reminder_errors]);
    }
}
