@extends('ncms.layouts.app')

@section('content')

{{--    <div class="layout-px-spacing">--}}
        <div class="container">
            <div class="container">



                <div class="row">
                    <div id="flStackForm" class="col-lg-6 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>@lang('auth.employee')</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">


                                <form>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Email address">
                                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" id="sPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check pl-0">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="sChkbox">
                                            <label class="custom-control-label" for="sChkbox">Subscribe to weekly newsletter</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>


                            </div>
                        </div>
                    </div>




{{--    </div>--}}

@endsection
