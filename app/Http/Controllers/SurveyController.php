<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\SurveyLog;

class SurveyController extends Controller
{
    // Survey form view
    public function survey_view() {
        $services = Service::all();

        return view('feedback-form')->with(['services' => $services]);
    }

    // Save survey to db
    public function save_survey_answer(Request $request) {
        // Validate inputs
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'age' => 'required',
            'sex' => 'required',
            'region' => 'required',
            'client_type' => 'required',
            'agency_visited' => 'required',
            'cc1' => 'required',
            'cc2' => 'required',
            'cc3' => 'required',
            'sqd1' => 'required',
            'sqd2' => 'required',
            'sqd3' => 'required',
            'sqd5' => 'required',
            'sqd6' => 'required',
            'sqd4' => 'required',
            'sqd7' => 'required',
            'sqd8' => 'required',
        ]);

        $service = Service::where('id', $data['service_id'])->get('division_id');

        dd(array_merge($request->all(), [
            'division_id' => $service[0]->division_id
        ]));

        // SurveyLog::create(array_merge($request->validated(), [
        //     'division_id' => $service->division_id
        // ]));
    }
}
