@extends('layouts.admin_master')

@section('title', 'Foreign Medical Information Center')

@section('content')
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Foreign Medical Information Center</h3>
        @include('partials.flash_message')
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-overflow-container">
                   {!! Form::open(['url' => 'foreignmedical/add', 'method' => 'post', 'class' => 'uk-form-stacked']) !!}
                        <div class="uk-grid" data-uk-grid-margin>
                            
                            @if($district_id == 0 )
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <select id="district_id" name="district_id" data-md-selectize>
                                        <option value="">Select District</option>
                                        @foreach($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p style="color:red;">{{ $errors->has('district_id')?$errors->first('district_id'):'' }}</p>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <select id="select_demo_4" ng-model="name" name="subdistrict_id" data-md-selectize>
                                        <option value="">Select Sub-District</option>
                                    </select>
                                </div>
                                <p style="color:red;">{{ $errors->has('subdistrict_id')?$errors->first('subdistrict_id'):'' }}</p>
                            </div>
                            @else
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <select id="district_id" name="district_id" data-md-selectize>
                                        <option value="">Select District</option>
                                        @foreach($districts as $district)
                                        <option value="{{ $district->id}}" {{ $district_id == $district->id ? 'selected="selected"' : '' }}>{{ $district->district_name }}</option> 
                                        @endforeach
                                    </select>
                                </div>
                                <p style="color:red;">{{ $errors->has('district_id')?$errors->first('district_id'):'' }}</p>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <select id="select_demo_4" ng-model="name" name="subdistrict_id" data-md-selectize>
                                        <option value="">Select Sub-District</option>
                                        @foreach($subdistricts as $subdistrict)
                                        <option value="{{ $subdistrict->id }}">{{ $subdistrict->sub_district_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p style="color:red;">{{ $errors->has('subdistrict_id')?$errors->first('subdistrict_id'):'' }}</p>
                            </div>
                            @endif

                            <div class="uk-width-medium-1-2 uk-margin-top">
                                <div class="parsley-row">
                                    <label for="foreignmedical_name">Name<span class="req">*</span></label>
                                    <input type="text" id="foreignmedical_name" name="foreignmedical_name" required class="md-input" /> 
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2 uk-margin-top">
                                <div class="parsley-row">
                                    <label for="b_foreignmedical_name">নাম<span class="req">*</span></label>
                                    <input type="text" id="b_foreignmedical_name" name="b_foreignmedical_name" required class="md-input" /> 
                                </div>
                            </div>


                        </div>
                        <div class="uk-float-right uk-margin-top">
                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#district_id').on('change',function(){
        var district_id = $('#district_id option:selected').val();
        var address = "/foreignmedical/add/"+district_id;
        window.location=address;
    });
</script>
@endsection