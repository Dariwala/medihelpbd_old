@extends('layouts.admin_master')

@section('title', 'Herbal Medicine Center')


@section('content')
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Herbal Medicine Center</h3>
        @include('partials.flash_message')
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-overflow-container">
                    {!! Form::open(['url' => array('herbal-center/edit/notice/add', $herbal_center_id), 'method' => 'post', 'class' => 'uk-form-stacked']) !!}
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-1">
                                <div class="uk-grid uk-grid-medium form_section form_section_separator" id="notice_form_section" data-uk-grid-match>
                                    <div class="uk-width-9-12">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2 uk-margin-top">
                                                <label>Description</label>
                                                <div class="parsley-row">
                                                    <textarea class="md-input" id="herbal_center_notice_description" name="herbal_center_notice_description" cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2 uk-margin-top">
                                                <label>বর্ণনা</label>
                                                <div class="parsley-row">
                                                    <textarea class="md-input" id="b_herbal_center_notice_description" name="b_herbal_center_notice_description" cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-float-right uk-margin-top">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    CKEDITOR.replace('herbal_center_notice_description');
</script>
<script type="text/javascript">
    CKEDITOR.replace('b_herbal_center_notice_description');
</script>
@endsection