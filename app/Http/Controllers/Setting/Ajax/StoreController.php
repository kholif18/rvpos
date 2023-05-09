<?php

namespace App\Http\Controllers\Setting\Ajax;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Menambah data setting kedalam database
     *
     * @param Setting $setting
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $company_name = $request->input('company_name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $logo = $request->file('logo')->store('logos');
        $email = $request->input('email');
        $website = $request->input('website');

        $setting = new Setting();
        $setting->company_name = $company_name;
        $setting->address = $address;
        $setting->phone = $phone;
        $setting->logo = $logo;
        $setting->email = $email;
        $setting->website = $website;

        $setting->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Setting Berhasil Disimpan!',
        ]);
    }
}
