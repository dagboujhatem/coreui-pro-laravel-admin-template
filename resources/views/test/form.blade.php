@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"> Add Beneficiary
                      <!-- <a class="badge badge-danger" href="https://coreui.io/pro/">CoreUI Pro Component</a> -->
                      <!-- <div class="card-header-actions"><a class="card-header-action" href="https://github.com/jzaefferer/jquery-validation" target="_blank"><small class="text-muted">docs</small></a></div> -->
                    </div>
                    <div class="card-body">
                      <!-- This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options. It makes a good choice if you’re building something new from scratch, but also when you’re trying to integrate something into an existing application with lots of existing markup. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. -->
                      <!-- <hr> -->
                      <div class="row">
                        <div class="col-md-12">
                          <!-- <h6>Simple Form</h6> -->
                          <form id="signupForm" action="/beneficiary" method="POST">
                            {{ csrf_field() }}



                            Member 1
                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="fullname">Name</label>
                                    <input class="form-control" id="fullname" type="text" name="member[1][name]">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="lastname">Gander</label>
                                    M<input class="" id="card-no" type="radio" name="member[1][gender]">
                                    F<input class="" id="card-no" type="radio" name="member[1][gender]">
                                </div>
                            </div>


                            Member 1
                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="fullname">Name</label>
                                    <input class="form-control" id="fullname" type="text" name="member[2][name]">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="lastname">Gander</label>
                                    M<input class="" id="card-no" type="radio" name="member[2][gender]">
                                    F<input class="" id="card-no" type="radio" name="member[2][gender]">
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>



                            <div class="row ">
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="fullname">Full Name</label>
                                <input class="form-control" id="fullname" type="text" name="fullname">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="lastname">Card No</label>
                                <input class="form-control" id="card-no" type="text" name="card-no">
                              </div>
                            </div>

                            <div class="row ">

                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="date_of_issue">Date of Issue</label>
                                <input class="form-control" id="date_of_issue" type="text" name="date_of_issue">
                              </div>

                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="age">Age</label>
                                <input class="form-control" id="age" type="text" name="age">
                              </div>
                            </div>

                            <!-- ---------- Mobile Number and Status ------------ -->
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="mobile_number">Mobile number</label>
                                <input class="form-control" id="mobile_number" type="text" name="mobile_number">
                              </div>

                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="status">Status</label>
                                <input class="form-control" name="status" id="status" type="text" name="status">
                              </div>
                            </div>

                            <!-- ------------ Address ------------ -->
                            <div class=" col-md-12">
                              <div class="form-group row ">
                                <label class="col-md-2 col-form-label label-static" for="textarea-input">Address</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="textarea-input" name="textarea-input" rows="3" placeholder="Content.."></textarea>
                                </div>
                              </div>
                            </div>



                            <!-- ---------Martial Status------------- -->
                            <div class="form-group row col-md-12">
                              <label class="col-md-2 col-form-label label-static">Marital Status</label>
                              <div class="col-md-9 col-form-label label-static">
                                  <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input" id="marital-status-radio1" type="radio" value="Married" name="marital-status">
                                    <label class="form-check-label" for="inline-radio1">Married</label>
                                  </div>
                                  <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input" id="marital-status-radio2" type="radio" value="Divorcee" name="marital-status">
                                    <label class="form-check-label" for="marital-status-radio2">Divorcee</label>
                                  </div>
                                  <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input" id="marital-status-radio3" type="radio" value="Widow" name="marital-status">
                                    <label class="form-check-label" for="marital-status-radio3">Widow</label>
                                  </div>
                                  <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input" id="marital-status-radio4" type="radio" value="Others" name="marital-status">
                                    <label class="form-check-label" for="marital-status-radio4">Others</label>
                                  </div>
                              </div>
                            </div>

                            <!-- ----------- Photo ----------------- -->
                            <div class="form-group row ">
                              <div class="col-md-2">
                                <label  class=" col-form-label label-static" for="file-input">Photo</label>
                              </div>

                              <div class="col-md-7">
                                <input id="file-input" type="file" name="file-input">
                              </div>
                            </div>


                            <!-- ------------ No of Members  & Status -------------- -->
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="no_of_members">No of Members in house</label>
                                <input class="form-control" id="no_of_members" type="text" name="no_of_members">
                              </div>

                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="status">Status</label>
                                <input class="form-control" name="status" id="status" type="text" name="status">
                              </div>
                            </div>



                            <div class="form-group">
                              <button class="btn btn-primary" type="submit" name="signup" value="Sign up">Sign up</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>
        </main>
      </div>
</div>

@endsection
