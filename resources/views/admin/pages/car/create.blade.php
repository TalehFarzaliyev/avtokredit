@extends('admin.layouts.app')
@section('title', __('car.title_create'))
@section('content')
<div class="page-content pt-0">
   <!-- Main content -->
   <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
         <div class="card">


            <div class="card-body">
               <form action="{{route('admin.car.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">

                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('name') text-danger @enderror" for="name">{{__('messages.name')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="text" name="name" id="name" class="form-control @error('name') border-danger @enderror" placeholder="{{__('messages.name')}}" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label for="status" class="font-weight-semibold @error('status') text-danger @enderror">{{__('messages.status')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <select name="status" class="select" id="status" @error('status') data-container-css-class="border-danger text-danger" @enderror>
                              <option {{old('status') == 1 ? 'selected': ''}} value="1">{{__('messages.enable')}}</option>
                              <option {{old('status') == '0'? 'selected': ''}}  value="0">{{__('messages.disable')}}</option>
                           </select>
                        </div>
                        @error('status')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('email') text-danger @enderror" for="email">{{__('messages.email')}}</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="{{__('messages.email')}}" value="{{ old('email') }}">
                        @error('email')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>


                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('phone') text-danger @enderror" for="phone">{{__('messages.phone')}}</label>
                        <input type="number" name="phone" id="phone" class="form-control @error('phone') border-danger @enderror" placeholder="{{__('messages.phone')}}" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('visit') text-danger @enderror" for="visit">{{__('car.visit')}}</label>
                        <input type="number" name="visit" id="visit" class="form-control @error('visit') border-danger @enderror" placeholder="{{__('car.visit')}}" value="{{ old('visit') }}">
                        @error('visit')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('year') text-danger @enderror" for="year">{{__('car.year')}}</label>
                        <select name="year"  class="select-search" id="year">
                           <option value="">{{ __('messages.select-year') }}</option>
                           @for($i=date('Y'); $i > 1959; $i--)
                              <option value="{{$i}}" {{old('year') == $i? 'selected': ''}}>{{$i}}</option>
                           @endfor
                        </select>
                        @error('year')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>


                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('price') text-danger @enderror" for="price">{{__('messages.price')}}</label>
                        <input type="text" name="price" id="price" class="form-control @error('price') border-danger @enderror" placeholder="{{__('messages.price')}}" value="{{ old('price') }}">
                        @error('price')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('mileage') text-danger @enderror" for="mileage">{{__('car.mileage')}}</label>
                        <input type="number" name="mileage" id="mileage" class="form-control @error('mileage') border-danger @enderror" placeholder="{{__('car.mileage')}}" value="{{ old('mileage') }}">
                        @error('mileage')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('power') text-danger @enderror" for="power">{{__('car.power')}}</label>
                        <input type="number" name="power" id="power" class="form-control @error('power') border-danger @enderror" placeholder="{{__('car.power')}}" value="{{ old('power') }}">
                        @error('power')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>


                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('car_brand_id') text-danger @enderror">{{__('car.car_brand')}}</label>
                        <select name="car_brand_id" class="form-control select-search" id="car_brand_id">
                           <option value="">{{ __('messages.select-carbrand') }}</option>
                           @foreach($car_brands as $car_brand)
                              <option {{old('car_brand_id') == $car_brand->id? 'selected': ''}} value="{{$car_brand->id}}">{{$car_brand->name}}</option>
                           @endforeach
                        </select>
                        @error('car_brand_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('car_model_id') text-danger @enderror">{{__('car.car_model')}}</label>
{{--                        @if(old('car_model_id'))--}}
{{--                           dasdasdad--}}
{{--                           @foreach($car_models as $car_model)--}}
{{--                              @if($car_model->car_brand_id == old('car_brand_id'))--}}
{{--                                 <option value="{{$car_model->id}}"> {{ old('car_model_id') == $car_model->id? 'selected': ''}} {{old('car_model_id')}} = {{$car_model->id}}- {{$car_model->name}}</option>--}}
{{--                              @endif--}}
{{--                           @endforeach--}}
{{--                        @endif--}}


                        <select name="car_model_id" class="form-control select-search"  id="car_model_id">
                           <option value="">{{ __('messages.select-carmodel') }}</option>
                           @if(old('car_model_id'))
                              @foreach($car_models as $car_model)
                                 @if($car_model->car_brand_id == old('car_brand_id'))
                                 <option {{old('car_model_id') == $car_model->id? 'selected': ''}} value="{{$car_model->id}}">{{$car_model->name}}</option>
                                 @endif
                              @endforeach
                           @endif
                        </select>
                        @error('car_model_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('body_type_id') text-danger @enderror">{{__('car.body_type')}}</label>
                        <select name="body_type_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-body-type') }}</option>
                           @foreach($body_types as $body_type)
                              <option {{old('body_type_id') == $body_type->id? 'selected': ''}} value="{{$body_type->id}}">{{$body_type->name}}</option>
                           @endforeach
                        </select>
                        @error('body_type_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('city_id') text-danger @enderror">{{__('car.city')}}</label>
                        <select name="city_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-city') }}</option>
                           @foreach($cities as $city)
                              <option {{old('city_id') == $city->id? 'selected': ''}} value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                        </select>
                        @error('city_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('transmission_id') text-danger @enderror">{{__('car.transmission')}}</label>
                        <select name="transmission_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-transmission') }}</option>
                           @foreach($transmissions as $transmission)
                              <option {{old('transmission_id') == $transmission->id? 'selected': ''}} value="{{$transmission->id}}">{{$transmission->name}}</option>
                           @endforeach
                        </select>
                        @error('transmission_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('gear_id') text-danger @enderror">{{__('car.gear')}}</label>
                        <select name="gear_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-gear') }}</option>
                           @foreach($gears as $gear)
                              <option {{old('gear_id') == $gear->id? 'selected': ''}} value="{{$gear->id}}">{{$gear->name}}</option>
                           @endforeach
                        </select>
                        @error('gear_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('color_id') text-danger @enderror">{{__('car.color')}}</label>
                        <select name="color_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-color') }}</option>
                           @foreach($colors as $color)
                              <option {{old('color_id') == $color->id? 'selected': ''}} value="{{$color->id}}">{{$color->name}}</option>
                           @endforeach
                        </select>
                        @error('color_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>



                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('fuel_type_id') text-danger @enderror">{{__('car.fuel_type')}}</label>
                        <select name="fuel_type_id" class="form-control select" id="">
                           <option value="">{{ __('messages.select-fuel-type') }}</option>
                           @foreach($fuel_types as $fuel_type)
                              <option {{old('fuel_type_id') == $fuel_type->id? 'selected': ''}} value="{{$fuel_type->id}}">{{$fuel_type->name}}</option>
                           @endforeach
                        </select>
                        @error('fuel_type_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('engine_volume') text-danger @enderror">{{__('car.engine_volume')}}</label>
                        <select class="form-control select-search" name="engine_volume">
                           <option value="">{{ __('messages.engine-volume') }}</option>
                           <option {{old('engine_volume') == 50? 'selected': ''}} value="50">50</option>
                           <option {{old('engine_volume') == 100? 'selected': ''}} value="100">100</option>
                           <option {{old('engine_volume') == 150? 'selected': ''}} value="150">150</option>
                           <option {{old('engine_volume') == 200? 'selected': ''}} value="200">200</option>
                           <option {{old('engine_volume') == 250? 'selected': ''}} value="250">250</option>
                           <option {{old('engine_volume') == 300? 'selected': ''}} value="300">300</option>
                           <option {{old('engine_volume') == 350? 'selected': ''}} value="350">350</option>
                           <option {{old('engine_volume') == 400? 'selected': ''}} value="400">400</option>
                           <option  {{old('engine_volume') == 450? 'selected': ''}} value="450">450</option>
                           <option {{old('engine_volume') == 500? 'selected': ''}} value="500">500</option>
                           @for($i = 500; $i <= 6500;)
                              @php
                                 $i = $i+100;
                              @endphp
                              <option {{old('engine_volume') == $i? 'selected': ''}} value="{{$i}}">{{$i}}</option>
                           @endfor

                           <option {{old('engine_volume') == 7000? 'selected': ''}} value="7000">7000</option>
                           <option {{old('engine_volume') == 7500? 'selected': ''}} value="7500">7500</option>
                           <option {{old('engine_volume') == 8000? 'selected': ''}} value="8000">8000</option>
                           <option {{old('engine_volume') == 8000? 'selected': ''}} value="8000">8500</option>
                           <option {{old('engine_volume') == 9000? 'selected': ''}} value="9000">9000</option>
                           <option {{old('engine_volume') == 9500? 'selected': ''}} value="9500">9500</option>
                           <option {{old('engine_volume') == 10000? 'selected': ''}} value="10000">10000</option>
                           <option {{old('engine_volume') == 11000? 'selected': ''}} value="11000">11000</option>
                           <option {{old('engine_volume') == 12000? 'selected': ''}} value="12000">12000</option>
                           <option {{old('engine_volume') == 13000? 'selected': ''}} value="13000">13000</option>
                           <option {{old('engine_volume') == 14000? 'selected': ''}} value="14000">14000</option>
                           <option {{old('engine_volume') == 15000? 'selected': ''}} value="15000">15000</option>
                           <option {{old('engine_volume') == 16000? 'selected': ''}} value="16000">16000</option>
                        </select>
                        @error('engine_volume')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('company_id') text-danger @enderror">{{__('car.company')}}</label>
                        <select name="company_id" class="form-control select-search" id="">
                           <option value="">{{ __('messages.select-company') }}</option>
                           @foreach($companies as $company)
                              <option {{old('company_id') == $company->id? 'selected': ''}} value="{{$company->id}}">{{$company->name}}</option>
                           @endforeach
                        </select>
                        @error('company_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>


                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('type') text-danger @enderror">{{__('car.type')}}</label>
                        <select name="type" class="form-control select" id="">
                           <option value="">{{ __('messages.select-type') }}</option>
                           <option {{old('type') == '0'? 'selected': ''}} value="0">Default</option>
                           <option {{old('type') == 1? 'selected': ''}} value="1">Vip</option>
                           <option {{old('type') == 2? 'selected': ''}} value="2">Premium</option>
                        </select>
                        @error('type')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('currency_id') text-danger @enderror">{{__('car.currency')}}</label>
                        <select name="currency_id" class="form-control select" id="">
                           <option value="">{{ __('messages.select-currency') }}</option>
                           @foreach($currencies as $currency)
                              <option {{old('currency_id') == $currency->id ? 'selected': ''}} value=" {{$currency->id}} ">{{$currency->title}}</option>
                           @endforeach
                        </select>
                        @error('currency_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="col-sm-4 pt-4">
                        <div class="form-row">
                           <div class="form-group col-sm-4">
                              <div  class="custom-control custom-checkbox custom-control-inline">
                                 <input name="credit" {{ old('credit') ? 'checked' : '' }} type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked_credit_1"  value="1">
                                 <label class="custom-control-label" for="custom_checkbox_inline_unchecked_credit_1">{{__('car.credit')}}</label>
                              </div>
                              @error('credit')
                              <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                              @enderror
                           </div>
                           <div class="form-group col-sm-4">
                              <div  class="custom-control custom-checkbox custom-control-inline  ">
                                 <input name="barter" {{ old('barter') ? 'checked' : '' }}  type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked_barter_1"  value="1">
                                 <label class="custom-control-label" for="custom_checkbox_inline_unchecked_barter_1">{{__('car.barter')}}</label>
                              </div>
                              @error('barter')
                              <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                              @enderror
                           </div>
                           <div class="form-group col-sm-4">
                              <div  class="custom-control custom-checkbox custom-control-inline  ">
                                 <input name="deposit" {{ old('deposit') ? 'checked' : '' }}  type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked_deposit_1"  value="1">
                                 <label class="custom-control-label" for="custom_checkbox_inline_unchecked_deposit_1">{{__('car.deposit')}}</label>
                              </div>
                              @error('deposit')
                              <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                              @enderror
                           </div>
                        </div>

                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('deposit_period') text-danger @enderror" for="deposit_period">{{__('car.deposit_period')}}</label>
                        <input type="number" name="deposit_period" id="deposit_period" class="form-control @error('deposit_period') border-danger @enderror" placeholder="{{__('car.deposit_period')}}" value="{{ old('deposit_period') }}">
                        @error('deposit_period')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('deposit_amount') text-danger @enderror" for="deposit_amount">{{__('car.deposit_amount')}}</label>
                        <input type="number" name="deposit_amount" id="deposit_amount" class="form-control @error('deposit_amount') border-danger @enderror" placeholder="{{__('car.deposit_amount')}}" value="{{ old('deposit_amount') }}">
                        @error('deposit_amount')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('deposit_daily_pay') text-danger @enderror" for="deposit_daily_pay">{{__('car.deposit_daily_pay')}}</label>
                        <input type="number" name="deposit_daily_pay" id="deposit_daily_pay" class="form-control @error('deposit_daily_pay') border-danger @enderror" placeholder="{{__('car.deposit_daily_pay')}}" value="{{ old('deposit_daily_pay') }}">
                        @error('deposit_daily_pay')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('credit_period') text-danger @enderror" for="credit_period">{{__('car.credit_period')}}</label>
                        <input type="number" name="credit_period" id="credit_period" class="form-control @error('credit_period') border-danger @enderror" placeholder="{{__('car.credit_period')}}" value="{{ old('credit_period') }}">
                        @error('credit_period')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('credit_initial_amount') text-danger @enderror" for="credit_initial_amount">{{__('car.credit_initial_amount')}}</label>
                        <input type="number" name="credit_initial_amount" id="credit_initial_amount" class="form-control @error('credit_initial_amount') border-danger @enderror" placeholder="{{__('car.credit_initial_amount')}}" value="{{ old('credit_initial_amount') }}">
                        @error('credit_initial_amount')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('credit_monthly_amount') text-danger @enderror" for="credit_monthly_amount">{{__('car.credit_monthly_amount')}}</label>
                        <input type="number" name="credit_monthly_amount" id="credit_monthly_amount" class="form-control @error('credit_monthly_amount') border-danger @enderror" placeholder="{{__('car.credit_monthly_amount')}}" value="{{ old('credit_monthly_amount') }}">
                        @error('credit_monthly_amount')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="form-group col-sm-12">
                        <label>{{__('messages.select-technical_specifications')}}</label><br>
                        @if($technical_specifications)
                           @foreach($technical_specifications as $technical_specification)
                              <div style="width: 200px; height: 50px;" class="custom-control custom-checkbox custom-control-inline">
                                 <input @if(old('technical_specification_id')) @if(in_array($technical_specification->id, old('technical_specification_id'))) checked @endif @endif  name="technical_specification_id[]" type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked_{{$technical_specification->id}}"  value="{{ $technical_specification->id }}">
                                 <label class="custom-control-label" for="custom_checkbox_inline_unchecked_{{$technical_specification->id}}">{{$technical_specification->name}}</label>
                              </div>
                           @endforeach
                        @else
                           <div class="alert alert-warning" role="alert">
                              {{ __('car.pelase add technical') }}
                           </div>
                        @endif
                     </div>
                  </div>

                     <div class="form-row">
                        <div class="form-group col-sm-12">
                           <label class="font-weight-semibold @error('images') text-danger @enderror" for="image">{{__('messages.image')}} <code>{{ __('car.you can choose as many pictures as you want') }}</code></label>
                           <input type="file" name="images[]" class="form-control h-auto" multiple>
                           @error('images')
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror

                           @error('images.*')
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div  class=" col-sm-12 mb-3">
                           <textarea class="form-control" name="description" id="editor-full" rows="4" cols="4">
                              {!! old('description') !!}
                           </textarea>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <x-save />
                        <x-back route="admin.car.index"/>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')

<script type="text/javascript">

   $(document).ready(function() {



      $('#car_brand_id').on('change',function(e){
         var brand_id = e.target.value;
         if(brand_id){
            $.get('{{route('admin.car_model_ajax')}}?brand_id='+ brand_id,function(data){
               var car_model =  $('#car_model_id').empty();
               car_model.removeAttr("disabled");
               $.each(data,function(id,model){
                  car_model.append('<option value ="'+model['id']+'">'+model['name']+'</option>');
               });
            });
         }else{
            var car_model =  $('#car_model_id').empty();
            car_model.append('<option >{{ __('messages.select-carmodel') }}</option>');
         }
      });

     $(".btn-success").click(function(){
         var html = $(".clone").html();
         $(".increment").after(html);
     });

     $("body").on("click",".btn-danger",function(){
         $(this).parents(".control-group").remove();
     });

   });

</script>
@stop
