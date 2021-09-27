<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use DB;
use App\Models\activityLog;
use Illuminate\Support\Facades\Auth;
class AdminControlComponent extends Component
{
    public function render()
    {


$user = Auth::user();
        $staff = DB::table('staff')->count();
        $user_activity_logs = DB::table('user_activity_logs')->count();
        $activity_logs = DB::table('activity_logs')->count();
        $users = User::where('utype','ADM')->get()->all();
        return view('livewire.admin.admin-dashboard-component',['staff'=>$staff,'user_activity_logs'=>$user_activity_logs,'activity_logs'=>$activity_logs])->layout('layouts.master')->with('users',$users);
    }
}
