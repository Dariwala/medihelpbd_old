@extends('layouts.frontend_master')

@section('title', 'Yoga Center')

@section('angular')
    <script src="{{url('app/frontend/frontend/yoga.view.js')}}"></script>
    <script src="{{url('app/frontend/frontend/yoga.b_view.js')}}"></script>
@endsection

@section('aside')

    <?php
        class BanglaConverter {
            public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
            public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
            
            public static function bn2en($number) {
                return str_replace(self::$bn, self::$en, $number);
            }
            
            public static function en2bn($number) {
                return str_replace(self::$en, self::$bn, $number);
            }
        }
    ?>

    <style type="text/css">
        .resultText{
            text-align: center;
            padding-top: 25px;
            padding-right: 15px;
            font-size: 1.4em;
            color: white;
            font-weight: bold;
        }
        .selectedSidebar{
            background-color: #e4e4e4;
        }
        #sidebar_main .sidebar_main_header {
            margin-bottom: 0px !important;
        }
        .uk-text-truncate {
            overflow: visible !important;
        }
        .uk-form-row+.uk-form-row {
            margin-top: 15px !important;
        }
        .black-border{
            border: 1px solid black;
        }
        .uk-tab-bn>li>a{
            font-size: 15px !important;
        }
    </style>

    @if(Session('language')=='bn')
        <aside id="sidebar_main">
            <div class="sidebar_main_header">
                <h4 class="resultText">মোট ফলাফল <br/>{{BanglaConverter::en2bn($total_result)}}</</h4>
            </div>
    
    
            <div class="menu_section">
                <ul>
                    @foreach($aside_results as $aside_result)
                        @if($yoga->id == $aside_result->id)
                            <li class="selectedSidebar">
                                <a href="{{ url('frontendyoga/view'.'/'.$aside_result->id.'/'.$aside_result->subdistrict_id)}}">
                                    <span class="md-list-heading">{{$aside_result->b_yoga_name}}</span>
                                </a>
                            </li>
                        @else
                            <li title="">
                                <a href="{{ url('frontendyoga/view'.'/'.$aside_result->id.'/'.$aside_result->subdistrict_id)}}">
                                    <span class="md-list-heading">{{$aside_result->b_yoga_name}}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </aside>
    @else
        <aside id="sidebar_main">
            <div class="sidebar_main_header">
                <h4 class="resultText">Total Result <br/>{{$total_result}}</h4>
            </div>
    
    
            <div class="menu_section">
                <ul>
                    @foreach($aside_results as $aside_result)
                        @if($yoga->id == $aside_result->id)
                            <li class="selectedSidebar">
                                <a href="{{ url('frontendyoga/view'.'/'.$aside_result->id.'/'.$aside_result->subdistrict_id)}}">
                                    <span class="md-list-heading">{{$aside_result->yoga_name}}</span>
                                </a>
                            </li>
                        @else
                            <li title="">
                                <a href="{{ url('frontendyoga/view'.'/'.$aside_result->id.'/'.$aside_result->subdistrict_id)}}">
                                    <span class="md-list-heading">{{$aside_result->yoga_name}}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </aside>
    @endif

@endsection

@section('content')

    @if(Session('language')=='bn')
        <div class="uk-width-large-7-10">
            <div class="md-card">
                <div class="user_heading">
                    <div class="user_heading_avatar">
                        @if($yoga->photo_path == '')
                        <div class="thumbnail"><img alt="yoga"  src="{{asset('/yoga.PNG')}}">
                        </div>
                        @else
                        <div class="thumbnail"><img alt="yoga" src="{{ url($yoga->photo_path) }}">
                        </div>
                        @endif
                    </div>

                    <div class="user_heading_content">
                        <h2 class="heading_b uk-margin-bottom"><span style= "margin: 10px" class="uk-text-truncate">{{$yoga->b_yoga_name}}</span>
                        </h2>
                    </div>
                </div>


                <div class="user_content">
                    <ul class="uk-tab" data-uk-sticky="{ top: 48, media: 960 }" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" id="user_profile_tabs">
                        <li class="uk-active">
                            <a style="text-align:center;" href="#">সম্বন্ধে</a>
                        </li>
                        
                        <li>
                            <a style="text-align:center;" href="#">প্রবন্ধ </a>
                        </li>
                        
                        <li ng-controller="ViewBnYogaController">
                            <a style="text-align:center;" ng-click="getSubServiceDropDown()" href="#">সেবা</a>
                        </li>
                    </ul>


                    <ul class="uk-switcher uk-margin" id="user_profile_tabs_content">
                        <li><?php echo $yoga->b_yoga_description; ?>

                            <div class="uk-grid" data-uk-grid-margin="">
                                <div class="uk-width-large-1-1">
                                    <h4 class="heading_c uk-margin-small-bottom uk-margin-small-top">যোগাযোগের তথ্য</h4>


                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE88A;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{!! nl2br($yoga->b_yoga_address) !!}</span> <span class="uk-text-small uk-text-muted hidden">ঠিকানা</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                            </div>


                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{!! nl2br ($yoga->b_yoga_phone_no) !!}</span>
                                                 <span class="uk-text-small uk-text-muted hidden">ফোন</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" class="md-list-addon-icon material-icons">&#xE158;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading ">{{$yoga->yoga_email_ad}}</span>
                                                <span class="uk-text-small uk-text-muted hidden">ই-মেইল</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" style="font-size:30px;" class="md-list-addon-icon material-icons">&#xE894;</i>
                                            </div>

                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{{$yoga->yoga_web_link}}</span> <span class="uk-text-small uk-text-muted hidden">ওয়েবসাইট</span>
                                            </div>
                                        </li>
                                        <li class="hidden">
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" style="font-size:30px;" class="md-list-addon-icon material-icons">&#xE894;</i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="uk-width-large-1-1">
                                <h4 class="heading_c uk-margin-small-bottom uk-margin-small-top">সাধারণ তথ্য</h4>
                                <ul class="md-list uk-margin-small-top">
                                    <li>
                                        <div class="md-list-content">
                                            <span class="hidden">General:</span> <span><?php echo $yoga->b_yoga_total_bed; ?></span>
                                        </div>
                                    </li>
                                </ul>  
                            </div> 
                            
                            <!-- START google maps -->
                            
                            @if( $yoga->yoga_latitude != null && $yoga->yoga_longitude != null )
                            
                            <div class="uk-width-large-1-1 google_maps_show">
                                 <iframe 
                                    src="https://www.google.com/maps/embed/v1/search?key=AIzaSyD3_tCn50Ef5Z2zUJxkXi26T486gIzIHp8&q={{ $yoga->yoga_latitude }}, {{ $yoga->yoga_longitude }}&zoom=15" frameborder="0" height="600" style="border:0; width:100%;" allowfullscreen>
                                </iframe>
                            </div>
                            
                            @endif
                            
                            <!-- END google maps -->
                            
                        </li>
                        
                        <li>
                            <ul class="md-list">
                                @foreach($notices as $notice)
                                <li style="padding-top: 0px;">
                                    <div class="md-list-content">
                                            <span class="uk-margin-right"><?php echo $notice->b_yoga_notice_description; ?></span>
                                      
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                         
                        <li ng-controller="ViewBnYogaController">
                            <input type="hidden" ng-init="yoga_id='asdfg'" value="{{$yoga_id}}" name="yoga_id" ng-model="yoga_id">
                            <div   class="uk-form-row">
                                <input id="service_id" name="service_id" ng-model="service_id" ng-change="getYogaService()"   style="width: 100%;" />
                            </div>
                            <ul class="md-list">
                                <li ng-repeat = "service in services">
                                    <div class="md-list-content">
                                        <h4 class="heading_c">@{{service.b_yoga_service_title}}</h4>
                                        <div>
                                            <span class="uk-margin-right" ng-bind-html="trustAsHtml(service.b_yoga_service_description)">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div class="uk-width-large-7-10">
            <div class="md-card">
                <div class="user_heading">
                    <div class="user_heading_avatar">
                        @if($yoga->photo_path == '')
                        <div class="thumbnail"><img alt="yoga"  src="{{asset('/yoga.PNG')}}">
                        </div>
                        @else
                        <div class="thumbnail"><img alt="yoga" src="{{ url($yoga->photo_path) }}">
                        </div>
                        @endif
                    </div>

                    <div class="user_heading_content">
                        <h2 class="heading_b uk-margin-bottom"><span style= "margin: 10px" class="uk-text-truncate">{{$yoga->yoga_name}}</span>
                        </h2>
                    </div>
                </div>


                <div class="user_content">
                    <ul class="uk-tab" data-uk-sticky="{ top: 48, media: 960 }" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" id="user_profile_tabs">
                        <li class="uk-active">
                            <a style="text-align:center;" href="#">About</a>
                        </li>
                        
                        <li>
                            <a style="text-align:center;" href="#">Article</a>
                        </li>
                        
                        <li ng-controller="ViewYogaController">
                            <a style="text-align:center;" ng-click="getSubServiceDropDown()" href="#">Service</a>
                        </li>
                    </ul>


                    <ul class="uk-switcher uk-margin" id="user_profile_tabs_content">
                        <li><?php echo $yoga->yoga_description; ?>

                            <div class="uk-grid" data-uk-grid-margin="">
                                <div class="uk-width-large-1-1">
                                    <h4 class="heading_c uk-margin-small-bottom uk-margin-small-top">Contact Info</h4>


                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE88A;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{!! nl2br($yoga->yoga_address) !!}</span> <span class="uk-text-small uk-text-muted hidden">Address</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                            </div>


                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{!! nl2br ($yoga->yoga_phone_no) !!}</span>
                                                 <span class="uk-text-small uk-text-muted hidden">Phone</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" class="md-list-addon-icon material-icons">&#xE158;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading ">{{$yoga->yoga_email_ad}}</span>
                                                <span class="uk-text-small uk-text-muted hidden">Email</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" style="font-size:30px;" class="md-list-addon-icon material-icons">&#xE894;</i>
                                            </div>

                                            <div class="md-list-content">
                                                <span style="margin-top:5px" class="md-list-heading">{{$yoga->yoga_web_link}}</span> <span class="uk-text-small uk-text-muted hidden">Website</span>
                                            </div>
                                        </li>
                                        <li class="hidden">
                                            <div class="md-list-addon-element">
                                                <i style="margin: 0" style="font-size:30px;" class="md-list-addon-icon material-icons">&#xE894;</i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="uk-width-large-1-1">
                                <h4 class="heading_c uk-margin-small-bottom uk-margin-small-top">General Info</h4>
                                <ul class="md-list uk-margin-small-top">
                                    <li>
                                        <div class="md-list-content">
                                            <span class="hidden">General:</span> <span><?php echo $yoga->yoga_total_bed; ?></span>
                                        </div>
                                    </li>
                                </ul>  
                            </div>      
                            
                            <!-- START google maps -->
                            
                            @if( $yoga->yoga_latitude != null && $yoga->yoga_longitude != null )
                            
                            <div class="uk-width-large-1-1 google_maps_show">
                                 <iframe 
                                    src="https://www.google.com/maps/embed/v1/search?key=AIzaSyD3_tCn50Ef5Z2zUJxkXi26T486gIzIHp8&q={{ $yoga->yoga_latitude }}, {{ $yoga->yoga_longitude }}&zoom=15" frameborder="0" height="600" style="border:0; width:100%;" allowfullscreen>
                                </iframe>
                            </div>
                            
                            @endif
                            
                            <!-- END google maps -->
                            
                        </li>
                        
                        <li>
                            <ul class="md-list">
                                @foreach($notices as $notice)
                                <li style="padding-top: 0px;">
                                    <div class="md-list-content">
                                            <span class="uk-margin-right"><?php echo $notice->yoga_notice_description; ?></span>
                                      
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                         
                        <li ng-controller="ViewYogaController">
                            <input type="hidden" ng-init="yoga_id='asdfg'" value="{{$yoga_id}}" name="yoga_id" ng-model="yoga_id">
                            <div   class="uk-form-row">
                                <input id="service_id" name="service_id" ng-model="service_id" ng-change="getYogaService()"   style="width: 100%;" />
                            </div>
                            <ul class="md-list">
                                <li ng-repeat = "service in services">
                                    <div class="md-list-content">
                                        <h4 class="heading_c">@{{service.yoga_service_title}}</h4>
                                        <div>
                                            <span class="uk-margin-right" ng-bind-html="trustAsHtml(service.yoga_service_description)">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif

@endsection