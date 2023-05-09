<?php

namespace App\Http\Controllers\Setting\Ajax;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    /**
     * Menampilkan data setting dari database
     *
     * @param Setting $setting
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function get(Setting $setting, Request $request): JsonResponse
    {
        $id = $setting->id;
        $company_name = $setting->company_name;
        $address = $setting->address;
        $phone = $setting->phone;
        $logo = $setting->logo;
        $email = $setting->email;
        $website = $setting->website;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'company_name' => $company_name,
                'address' => $address,
                'phone' => $phone,
                'logo' => $logo,
                'email' => $email,
                'website' => $website,
            ]
        ]);
    }
}
