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

                <form action="#" method="POST" style="padding: 20px;">
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
                    <!-- AGE END -->

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
                    <!-- GENDER END -->

                    <!-- REGION -->
                    <div class="formbold-input-group">
                        <label for="region" class="formbold-form-label"> Region </label>
                        <input type="text" name="region" placeholder="Type here your answer" class="formbold-form-input"/>
                    </div>
                    <!-- REGION END -->

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
                    <!-- CLIENT TYPE END -->

                    <!-- AGENCY VISITED -->
                    <div class="formbold-input-group">
                        <label for="age" class="formbold-form-label"> Agency Visited </label>
                        <input type="text" name="agency_visited" placeholder="Type here your answer" class="formbold-form-input"/>
                    </div>
                    <!-- AGENCY VISITED END -->

                    <!-- SERVICE AVAILED -->
                    <div class="formbold-input-group">
                        <label for="age" class="formbold-form-label"> Service Availed </label>
                        <input type="text" name="service_availed" placeholder="Type here your answer" class="formbold-form-input"  />
                    </div>
                    <!-- SERVICE AVAILED END -->

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
                                    <input class="formbold-input-radio" type="radio" name="CC1" value="Yes, aware before my transaction with this office" />
                                    Yes, aware before my transaction with this office
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC1" value="Yes, but aware only when I saw the CC of this office" />
                                    Yes, but aware only when I saw the CC of this office
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC1" value="No, not aware of the CC (Skip questions CC2 andCC3)" />
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
                                    <input class="formbold-input-radio" type="radio" name="CC2" value="Yes, the CC was easy to find" />
                                    Yes, the CC was easy to find
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC2" value="Yes, but the CC was hard to find" />
                                    Yes, but the CC was hard to find
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC2" value="No, I did not see this office&#39;s CC (Skip question CC3)" />
                                    No, I did not see this office&#39;s CC (Skip question CC3)
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- CC3 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="CC3-1" class="formbold-form-label">
                            <b>CC3:</b> If <b>Yes</b> to the previous question, did you use the Citizen&#39;s Charter as a guide for the service/s you availed?
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC3_1" value="Yes, I was able to use the CC" />
                                    Yes, I was able to use the CC
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="CC3_1" value="No, I was not able to use the CC because . . . " />
                                    No, I was not able to use the CC because . . . 
                                    <span class="formbold-radio-checkmark"></span>
                                </label>

                                <input type="text" name="CC3_2" placeholder="Type here your answer" class="formbold-form-input" style="margin-top: 25px;" />
                            </div>
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

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD1" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD1" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD1" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD1" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD1" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 1 END -->

                    <!-- SQD 2 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD2" class="formbold-form-label">
                            <b>SQD2:</b> The office accurately informed and followed the transaction&#39;s requirements and steps (Reliability)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD2" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD2" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD2" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD2" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD2" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 2 END -->

                    <!-- SQD 3 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD3" class="formbold-form-label">
                            <b>SQD3:</b> My online transaction (including steps and payment) was simple and convenient (Access and Facilities)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD3" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD3" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD3" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD3" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD3" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 3 END -->

                    <!-- SQD 4 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD4" class="formbold-form-label">
                            <b>SQD4:</b> I easily found information about my transaction from thee office or its website (Communication)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD4" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD4" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD4" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD4" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD4" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 4 END -->

                    <!-- SQD 5 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD5" class="formbold-form-label">
                            <b>SQD5:</b> I paid an acceptable amount of fees for my transaction (Costs)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD5" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD5" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD5" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD5" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD5" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 5 END -->

                    <!-- SQD 6 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD6" class="formbold-form-label">
                            <b>SQD6:</b> I am confident my online transaction was secure (Integrity)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD6" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD6" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD6" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD6" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD6" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 6 END -->

                    <!-- SQD 7 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD7" class="formbold-form-label">
                            <b>SQD7:</b> The office's online support was available, or (if asked questions) online support was quick to respond (Assurance) staff, and (if asked for help) the staff was helpful.
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD7" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD7" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD7" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD7" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD7" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 7 END -->

                    <!-- SQD 8 -->
                    <div class="formbold-input-radio-wrapper">
                        <label for="SQD8" class="formbold-form-label">
                            <b>SQD8:</b> I got what I needed from the government office (Outcome)
                        </label>

                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD8" value="Strongly Disagree" />
                                    Strongly Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD8" value="Disagree" />
                                    Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD8" value="Neither Agree nor Disagree" />
                                    Neither Agree nor Disagree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD8" value="Agree" />
                                    Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>

                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="SQD8" value="Strongly Agree" />
                                    Strongly Agree
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- SQD 8 END -->

                    <!-- Remarks -->
                    <div>
                        <label for="message" class="formbold-form-label">
                        REMARKS (optional):
                        </label>

                        <textarea rows="6" name="remarks" placeholder="Type here..." class="formbold-form-input"></textarea>
                    </div>
                    <!-- Remarks END -->

                    <button class="formbold-btn">Submit</button>
                </form>

            </div>
        </div>
    </body>
</html>