<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models use
use App\Models\Service;
use App\Models\Division;

class AuthenticatedController extends Controller
{
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
