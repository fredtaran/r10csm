<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models use
use App\Models\Service;
use App\Models\Division;

class AuthenticatedController extends Controller
{
    // Dashboard view
    public function dashboard_view() {
        // Get Citizen Charter 1 survey logs
        $cc1_result = DB::table('survey_logs')
                        ->selectRaw('(SELECT COUNT(cc1) FROM survey_logs WHERE cc1 = 1 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc1_1')
                        ->selectRaw('(SELECT COUNT(cc1) FROM survey_logs WHERE cc1 = 2 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc1_2')
                        ->selectRaw('(SELECT COUNT(cc1) FROM survey_logs WHERE cc1 = 3 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc1_3')
                        ->first();

        // Get Citizen Charter 1 survey logs
        $cc2_result = DB::table('survey_logs')
                        ->selectRaw('(SELECT COUNT(cc2) FROM survey_logs WHERE cc2 = 1 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc2_1')
                        ->selectRaw('(SELECT COUNT(cc2) FROM survey_logs WHERE cc2 = 2 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc2_2')
                        ->selectRaw('(SELECT COUNT(cc2) FROM survey_logs WHERE cc2 = 3 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc2_3')
                        ->first();

        // Get Citizen Charter 1 survey logs
        $cc3_result = DB::table('survey_logs')
                        ->selectRaw('(SELECT COUNT(cc3) FROM survey_logs WHERE cc3 = 1 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc3_1')
                        ->selectRaw('(SELECT COUNT(cc3) FROM survey_logs WHERE cc3 = 2 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc3_2')
                        ->selectRaw('(SELECT COUNT(cc3) FROM survey_logs WHERE cc3 = 3 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) AS cc3_3')
                        ->first();

        // Get count for male and female
        $sex_count = DB::table('survey_logs')
                        ->selectRaw('(SELECT COUNT(sex) FROM survey_logs WHERE sex = 1 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) as male')
                        ->selectRaw('(SELECT COUNT(sex) FROM survey_logs WHERE sex = 0 AND YEAR(survey_logs.created_at) = YEAR(CURDATE())) as female')
                        ->first();

        // Get number of online and f2f respondents
        $no_of_respondents = DB::table('survey_logs')
                                ->selectRaw("(SELECT COUNT(*) FROM survey_logs WHERE control_no LIKE '%OL%' AND YEAR(created_at) = YEAR(CURDATE())) AS online_respondents")
                                ->selectRaw("(SELECT COUNT(*) FROM survey_logs WHERE control_no LIKE '%F2F%' AND YEAR(created_at) = YEAR(CURDATE())) AS f2f_respondents")
                                ->first();

        // Get divisions with services
        $divisions = Division::with('services')->get();

        return view('dashboard')->with([
            'cc1_result' => $cc1_result,
            'cc2_result' => $cc2_result,
            'cc3_result' => $cc3_result,
            'sex_count' => $sex_count,
            'divisions' => $divisions,
            'no_of_respondents' => $no_of_respondents
        ]);
    }

    // Services view
    public function services_view() {
        // Get all divisions
        $divisions = Division::all();

        return view('services')->with(['divisions' => $divisions]);
    }

    // Received service form and save to database
    public function save_service(Request $request) {
        // Validate data
        $service = $request->validate([
            'service_code' => 'required',
            'service_name' => 'required',
            'division_id' => 'exists:divisions,id'
        ]);

        //  Save to database
        Service::create($service);

        // Return to services view
        return redirect()->route('services.view');
    }

    // Get list of services for datatable
    public function get_services() {
        $services = Service::with('division')->get();

        return response()->json(['data' => $services]);
    }

    // Get individual service data for update form
    public function get_service($id) {
        $service = Service::findOrFail($id);

        return response()->json(['service' => $service]);
    }

    // Update service
    public function update_service(Request $request, $id) {
        $service = Service::findOrFail($id);

        // Validate inputs
        $service_data = $request->validate([
            'edit_service_code' => 'required',
            'edit_service_name' => 'required',
            'edit_division_id' => 'exists:divisions,id'
        ]);

        $service->service_code = $service_data['edit_service_code'];
        $service->service_name = $service_data['edit_service_name'];
        $service->division_id = $service_data['edit_division_id'];
        $service->save();

        // Return to services view
        return redirect()->route('services.view');
    }

    // Delete Service
    public function delete_service($id) {
        $service = Service::findOrFail($id);

        if($service->delete()) {
            return response()->json(['message' => "Record has been deleted successfully"], 200);
        } else {
            return response()->json(['message' => "An errro has been encountered."], 500);
        }
    }
}
