<?php

namespace App\Http\Controllers\Admin;

use App\Models\{User, Review};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $monthCounts = User::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(created_at) as month_name")
        );

        $monthCounts = $monthCounts->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->get()
        ->toArray();


        $months = ["Januay" => 0, "February" => 0, "March" => 0, "April" => 0, "May" => 0, "June" => 0, "July" => 0, "August" => 0, "September" => 0, "October" => 0, "November" => 0, "December" => 0];

        foreach($months as $key => $month){
            foreach($monthCounts as $counts){
                if($key == $counts['month_name']){
                    $months[$key] = $counts['count'];
                }
            }
        }
      return view('admin.dashboard', compact('months'));
    }

    public function brand(Request $request){
        session(['brand_id'=> $request->brand]);
        return redirect()->back()->withSuccess('Brand change success fully!');
    }
}
