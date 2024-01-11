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

    // Save survey to db - ONLINE BASE
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
            'cc2' => '',
            'cc3' => '',
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

        $latest_survey_log = SurveyLog::latest('created_at')->first();

        if(is_null($latest_survey_log)) {
            // year-month-sequence
            $control_number = sprintf("OL-%u-%s-%s", date('Y'), str_pad((string)date('m'), 2, '0', STR_PAD_LEFT), str_pad('1', 4, '0', STR_PAD_LEFT));

            SurveyLog::create(array_merge($data, [
                'control_no' => $control_number,
                'division_id' => $service[0]->division_id
            ]));
        } else {
            $latest_control_no = $latest_survey_log->control_no;
            $explode_control_no = explode("-", $latest_control_no);

            // Check if year is same with the current year
            if($explode_control_no[0] == date('Y')) {
                // Check if month is equal to current month
                if($explode_control_no[1] == date('m')) {
                    // year-month-sequence
                    $control_number = sprintf("OL-%u-%s-%s", $explode_control_no[0], str_pad($explode_control_no[1], 2, '0', STR_PAD_LEFT), str_pad($explode_control_no[2] + 1, 4, '0', STR_PAD_LEFT));

                    SurveyLog::create(array_merge($data, [
                        'control_no' => $control_number,
                        'division_id' => $service[0]->division_id
                    ]));
                } else {
                    // year-month-sequence
                    $control_number = sprintf("OL-%u-%s-%s", $explode_control_no[0], str_pad((string)date('m'), 2, '0', STR_PAD_LEFT), str_pad('1', 4, '0', STR_PAD_LEFT));

                    SurveyLog::create(array_merge($data, [
                        'control_no' => $control_number,
                        'division_id' => $service[0]->division_id
                    ]));
                }
            } else {
                // year-month-sequence
                $control_number = sprintf("OL-%u-%s-%s", date('Y'), str_pad((string)date('m'), 2, '0', STR_PAD_LEFT), str_pad('1', 4, '0', STR_PAD_LEFT));

                SurveyLog::create(array_merge($data, [
                    'control_no' => $control_number,
                    'division_id' => $service[0]->division_id
                ]));
            }
        }

        return redirect()->route('survey.survey_view');
    }
}
