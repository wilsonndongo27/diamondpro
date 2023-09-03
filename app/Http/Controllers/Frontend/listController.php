<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banners, News, Partners, Staff, InfoCompany, Achievement, ProductService, StaffProfil};

class listController extends Controller
{
    public function listServiceMethod(){
        $data['allproduct'] = ProductService::where('is_active', 1)->get();

        $data['company'] = InfoCompany::first();
        
        $data['allpartner'] = Partners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        return view('frontend.list-service', $data);
    }

    public function listStaffMethod(){
        $allproduct = ProductService::where('is_active', 1)->get();

        $company = InfoCompany::first();
        
        $allpartner = Partners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $staffs = Staff::where('is_active', 1)->get();
        $allstaff = array();
        foreach ($staffs as $item) {
            $profil = StaffProfil::where('id', $item->profil)->first();
            $data = [
                'id' => $item->id,
                'name' => $item->name,
                'profil' => $profil->name,
                'email' => $item->email,
                'phone' => $item->phone,
                'address' => $item->address,
                'pp' => $item->pp,
            ];
            $format_data = json_decode(json_encode($data), FALSE);
            array_push($allstaff, $format_data);
        }

        return view('frontend.list-staff', compact('allstaff', 'allproduct', 'allpartner', 'company'));
    }

    public function listPartnerMethod(){
        $allproduct = ProductService::where('is_active', 1)->get();

        $company = InfoCompany::first();
        
        $allpartner = Partners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        return view('frontend.list-partner', compact('allproduct', 'allpartner', 'company'));
    }

    public function listAchievementMethod(){
        $allproduct = ProductService::where('is_active', 1)->get();

        $company = InfoCompany::first();
        
        $allpartner = Partners::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        $allachievement = Achievement::where('is_active', 1)
        ->OrderBy('updated_at', 'DESC')
        ->get();

        return view('frontend.list-achievement', compact('allproduct', 'allpartner', 'company', 'allachievement'));
    }
}
