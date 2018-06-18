@extends('welcome')
@section('content1')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Form Elements</h4>
                        </div>
                        <div class="card-body ">
                            <form method="get" action="/" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">With help</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                                <small class="form-text text-muted">A block of help text that breaks onto a new line.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Date picker</label>
                                            <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" placeholder="Date Picker Here" />
                                            </div>
                                            <script>
                                                $('.datepicker').datetimepicker({
                                                    format: 'MM/DD/YYYY',
                                                    icons: {
                                                        time: "fa fa-clock-o",
                                                        date: "fa fa-calendar",
                                                        up: "fa fa-chevron-up",
                                                        down: "fa fa-chevron-down",
                                                        previous: 'fa fa-chevron-left',
                                                        next: 'fa fa-chevron-right',
                                                        today: 'fa fa-screenshot',
                                                        clear: 'fa fa-trash',
                                                        close: 'fa fa-remove'
                                                    }
                                                });

                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="placeholder" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Static control</label>
                                            <div class="col-sm-10">
                                                <p class="form-control-static"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741c1118181b3417061115001d021159001d195a171b19">[email&#160;protected]</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Checkboxes and radios</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                        First Checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                        Second Checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="option1">
                                                        <span class="form-check-sign"></span>
                                                        Radio is off
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="option2" checked>
                                                        <span class="form-check-sign"></span>
                                                        Radio is on
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Inline checkboxes</label>
                                            <div class="col-sm-10">
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option1">
                                                        <span class="form-check-sign"></span>
                                                        a
                                                    </label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option2">
                                                        <span class="form-check-sign"></span>
                                                        b
                                                    </label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option3">
                                                        <span class="form-check-sign"></span>
                                                        c
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection