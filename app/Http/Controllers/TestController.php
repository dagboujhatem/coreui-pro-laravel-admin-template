<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show() {
        return view('test.form');
    }

    public function submit(Request $request) {

        $beneficiary = new Beneficiary;

        $beneficiary->name = $request->fullname;
        $beneficiary->contact = $request->mobile_number;

        echo $beneficiary->save();
        $savedId = $beneficiary->id;


        foreach ($request->member as $key => $member) {
            # code...
            $beneficiaryMember = new BeneficiaryMember;

            $beneficiaryMember->beneficiary_id = $savedId;
            $beneficiaryMember->name = $member->name;

            $beneficiaryMember->save();
        }



        // echo $beneficiary->id;
        // dd($request->all());
        // return view('test.form');
    }
}
