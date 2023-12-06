<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $analytics = null;
        $analytics['total_browse'] = Visitor::all()->sum('count');

        $analytics['grouped_visitors'] = DB::table('visitors')
            ->select(DB::raw('`ip` , `user_id` , `user_agent`, count(`ip`)as`total` ,sum(`count`) as browse'))
            ->groupBy('ip', 'user_id', 'user_agent')
            ->get();

        $analytics['mobile_visitors'] = 0;
        $analytics['desktop_visitors'] = 0;
        foreach ($analytics['grouped_visitors'] as $value) {
            $val = json_decode($value->user_agent);
            if ($val->is_mobile) {
                $analytics['mobile_visitors']++;
            } else {
                $analytics['desktop_visitors']++;
            }
        }

        $analytics['unique_user_visits'] = DB::table('visitors')
            ->select(DB::raw('`ip` , `user_id` , `user_agent`, count(`ip`)as`total` ,sum(`count`) as browse'))
            ->groupBy('ip', 'user_id', 'user_agent')
            ->where('user_id', '!=', null)
            ->orderBy('browse', 'desc')
            ->get();


        if ($request->has('month')) {
            \DB::statement("SET SQL_MODE=''");//this is the trick use it just before your query

            $analytics['date_vs_visits'] = DB::select("SELECT DATE_FORMAT(`date`,'%b, %Y')
             as `date`, SUM(total) as `visits` , sum(`browse`) as `browse` from (select `ip` , `user_id` ,
             `user_agent`, `date` , count(`ip`)as`total` ,sum(`count`) as browse from `visitors` WHERE `date`
              >= DATE(NOW() - INTERVAL 12 MONTH) group by `ip`, `user_id`, `user_agent`, `date`) as `groupd_visitors`
               GROUP BY YEAR(`date`), MONTH(`date`) ORDER by MAX(`date`) ASC;");

        }
        else{
   $analytics['date_vs_visits'] = DB::select('SELECT DATE_FORMAT(`date`,"%D %b,%y")
         as `date`, SUM(total) as `visits` , sum(`browse`) as `browse`
         from (select `ip` , `user_id` , `user_agent`, `date` , count(`ip`)as`total` ,
         sum(`count`) as browse from `visitors` WHERE `date` >= DATE(NOW() - INTERVAL 15 DAY)
          group by `ip`, `user_id`, `user_agent`, `date`)
        as `groupd_visitors` GROUP BY `date` ORDER by MAX(`date`) ASC;');
        }






        $analytics['unique_visitor_count_today'] = $analytics['date_vs_visits']
        [count($analytics['date_vs_visits']) - 1]->visits;
        $analytics['unique_visitor_count'] = count($analytics['grouped_visitors']);
        $analytics['unique_random_visitor_count'] = $analytics['unique_visitor_count']
        - count($analytics['unique_user_visits']);
        $property_contacts=ContactRequest::orderBy('created_at','desc')->paginate(10);
        $service_contacts=ContactRequest::orderBy('created_at','desc')->paginate(10);
        // dd(  $service_contacts);

        return view('backend.index',[
            'analytics' => $analytics,
            'service_contacts' => $service_contacts,
            'property_contacts' => $property_contacts,

        ]);
    }
}
