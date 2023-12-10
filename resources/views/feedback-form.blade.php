<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Client Feedback Survey</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <img src="{{ asset('img/mgb.png') }}" alt="MGB-X Header" class="formbold-form-img">
                <img src="{{ asset('img/img001.png') }}" alt="ARTA Note" class="art-img" id="mobileAdjustableImage">

                <form action="#" method="POST" style="padding: 0 20px;">
                    <label class="formbold-form-label" style="text-align: center; font-weight: 700; margin-top: 12px;">
                    HELP US SERVE YOU BETTER! 
                    </label>

                    <label class="formbold-form-label" style="text-indent: 40px; text-align: justify;">
                    This short Client Satisfaction Measurement (CSM) survey aims to track the customer experience of government offices. Your answers will enable this office to provide a better service.
                    </label>

                    <!-- AGE -->

                    <div class="formbold-input-group" style="display: flex;">
                        <label for="age" class="formbold-form-label" style="padding: 12px 21px 0px 0px;" > Age </label>
                        <input type="text" name="age" placeholder="Type here . . ." class="cntrl" style="width: 50%;"/>
                    </div>

                    <!-- GENDER -->

                    <div class="formbold-input-group" style="display: flex;"> 
                        <label for="ans" class="formbold-form-label" style="padding: 12px 35px 0px 0px;">Gender</label>
                        <div style="display: flex; gap: 15px; padding: 12px 0px 0px 0px;">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="gender" value="Male" />
                                    Male
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="gender" value="Female" />
                                    Female
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- REGION -->

                    <div class="formbold-input-group">
                        <label for="region" class="formbold-form-label"> Region </label>
                        <input type="text" name="region" placeholder="Type here your answer" class="formbold-form-input"/>
                    </div>

                    <!-- CLIENT TYPE -->

                    <div class="formbold-input-group">
                        <label class="formbold-form-label">Client Type</label>
                        <select class="formbold-form-select" name="c_type">
                            <option>Select</option>
                            <option value="Citizen">Citizen</option>
                            <option value="Business">Business</option>
                            <option value="Government (Employee or another agency)">Government (Employee or another agency)</option>
                        </select>
                    </div>

                    <!-- AGENCY VISITED -->

                    <div class="formbold-input-group">
                    <label for="age" class="formbold-form-label"> Agency Visited </label>
                    <input
                        type="text"
                        name="agency_visited"
                        placeholder="Type here your answer"
                        class="formbold-form-input" 
                    />
                    </div>

                    <!-- SERVICE AVAILED -->

                    <div class="formbold-input-group">
                    <label for="age" class="formbold-form-label"> Service Availed </label>
                    <input
                        type="text"
                        name="service_availed"
                        placeholder="Type here your answer"
                        class="formbold-form-input" 
                    />
                    </div>

                    <!-- INSTRUCTION -->

                    <label class="formbold-form-label">
                    <b>INSTRUCTIONS:</b> Choose your answer to the Citizen&#39;s Charter (CC) questions.
                    </label>

                    <!-- CC QUESTIONNAIRE -->

                    <!-- CC1 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="CC1" class="formbold-form-label">
                            <b>CC1:</b> Do you know about the Citizen&#39;s Charter (document of an agency&#39;s services and requirements)?
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC1"
                                    value="Yes, aware before my transaction with this office"
                                    />
                                    Yes, aware before my transaction with this office
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC1"
                                    value="Yes, but aware only when I saw the CC of this office"
                                    />
                                    Yes, but aware only when I saw the CC of this office
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC1"
                                    value="No, not aware of the CC (Skip questions CC2 andCC3)"
                                    />
                                    No, not aware of the CC (Skip questions CC2 and CC3)
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- CC2 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="CC2" class="formbold-form-label">
                            <b>CC2:</b> If Yes to the previous question, did you see this office&#39;s Citizen&#39;s Charter?
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC2"
                                    value="Yes, the CC was easy to find"
                                    />
                                    Yes, the CC was easy to find
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC2"
                                    value="Yes, but the CC was hard to find"
                                    />
                                    Yes, but the CC was hard to find
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="CC2"
                                    value="No, I did not see this office&#39;s CC (Skip question CC3)"
                                    />
                                    No, I did not see this office&#39;s CC (Skip question CC3)
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>