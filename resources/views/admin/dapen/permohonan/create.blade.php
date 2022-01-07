@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Laporan Berita Duka</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>Laporan Berita Duka</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
      <div class="card">
      <div class="card-body">
        <h4 class="text-black m-b-3">Step wizard</h4>
        <div id="demo">
          <div class="step-app">
            <ul class="step-steps">
              <li><a href="#step1"><span class="number">1</span> Biodata</a></li>
              <li><a href="#step2"><span class="number">2</span> Lampiran</a></li>
              <li><a href="#step3"><span class="number">3</span> Submit</a></li>
            </ul>
            <div class="step-content">
              <div class="step-tab-panel" id="step1">
                <form>
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstName1">First Name:</label>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastName1">Last Name:</label>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstName1">Email Address:</label>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastName1">Phone Number:</label>
                        <input class="form-control" type="text">
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
              <div class="step-tab-panel" id="step2">
<div class="col-lg-12 m-b-3">
                    <h4 class="text-black">Data Lampiran</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-info text-white">
                        <tr>
                            <th scope="col" width="80%">Lampiran</th>
                            <th scope="col" width="20%">Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Fotocopy KTP
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button> |
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Fotocopy NPWP
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button> |
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>
              <div class="step-tab-panel" id="step3">
                <div class="row m-t-2">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="int1">Interview For :</label>
                      <input class="form-control" id="int1" type="text">
                    </div>
                    <div class="form-group">
                      <label for="intType1">Interview Type :</label>
                      <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
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
                      <input class="form-control" id="jobTitle2" type="date">
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
    <script src="{{ url('dist/plugins/formwizard/jquery-steps.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

    <script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
    </script>


    <script src="{{ url('dist/plugins/table-expo/filesaver.min.js') }}"></>
    <script src="{{ url('dist/plugins/table-expo/xls.core.min.js') }}"></script>
    <script src="{{ url('dist/plugins/table-expo/tableexport.js') }}"></script>
    {{--  <script>
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
    </script>  --}}
@endsection

