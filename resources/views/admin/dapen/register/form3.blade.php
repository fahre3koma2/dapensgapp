@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Visi Misi</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Visi Misi</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="card">
      <div class="card-body">
        <h4 class="text-black m-b-3">Step Wizard with Validation</h4>
        <div id="demo1">
          <div class="step-app">
            <ul class="step-steps">
              <li><a href="#tab1"><span class="number">1</span> Personal Info</a></li>
              <li><a href="#tab2"><span class="number">2</span> Job Status</a></li>
              <li><a href="#tab3"><span class="number">3</span> Interview</a></li>
              <li><a href="#tab4"><span class="number">4</span> Remark</a></li>
            </ul>
            <div class="step-content">
              <div class="step-tab-panel" id="tab1">
                <form name="frmRes" id="frmRes">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstName1">First Name:</label>
                        <input class="form-control" type="text" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastName1">Last Name:</label>
                        <input class="form-control" type="text" name="lastname" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstName1">Email Address:</label>
                        <input class="form-control" type="text" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastName1">Phone Number:</label>
                        <input class="form-control" type="text" name="phoneno" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="location1">Select City :</label>
                        <select class="custom-select form-control" id="location1" name="location">
                          <option value="">Select City</option>
                          <option value="Amsterdam">India</option>
                          <option value="Berlin">USA</option>
                          <option value="Frankfurt">Dubai</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date1">Date of Birth :</label>
                        <input class="form-control" id="date1" type="date">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="step-tab-panel" id="tab2">
                <h3>Tab2</h3>
                <form name="frmInfo" id="frmInfo">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="jobTitle1">Job Title :</label>
                        <input class="form-control" name="jobtitle1" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="videoUrl1">Company Name :</label>
                        <input class="form-control" name="videoUrl1" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="shortDescription1">Job Description :</label>
                        <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="step-tab-panel" id="tab3">
                <h3>Tab3</h3>
                <form name="frmLogin" id="frmLogin">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="int1">Interview For :</label>
                        <input class="form-control" name="int1" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="intType1">Interview Type :</label>
                        <select class="custom-select form-control" data-placeholder="Type to search cities" name="intType1" required>
                          <option value="Banquet">Normal</option>
                          <option value="Fund Raiser">Difficult</option>
                          <option value="Dinner Party">Hard</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Location1">Location :</label>
                        <select class="custom-select form-control" id="Location1" name="location">
                          <option value="">Select City</option>
                          <option value="India">India</option>
                          <option value="USA">USA</option>
                          <option value="Dubai">Dubai</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="jobTitle2">Interview Date :</label>
                        <input class="form-control" name="jobTitle2" type="date" required>
                      </div>
                      <div class="form-group">
                        <label>Requirements :</label>
                        <div class="c-inputs-stacked">
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="step-tab-panel" id="tab4">
                <h3>Tab4</h3>
                <form name="frmMobile" id="frmMobile">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="behName1">Behaviour :</label>
                        <input class="form-control" name="behName1" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="participants1">Confidance</label>
                        <input class="form-control" name="participants1" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="participants1">Result</label>
                        <select class="custom-select form-control" id="participants1" name="location">
                          <option value="">Select Result</option>
                          <option value="Selected">Selected</option>
                          <option value="Rejected">Rejected</option>
                          <option value="Call Second-time">Call Second-time</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="decisions1">Comments</label>
                        <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Rate Interviwer :</label>
                        <div class="c-inputs-stacked">
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                          <label class="inline custom-control custom-checkbox block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="step-footer">
              <button data-direction="prev" class="btn btn-light">Previous</button>
              <button data-direction="next" class="btn btn-primary">Next</button>
              <button data-direction="finish" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div></div>
      <!-- Main row -->
    </div>
@endsection
@section('injs')
   <!-- form wizard -->
    <script src="{{ url('dist/plugins/formwizard/jquery-steps.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script>
        var frmRes = $('#frmRes');
        var frmResValidator = frmRes.validate();

        var frmInfo = $('#frmInfo');
        var frmInfoValidator = frmInfo.validate();

        var frmLogin = $('#frmLogin');
        var frmLoginValidator = frmLogin.validate();

        var frmMobile = $('#frmMobile');
        var frmMobileValidator = frmMobile.validate();

        $('#demo1').steps({
        onChange: function (currentIndex, newIndex, stepDirection) {
            console.log('onChange', currentIndex, newIndex, stepDirection);
            // tab1
            if (currentIndex === 0) {
            if (stepDirection === 'forward') {
                var valid = frmRes.valid();
                return valid;
            }
            if (stepDirection === 'backward') {
                frmResValidator.resetForm();
            }
            }

            // tab2
            if (currentIndex === 1) {
            if (stepDirection === 'forward') {
                var valid = frmInfo.valid();
                return valid;
            }
            if (stepDirection === 'backward') {
                frmInfoValidator.resetForm();
            }
            }

            // tab3
            if (currentIndex === 2) {
            if (stepDirection === 'forward') {
                var valid = frmLogin.valid();
                return valid;
            }
            if (stepDirection === 'backward') {
                frmLoginValidator.resetForm();
            }
            }

            // tab4
            if (currentIndex === 3) {
            if (stepDirection === 'forward') {
                var valid = frmMobile.valid();
                return valid;
            }
            if (stepDirection === 'backward') {
                frmMobileValidator.resetForm();
            }
            }

            return true;

        },
        onFinish: function () {
            alert('Wizard Completed');
        }
        });
    </script>
    <script>
        $('#demo').steps({
        onFinish: function () {
            alert('Wizard Completed');
        }
        });
    </script>
@endsection

