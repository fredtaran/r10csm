<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;

class SurveyController extends Controller
{
    //
    public function survey_view() {
        $services = Service::all();

        return view('feedback-form')->with(['services' => $services]);
    }
}
