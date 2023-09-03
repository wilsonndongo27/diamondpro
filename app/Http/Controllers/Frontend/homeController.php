<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banners, News, Partners, Staff, InfoCompany, Achievement, ProductService};

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allbanner'] = Banners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $data['allachievement'] = Achievement::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $data['allproduct'] = ProductService::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $data['allpartner'] = Partners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $data['allnews'] = News::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $data['company'] = InfoCompany::first();
        return view('frontend.index', $data);
    }
}
