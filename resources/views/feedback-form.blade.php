<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Client Feedback Survey</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    </head>

    <body>
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <img src="{{ asset('img/mgb.png') }}" alt="MGB-X Header" class="formbold-form-img">
                <img src="{{ asset('img/img001.png') }}" alt="ARTA Note" class="art-img" id="mobileAdjustableImage">

                <form action="#" method="POST" style="padding: 20px;" id="survey_form">
                    <h3 style="text-align: center; font-weight: 700; margin-top: 12px;">
                    HELP US SERVE YOU BETTER! 
                    </h3>

                    <label class="formbold-form-label" style="text-indent: 40px; text-align: justify;">
                    This short Client Satisfaction Measurement (CSM) survey aims to track the customer experience of government offices. Your answers will enable this office to provide a better service.
                    </label>

                    <!-- AGE -->
                    <div class="form-group">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" name="age" id="age" class="form-control"/>
                    </div>
                    <!-- AGE END -->

                    <!-- SEX -->
                    <div class="form-group"> 
                        <label for="sex" class="form-label">Sex</label>
                        <div style="display: flex; gap: 15px;">
                            <div class="form-check">
                                <label class="formbold-radio-label">
                                    <input type="radio" class="formbold-input-radio" name="sex" value="1" id="gender_male">
                                    Male
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="formbold-radio-label">
                                    <input type="radio" class="formbold-input-radio" name="sex" value="0" id="gender_male">
                                    Female
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SEX END -->

                    <!-- REGION -->
                    <div class="form-group">
                        <label for="region" class="form-label">Region</label>
                        <select name="region" id="region" class="form-control">
                            <option value="">--- Please select your region ---</option>
                            <option value="NCR">National Capital Region</option>
                            <option value="CAR">Cordillera Administrative Region</option>
                            <option value="1">Region 1 - Ilocos Region</option>
                            <option value="2">Region 2 - Cagayan Valley</option>
                            <option value="3">Region 3 - Central Luzon</option>
                            <option value="4A">Region 4A - Calabarzon</option>
                            <option value="4B">Region 4B - Mimaropa</option>
                            <option value="5">Region 5 - Bicol Region</option>
                            <option value="6">Region 6 - Western Visayas</option>
                            <option value="7">Region 7 - Central Visayas</option>
                            <option value="8">Region 8 - Eastern Visayas</option>
                            <option value="9">Region 9 - Zamboanga Peninsula</option>
                            <option value="10">Region 10 - Northern Mindanao</option>
                            <option value="11">Region 11 - Davao Region</option>
                            <option value="12">Region 12 - Soccksargen</option>
                            <option value="13">Region 13 - Caraga</option>
                            <option value="BARMM">BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
                        </select>
                    </div>
                    <!-- REGION END -->

                    <!-- CLIENT TYPE -->
                    <div class="form-group">
                        <label for="client_type" class="form-label">Client Type</label>
                        <select class="form-control" name="client_type" id="client_type">
                            <option value="">--- Please select one ---</option>
                            <option value="1">Citizen</option>
                            <option value="2">Business</option>
                            <option value="3">Government (Employee or another agency)</option>
                        </select>
                    </div>
                    <!-- CLIENT TYPE END -->

                    <!-- AGENCY VISITED -->
                    <div class="form-group">
                        <label for="agency_visited" class="form-label"> Agency Visited </label>
                        <input type="text" name="agency_visited" class="form-control" id="agency_visited"/>
                    </div>
                    <!-- AGENCY VISITED END -->

                    <!-- SERVICE AVAILED -->
                    <div class="form-group">
                        <label for="service_availed" class="form-label">Service Availed</label>
                        <select name="service_availed" id="service_availed" class="form-control">
                            <option value="">--- Please select one ---</option>
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->service_code }} - {{ $service->service_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- SERVICE AVAILED END -->

                    
                    <!-- INSTRUCTION -->

                    <label class="formbold-form-label">
                        <b>INSTRUCTIONS:</b> Choose your answer to the Citizen&#39;s Charter (CC) questions.
                    </label>

                    <!-- CC QUESTIONNAIRE -->

                    <!-- CC1 -->
                    <div class="form-group">
                        <label for="cc1" class="formbold-form-label">
                            <b>CC1:</b> Do you know about the Citizen&#39;s Charter (document of an agency&#39;s services and requirements)?
                        </label>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc1" value="1" id="cc1"/>
                                Yes, aware before my transaction with this office
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc1" value="2" id="cc2"/>
                                Yes, but aware only when I saw the CC of this office
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc1" value="3" />
                                No, not aware of the CC (Skip questions CC2 and CC3)
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <!-- /.CC1 -->

                    <!-- CC2 -->
                    <div class="form-group">
                        <label for="cc2" class="formbold-form-label">
                            <b>CC2:</b> If Yes to the previous question, did you see this office&#39;s Citizen&#39;s Charter?
                        </label>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc2" value="1" />
                                Yes, the CC was easy to find
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc2" value="2" />
                                Yes, but the CC was hard to find
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc2" value="3" />
                                No, I did not see this office&#39;s CC (Skip question CC3)
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <!-- /.CC2 -->

                    <!-- CC3 -->
                    <div class="form-group">
                        <label for="cc3" class="formbold-form-label">
                            <b>CC3:</b> If <b>Yes</b> to the previous question, did you use the Citizen&#39;s Charter as a guide for the service/s you availed?
                        </label>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc3" value="1" />
                                Yes, I was able to use the CC
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="cc3" value="2" />
                                No, I was not able to use the CC because . . . 
                                <span class="formbold-radio-checkmark"></span>
                            </label>

                            <input type="text" name="cc3_remarks" placeholder="Type here your answer" class="formbold-form-input" style="margin-top: 25px;" />
                        </div>
                    </div>

                    <!-- INSTRUCTIONS -->

                    <label class="formbold-form-label">
                        <b>INSTRUCTIONS:</b> For SQD 1-8, please choose on the selection that best corresponds to your answer.
                    </label>

                    <!-- SQD QUESTIONNAIRES -->

                    <!-- SQD 1 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD1" class="formbold-form-label">
                            <b>SQD1:</b> I spent an acceptable amount of time to complete my transaction (Responsiveness)
                        </label>

                        <div class="form-group">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd1" value="1" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd1" value="2" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd1" value="3" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd1" value="4" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd1" value="5" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 1 END -->

                    <!-- SQD 2 -->
                    <div class="form-group">
                        <label for="sqd2" class="formbold-form-label">
                            <b>SQD2:</b> The office accurately informed and followed the transaction&#39;s requirements and steps (Reliability)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd2" value="1" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd2" value="2" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd2" value="3" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd2" value="4" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="sqd2" value="5" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 2 END -->

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- jquery-validation -->
        <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <script>
            $(function() {
                // Form validation
                $.validator.setDefaults({
                    submitHandler: function (form) {
                        // form.submit();
                        alert("s")
                    }
                });

                $('#survey_form').validate({
                    rules: {
                        age: {
                            required: true,
                            digits: true,
                            min: 1
                        },

                        sex: {
                            required: true
                        },

                        region: {
                            required: true
                        },

                        client_type: {
                            required: true
                        },

                        agency_visited: {
                            required: true
                        },

                        service_availed: {
                            required: true
                        },

                        cc1: {
                            required: true
                        },

                        cc2: {
                            required: {
                                depends: function(element) {
                                    return $("input[name='cc1']:checked").val() != 3
                                }
                            }
                        },

                        cc3: {
                            required: {
                                depends: function(element) {
                                    return $("input[name='cc2']:checked").val() != 3
                                }
                            }
                        },

                        cc3_remarks: {
                            required: {
                                depends: function(element) {
                                    return $("input[name='cc3']:checked").val() == 2
                                }
                            }
                        },

                        sqd1: {
                            required: true
                        },

                        sqd2: {
                            required: true
                        },

                        sqd3: {
                            required: true
                        },

                        sqd4: {
                            required: true
                        },

                        sqd5: {
                            required: true
                        },

                        sqd6: {
                            required: true
                        },

                        sqd7: {
                            required: true
                        },

                        sqd8: {
                            required: true
                        },
                    },

                    messages: {
                        age: {
                            required: "This field is required.",
                            numeric: "This field only accept numbers",
                            min: "Minumum value is 1"
                        },

                        sex: {
                            required: "This field is required."
                        },

                        region: {
                            required: "This field is required."
                        },

                        client_type: {
                            required: "This field is required."
                        },

                        agency_visited: {
                            required: "This field is required."
                        },

                        service_availed: {
                            required: "This field is required."
                        },

                        cc1: {
                            required: "This field is required."
                        },

                        cc2: {
                            required: "This field is required."
                        },

                        cc3: {
                            required: "This field is required."
                        },

                        cc3_remarks: {
                            required: "Remarks is required."
                        },

                        sqd1: {
                            required: "This field is required."
                        },

                        sqd2: {
                            required: "This field is required."
                        },

                        sqd3: {
                            required: "This field is required."
                        },

                        sqd4: {
                            required: "This field is required."
                        },

                        sqd5: {
                            required: "This field is required."
                        },

                        sqd6: {
                            required: "This field is required."
                        },

                        sqd7: {
                            required: "This field is required."
                        },
                        
                        sqd8: {
                            required: "This field is required."
                        }
                    },

                    errorElement: 'span',

                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },

                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },

                    unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });
            });
        </script>
    </body>
</html>