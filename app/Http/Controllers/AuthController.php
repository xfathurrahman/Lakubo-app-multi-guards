<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginView()
    {
        return view('layout.auth.login.index');
    }

    public function registerView()
    {
        // Get semua data provinsi
        $provinces = Province::all();

        return view('layout.auth.register.index',compact('provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option value='' selected disabled>-- Pilih Kabupaten --</option>";

        foreach ($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;

    }

    public function getkecamatan(Request $request)
    {
        $id_kabupatens = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupatens)->get();

        $option = "<option value='' selected disabled>-- Pilih Kecamatan --</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;

    }

    public function getdesa(Request $request)
    {
        $id_kecamatans = $request->id_kecamatan;

        $kecamatans = Village::where('district_id', $id_kecamatans)->get();

        $option = "<option value='' selected disabled>-- Pilih Desa --</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;

    }

    public function login(LoginRequest $request)
    {
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong email or password.');
        }
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }

}
