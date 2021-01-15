<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PlanningCatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('planningcatalog.index');
    }

    public static function search(Request $request)
    {
        $data = $request->input();
        dd($data);
        $centerId = $data['center_id'];
        $articleCode = $data['article_code'];
        /*
        Article::with(['producers', 'catalogs'])
                ->whereHas('centers', function($q) use ($centerId) { $q->where('center_code', '=', $centerId); })
                ->where('article_code', '=', $articleCode)
                ->get();
                */
        
    }
}