@extends('ncms.layouts.app')

@section('content')

    <div class="layout-px-spacing">
        <div class="row" id="cancel-row">
            <div class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>@lang('employee.emp_registration')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                            <form>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">@lang('employee.fname')</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="@lang('employee.fname')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.lname')</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="@lang('employee.lname')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.email')</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('employee.email_exp')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.position')</label>
                                        <input type="email" class="form-control" id="position" name="position" placeholder="@lang('employee.position')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.address')</label>
                                        <input type="text" class="form-control" id="address"  name="address" placeholder="@lang('employee.address')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.hiring_date')</label>
                                        <input type="date" class="form-control" id="hiring_date" name="hiring_date"  placeholder="@lang('employee.hiring_date')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.office_address')</label>
                                        <input type="text" class="form-control" id="office_address"  name="office_address" placeholder="@lang('employee.office_address')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.shipment_address')</label>
                                        <input type="text" class="form-control" id="shipment_address" name="shipment_address" placeholder="@lang('employee.shipment_address')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.gender')</label>
                                        <select class="form-control  basic">
                                            <option selected disabled>@lang('employee.select_option')</option>
                                            <option>@lang('employee.male')</option>
                                            <option>@lang('employee.female')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.national_id')  </label>
                                        <input type="text" class="form-control" id="national_id" name="national_id" placeholder="@lang('employee.national_id')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">@lang('employee.phone')</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="@lang('employee.phone')">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>@lang('employee.profile_picture')<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> <i data-feather="x" width="15" height="15"></i> </a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addRow')
<script>
    var ss = $(".basic").select2({
        tags: true,
    });

    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>

@endsection

