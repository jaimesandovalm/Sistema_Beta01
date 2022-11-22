@extends('Admin1.Layouts.layout')

@section('content')
<div class="content-viewport">
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <p class="grid-header">Input Types</p>
                <div class="grid-body">
                    <div class="item-wrapper">
                        <div class="row mb-3">
                            <div class="col-md-8 mx-auto">
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType1">Name</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="text" class="form-control" id="inputType1" value="Sara Watson">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType12">Email</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="email" class="form-control" id="inputType2" value="asfabiv@rud.eu">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType13">Password</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="password" class="form-control" id="inputType3" value="00000000"> </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType1">Number</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="number" class="form-control" id="inputType4" value="83393922">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType5">Disabled</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="text" class="form-control" id="inputType5" value="Hulda Stevenson" disabled>
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType7">Placeholder</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="text" class="form-control" id="inputType7" placeholder="Placeholder Text">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType8">Read-only</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <input type="text" class="form-control" id="inputType8" readonly="readonly" value="Hulda Stevenson">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                        <label for="inputType9">Textarea</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                        <textarea class="form-control" id="inputType9" cols="12" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
