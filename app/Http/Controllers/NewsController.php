<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class NewsController extends Controller
{
    /**
     * List all news
     */
     public function index(){
        $data = $this->callNews();
        return view('index', compact('data'));
    }

    /**
     * Migrate all sources news
     * @return Array $dailyNews
     */

    public function callNews(){
        $agencies = ['Reuters', 'CNBC', 'CNN'];
        $dailyNews = [];
        foreach ($agencies as $key => $name) {
            $dataNews = $this->getAgencyNews($name);
            foreach ($dataNews as $i => $data) {
                $data['agency'] = $name;
                $data['datetime'] = date("D, d M Y H:m:s",strtotime($data['datetime']));
                array_push($dailyNews,$data);
            }
        }
        return collect($dailyNews)->shuffle();
    }
    /**
     * Get Agency news
     * @param String $agency
     * @return Array $data
     */
    public function getAgencyNews($agency){
        $jsonString = file_get_contents(database_path().'/seeders/news/'. $agency. '.json');
        $data = json_decode($jsonString, true);
        return $data['latestnews'];
    }

    /**
     * Sort all news by datatime and rating using Ajax
     * @param Request $request
     */
    public function sort(Request $request){

        $data =  $request->type == 'desc' ? collect($this->callNews())->sortByDesc($request->sort) : collect($this->callNews())->sortBy($request->sort);
        return view('news', compact('data'));

    }

}
