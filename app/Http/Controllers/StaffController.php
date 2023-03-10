<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        // min count
        // $minSlaray  = Staff::whereNotNull('salary')->min('salary');
        // $minSlaray  = Staff::whereNotNull('salary')->orderBY('salary','asc')->value('salary');

        // $maxSlaray  = Staff::whereNotNull('salary')->max('salary');
        $maxSlaray  = Staff::whereNotNull('salary')->orderBY('salary','desc')->value('salary');
        return $maxSlaray;
    }
    public function create(Request $request)
    {
        // return 'okk';
        $staff = new Staff();
        $staff->staff_name = $request->staff_name;
        $staff->email      = $request->email;
        $staff->phone      = $request->phone;
        $staff->salary     = $request->salary;
        $staff->address    = $request->address;
        $staff->save();
        return $staff;
        
    }
}
