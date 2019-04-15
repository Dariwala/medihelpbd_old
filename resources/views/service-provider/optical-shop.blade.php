<form id="form_validation" method="post" action="{{route('service-optical-shop')}}" class="uk-form-stacked">
{!! csrf_field() !!}
<input type="hidden" name="subject" value="Optical Shop" />
@if(Session('language')=='bn')

    <p style="font-size: 16px;font-weight: bold;">সম্বন্ধে</p>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">প্রকার (সরকারি/বেসরকারি/অন্যান্য)</label>
                <textarea type="text" name="ab_type" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">সেবা ঘণ্টা</label>
                <textarea type="text" name="ab_service_hour" class="md-input" rows="2" cols="10"></textarea>
            </div>
    </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">কার্য দিবস</label>
                <textarea type="text" name="ab_working_day" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
        <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">বন্ধ</label>
                <textarea type="text" name="ab_close" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    <br>
     <p style="font-size: 16px;font-weight: bold;">যোগাযোগের তথ্য </p>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="name">নাম </label>
                <textarea type="text" name="con_info_name" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="address">ঠিকানা</label>
                <textarea type="text" name="con_info_address"address  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">    
             <div class="parsley-row">
                <label for="contact_cumber">যোগাযোগের নম্বর </label>
                <textarea type="text" name="con_info_contact_number"  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">জরুরী নম্বর </label>
                <textarea type="text" name="con_info_emergency_number"  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">হট লাইন</label>
                <textarea type="text" name="con_info_hotline"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>       
    </div>

    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">ই-মেইল</label> 
                <textarea type="text" name="con_info_email"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <br>
  <p style="font-size: 16px;font-weight: bold; margin-bottom: 25px;">সাধারণ তথ্য  </p>
     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ব্যবসার ধরণ  </label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Retailer" name="business_category"id="val_radio_male" data-md-icheck ><span style="padding:5px">বিক্রেতা</span></label> 
                </span> 
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="whole Seller" id="val_radio_male" data-md-icheck name="business_category"> <span style="padding:5px">পাইকারি বিক্রেতা</span></label> 
                </span>
                 <br>
                <span  style="padding:5px 5px 5px 0px" class="icheck-inline">
                  <label  class="inline-label"><input type="radio"  value="Retailer & whole Seller"id="val_radio_male" data-md-icheck name="business_category"><span style="padding:5px"> উভয়</span></label>
              </span>
            </div>
        </div>
    </div>
   
    
    <br>
    
    <label style="font-size: 16px;font-weight: bold">ডাক্তার</label> <span>(যদি থাকে, ডক্টরস্‌ প্যানেলে বিস্তারিত )</span>
      
    <br>
    <br>
    
    <p style="font-size: 18px;font-weight: bold;background:red;color:white; text-align:center">সেবা </p>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold">অ্যাম্বুলেন্স</p>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">সেবার পরিধি</label>
                <input type="text" name="amb_service_area"  class="md-input" />
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">ভাড়া</label>
                <input type="text" name="amb_fare"  class="md-input" />
            </div>
        </div>
    </div>


     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ভাড়া আলোচনা সাপেক্ষে </label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="fare_negotiable"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="fare_negotiable"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">সেবা ঘণ্টা</label>
                <input type="text" name="amb_service_hour"  class="md-input" />
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">কার্য দিবস  </label>
                <input type="text" name="amb_working_day"  class="md-input" />
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">বন্ধ </label>
                <input type="text" name="amb_cont_close"  class="md-input" />
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>

         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">যোগাযোগের নম্বর</label>
                <input type="text" name="amb_cont_number"  class="md-input" />
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom:25px;">সুযোগ-সুবিধা </p>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">শীতাতপ নিয়ন্ত্রিত </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="yes" name="air_condition"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="no" id="fare_negotiable" data-md-icheck name="air_condition"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">গুরুতর যত্নের জন্য মেডিক্যাল কর্মী </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_staf_cate"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_staf_cate"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">অক্সিজেন সিলিন্ডার </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="oxygen_cylinder"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="oxygen_cylinder"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">স্ট্রেচার</label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="stretcher"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="stretcher"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">চাকাওয়ালা চেয়ার </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="wheel_chair"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="wheel_chair"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>

    <br> 
    
    <p style="font-size: 16px;font-weight: bold">আই সি ইউ অ্যাম্বুলেন্স</p>

     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">সেবার পরিধি</label>
                <input type="text" name="ac_amb_service_area"  class="md-input" />
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">ভাড়া</label>
                <input type="text" name="ac_amb_fare"  class="md-input" />
            </div>
        </div>
    </div>

     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ভাড়া আলোচনা সাপেক্ষে </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_fare_negotiable"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_fare_negotiable"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">সেবা ঘণ্টা</label>
                <textarea type="text" name="ac_amb_service_hour" class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">কার্য দিবস  </label>
                <textarea type="text" name="ac_amb_working_day"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">বন্ধ </label>
                <textarea type="text" name="ac_amb_cont_close"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>

         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">যোগাযোগের নম্বর</label>
                <textarea type="text" name="ac_amb_cont_number"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom:25px;"> সুযোগ-সুবিধা </p>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">গুরুতর যত্নের জন্য মেডিক্যাল কর্মী</label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="yes" name="ac_air_condition"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="no" id="fare_negotiable" data-md-icheck name="ac_air_condition"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
   
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class=""> অক্সিজেন সিলিন্ডার </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_oxygen_cylinder"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_oxygen_cylinder"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">স্ট্রেচার</label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_stretcher"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_stretcher"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">চাকাওয়ালা চেয়ার</label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_wheel_chair"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_wheel_chair"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>

    <br>
    
    <p style="font-size: 16px;font-weight: bold">সুযোগ-সুবিধা   </p>
    
    <br>

    <p style="font-size: 16px;font-weight: bold; margin-bottom:25px;"> হোম ডেলিভারি সার্ভিস  </p>


    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">সেবার পরিধি</label>
                <textarea type="text" name="home_delivary_service_area"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">ডেলিভারি চার্জ</label>
                <textarea type="text" name="home_delivary_delivery_charge"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>

      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ডেলিভারি চার্জ আলোচনা সাপেক্ষে </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="home_delivary_negotiable"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="home_delivary_negotiable"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">সেবা ঘণ্টা</label>
                <textarea type="text" name="home_delivary_service_hour"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">কার্য দিবস </label>
                <textarea type="text" name="home_delivary_working_day"  class="md-input" roww="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">বন্ধ</label>
                <textarea type="text" name="home_delivary_close"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">যোগাযোগের নম্বর</label>
                <textarea type="text" name="home_delivary_contuct_number"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
  

    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom:25px;">চিকিৎসা সেবা</p>

     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">রক্তচাপ নির্ণয় করা হয় </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_diabets_test"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_diabets_test"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>

     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ডায়বেটিস পরীক্ষা করা হয় </label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_diabetes_test"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_diabetes_test"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">ওজন মাপা হয়</label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_weight_measrement"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ<span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_weight_measrement"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">নেবুলাইজারের মাধ্যমে গ্যাস দেওয়া হয়</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_nebulization"id="val_radio_male" data-md-icheck ><span style="padding:5px">হ্যাঁ</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_nebulization"> <span style="padding:5px">না</span></label> 
                 </span>
            </div>
        </div>
    </div>
      

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="message">আরও তথ্য (যদি থাকে)
                </label>
                <textarea class="md-input" name="more_details" cols="10" rows="2" data-parsley-trigger="keyup"  data-parsley-validation-threshold="10" d></textarea>
            </div>
        </div>
    </div>
    <br><br>
   <input  type="submit" class="md-btn md-btn-danger md-btn-large" name="submit" value="পাঠিয়ে দিন" style="float:right">

@else  

    <p style="font-size: 16px;font-weight: bold;">About</p>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">Type (Government/Private/Others)</label>
                <textarea type="text" name="ab_type" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">Service Hour</label>
                <textarea type="text" name="ab_service_hour" class="md-input" rows="2" cols="10"></textarea>
            </div>
    </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">Working Day </label>
                <textarea type="text" name="ab_working_day" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="fullname">Closed</label>
                <textarea type="text" name="ab_close" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold;">Contact Info</p>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="name">Name </label>
                <textarea type="text" name="con_info_name" class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="address">Address</label>
                <textarea type="text" name="con_info_address"address  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">    
             <div class="parsley-row">
                <label for="contact_cumber">Contact Number </label>
                <textarea type="text" name="con_info_contact_number"  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">Emergency Number </label>
                <textarea type="text" name="con_info_emergency_number"  class="md-input" rows="2" cols="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">Hotline</label>
                <textarea type="text" name="con_info_hotline"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>       
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">E-mail</label>
                <textarea type="text" name="con_info_email"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom: 5px;">General Info</p>
    
    <br>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Business Category</label> <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Retailer" name="business_category"id="val_radio_male" data-md-icheck ><span style="padding:5px">Retailer</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="whole Seller" id="val_radio_male" data-md-icheck name="business_category"><span style="padding:5px">Whole Seller</span></label> 
                 </span>
                 <br>
                <span  style="padding:5px 5px 5px 0px" class="icheck-inline">
                  <label  class="inline-label"><input type="radio"  value="Retailer & whole Seller"id="val_radio_male" data-md-icheck name="business_category"><span style="padding:5px"> Both</span></label>
              </span>
              <br>
            </div>
        </div>
    </div>
    
    
    <br>
    
    <label style="font-size: 16px;font-weight: bold; margin-top: 6px;">Doctor </label><span>(If Any, Write details in the Doctors Panel)</span>
     
    <br>
    <br>
    
    <p style="font-size: 18px;font-weight: bold; background:red; color:white; text-align: center; margin-bottom: 2px;">Service</p>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold">Ambulance</p>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">Service Area</label>
                <textarea type="text" name="amb_service_area"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">Fare</label>
                <input type="text" name="amb_fare"  class="md-input" />
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Fare Negotiable</label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="fare_negotiable"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px;" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="fare_negotiable"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Service Hour</label>
                <input type="text" name="amb_service_hour"  class="md-input" />
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">Working Day</label>
                <input type="text" name="amb_working_day"  class="md-input" />
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">Closed</label>
                <input type="text" name="amb_cont_close"  class="md-input" />
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
    
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Contact Number</label>
                <input type="text" name="amb_cont_number"  class="md-input" />
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom: 25px;">Ambulance Facilities </p>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Air Conditioned</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="yes" name="air_condition"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="no" id="fare_negotiable" data-md-icheck name="air_condition"> <span style="padding:5px">NO</span></label> 
                 </span>
                <span  style="padding:5px 5px 5px 0px" class="icheck-inline">
                
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Non Air Conditioned </label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="no_air_condition"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="NO" id="val_radio_male" data-md-icheck name="no_air_condition"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Medical Staff for Critical Care</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_staf_cate"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_staf_cate"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Oxygen Cylinder</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="oxygen_cylinder"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="oxygen_cylinder"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Stretcher</label> 
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="stretcher"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="stretcher"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Wheel Chair</label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="wheel_chair"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="wheel_chair"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold">ICU Ambulance</p>
    
     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">Service Area</label>
                <textarea type="text" name="ac_amb_service_area"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">Fare</label>
                <textarea type="text" name="ac_amb_fare"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    
     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Fare Negotiable</label> 
                <br>
                <span style="padding:5px 5px 5px 0px;" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_fare_negotiable" id="val_radio_male" data-md-icheck ><span style="padding:5px;">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px;" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_fare_negotiable"><span style="padding:5px">NO</span></label> 
                </span>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Service Hour</label>
                <textarea type="text" name="ac_amb_service_hour" class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="emergency_number">Working Day</label>
                <textarea type="text" name="ac_amb_working_day"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="hotline">Closed</label>
                <textarea type="text" name="ac_amb_cont_close"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
    
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Contact Number</label>
                <textarea type="text" name="ac_amb_cont_number"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold; margin-bottom: 25px;"> ICU Ambulance Facilities </p>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Medical Staff for Critical Care</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_medical_staf_cate"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_medical_staf_cate"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Oxygen Cylinder</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_oxygen_cylinder"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_oxygen_cylinder"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Stretcher</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_stretcher"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_stretcher"> <span style="padding:5px">NO</span></label> 
                </span>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Wheel Chair</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="ac_wheel_chair"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="ac_wheel_chair"> <span style="padding:5px">NO</span></label> 
                </span>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold">Facilities</p>
    
    <br>
    
    <p style="font-size: 16px;font-weight: bold"> Home Delivery Service </p>
    
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Service Area</label>
                <textarea type="text" name="home_delivary_service_area"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Delivery Charge</label>
                <textarea type="text" name="home_delivary_delivery_charge"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Delivery Charge Negotiable</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="home_delivary_negotiable"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="home_delivary_negotiable"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Service Hour</label>
                <textarea type="text" name="home_delivary_service_hour"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Working Day</label>
                <textarea type="text" name="home_delivary_working_day"  class="md-input" roww="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Closed</label>
                <textarea type="text" name="home_delivary_close"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    <div class="uk-grid" data-uk-grid-margin>
         <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="email">Contact Number</label>
                <textarea type="text" name="home_delivary_contuct_number"  class="md-input" rows="2" cols="10" ></textarea>
            </div>
        </div>
    </div>
    
    <br>
    
    <p style="font-size: 16px; font-weight: bold; margin-bottom: 25px;">Medical Service</p>
    
     <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Blood Presssure Assessment </label>
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_blood_presssure"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_blood_presssure"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Weight Measurement </label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_weight_measrement"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_weight_measrement"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Diabetes Test </label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_diabetes_test"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_diabetes_test"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
    
      <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-form-row parsley-row">
                <label for="emergency_number" class="">Nebulization</label> 
                <br>
                 <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                   <label class="inline-label"><input type="radio" value="Yes" name="medical_service_nebulization"id="val_radio_male" data-md-icheck ><span style="padding:5px">YES</span></label> 
                </span>
                <br>
                <span style="padding:5px 5px 5px 0px" class="icheck-inline">
                     <label class="inline-label"><input type="radio" value="No" id="val_radio_male" data-md-icheck name="medical_service_nebulization"> <span style="padding:5px">NO</span></label> 
                 </span>
            </div>
        </div>
    </div>
 
 
    
    <br>
    
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="parsley-row">
                <label for="message">More Information (If Any)</label>
                <textarea class="md-input" name="more_details" cols="10" rows="2" data-parsley-trigger="keyup"  data-parsley-validation-threshold="10" d></textarea>
            </div>
        </div>
    </div>
    <br>
    <input  type="submit" class="md-btn md-btn-danger md-btn-large" name="submit"value="send" style="float:right">
                    
@endif

</form>