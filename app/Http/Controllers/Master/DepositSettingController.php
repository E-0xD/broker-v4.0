<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDepositSettingsRequest;
use App\Models\DepositSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class DepositSettingController extends Controller
{
    public function index()
    {
        $settings = DepositSetting::first();

        return view('dashboard.master.deposit-settings', compact('settings'));
    }

    public function update(UpdateDepositSettingsRequest $request)
    {

        try {
            $settings = DepositSetting::first();
            $settings->update($request->all());

            Alert::success('success', 'Deposit settings have been updated successfully.');
            return redirect()->back();
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::success('Error', 'An Error Occurred');
            return back();
        }
    }
}
