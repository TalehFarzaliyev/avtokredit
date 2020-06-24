@extends('admin.layouts.app')
@section('title', __('car.title_index'))
@section('content')
<div class="page-content pt-0">
   <div class="content-wrapper">
      <div class="content">
         <div class="card">
            <div class="card-body">
               <form action="" method="GET">
                  <input type="hidden" name="column" value="{{ request('column') }}">
                  <input type="hidden" name="order" value="{{ request('order') }}">
                  <div class="form-row">
                     <div class="form-group col-sm-3">
                        <label for="">{{__('messages.name')}}</label>
                        <input type="text" class="form-control" placeholder="{{ __('messages.name') }}" name="name" value="{{ request('name') }}">
                     </div>
                     <div class="form-group col-sm-3">
                        <label for="">{{__('messages.phone')}}</label>
                        <input type="text" class="form-control" placeholder="{{ __('messages.phone') }}" name="phone" value="{{ request('phone') }}">
                     </div>
                     <div class="form-group col-sm-3">
                        <label for="">{{__('messages.price')}}</label>
                        <input type="text" class="form-control" placeholder="{{ __('messages.price') }}" name="price" value="{{ request('price') }}">
                     </div>
                     <div class="form-group col-sm-3">
                        <label for="">{{__('car.mileage')}}</label>
                        <input type="text" class="form-control" placeholder="{{ __('car.mileage') }}" name="price" value="{{ request('mileage') }}">
                     </div>
                     <div class="form-group col-sm-3">
                        <label class="font-weight-semibold @error('year') text-danger @enderror" for="year">{{__('car.year')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <select name="year" class="form-control select-search" id="year">
                        <option value="">{{ __('messages.select-year') }}</option>
                           @for($i=date('Y'); $i > 1959; $i--)
                           <option value="{{$i}}" {{request('year') == $i? 'selected': ''}}>{{$i}}</option>
                           @endfor
                           </select>
                        </div>
                     </div>

                     <div class="form-group col-sm-3">
                        <label>{{__('car.car_brand')}}</label>
                        <select name="car_brand_id" class="form-control  select-search" id="car_brand_id">
                           <option value="">{{ __('messages.select-carbrand') }}</option>
                           @foreach($car_brands as $car_brand)
                           <option {{request('car_brand_id') == $car_brand->id? 'selected': ''}} value="{{$car_brand->id}}">{{$car_brand->name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-sm-3">
                        <label>{{__('car.color')}}</label>
                        <select name="color_id" class="form-control  select-search" id="color_id">
                           <option value="">{{ __('messages.select-color') }}</option>
                           @foreach($colors as $color)
                           <option {{request('color_id') == $color->id? 'selected': ''}} value="{{$color->id}}">{{$color->name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-sm-3">
                        <label>{{__('car.car_model')}}</label>
                        <select name="car_model_id" class="form-control  select-search" id="car_model_id">
                        <option value="">{{ __('messages.select-carmodel') }}</option>
                        @if(old('car_model_id'))
                           @foreach($car_models as $car_model)
                           <option {{request('car_model_id') == $car_model->id? 'selected': ''}} value="{{$car_model->id}}">{{$car_model->name}}</option>
                           @endforeach
                        @endif
                        </select>
                     </div>
                     <div class="form-group col-sm-6">
                        <label for="status">{{ __('messages.status') }}</label>
                        <select name="status" class="select" id="status">
                           <option value="">{{ __('messages.all') }}</option>
                           <option {{ request('status') == 1 ? 'selected' : '' }}  value="1">{{ __('messages.enable') }}</option>
                           <option {{ request('status') == '0' ? 'selected' : '' }} value="0">{{ __('messages.disable') }}</option>
                        </select>
                     </div>
                     <div class="form-group col-sm-6">
                        <label for="">{{__('car.power')}}</label>
                        <input type="text" class="form-control" placeholder="{{ __('car.power') }}" name="power" value="{{ request('power') }}">
                     </div>
                     <div class="col-sm-12">
                        <x-search/>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         @include('admin.particles._sessionmessage')
         <div class="card">
            <div class="card-body">
               <x-create route="admin.car.create"/>
            </div>
            <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover">
                  <thead>
                     <tr>
                        <th><a class="{{ column_active('id') }} " href="{{ sort_url('id') }}">#</a></th>
                        <th><a class="{{ column_active('car_brand_id') }}" href="{{ sort_url('car_brand_id') }}">{{ __('car.car_brand') }}</a></th>
                        <th><a class="{{ column_active('car_model_id') }}" href="{{ sort_url('car_model_id') }}">{{ __('car.car_model') }}</a></th>
                        <th><a class="{{ column_active('fuel_type_id') }}" href="{{ sort_url('car_model_id') }}">{{ __('car.fuel_type') }}</a></th>
                        <th><a class="{{ column_active('transmission_id') }}" href="{{ sort_url('transmission_id') }}">{{ __('car.transmission') }}</a></th>
                        <th><a class="{{ column_active('gear_id') }}" href="{{ sort_url('gear_id') }}">{{ __('car.gear') }}</a></th>
                        <th><a class="{{ column_active('mileage') }}" href="{{ sort_url('mileage') }}">{{ __('car.mileage') }}</a></th>
                        <th><a class="{{ column_active('year') }}" href="{{ sort_url('year') }}">{{ __('car.year') }}</a></th>
                        <th><a class="{{ column_active('name') }}" href="{{ sort_url('name') }}">{{ __('messages.name') }}</a></th>
                        <th><a class="{{ column_active('phone') }}" href="{{ sort_url('phone') }}">{{ __('messages.phone') }}</a></th>
                        <th><a class="{{ column_active('price') }}" href="{{ sort_url('price') }}">{{ __('messages.price') }}</a></th>
                        <th><a class="{{ column_active('status') }}" href="{{ sort_url('status') }}">{{ __('messages.status') }}</a></th>
                        <th><a class="{{ column_active('created_at') }}" href="{{ sort_url('created_at') }}">{{ __('messages.created_at') }}</a></th>
                        <th><a class="{{ column_active('updated_at') }}" href="{{ sort_url('updated_at') }}">{{ __('messages.updated_at') }}</a></th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($cars as $car)
                     <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->car_brand['name'] }}</td>
                        <td>{{ $car->car_model['name'] }}</td>
                        <td>{{ $car->fuel_type['name'] }}</td>
                        <td>{{ $car->transmission['name'] }}</td>
                        <td>{{ $car->gear['name'] }}</td>
                        <td>{{ $car->mileage }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->phone }}</td>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->currency['code'] }}</td>

                        <td>
                           @if($car->status == 1)
                           <span class="badge badge-success">{{__('messages.enable')}}</span>
                           @else
                           <span class="badge badge-danger">{{__('messages.disable')}}</span>
                           @endif
                        </td>
                        <td>{{ $car->created_at->diffForHumans() }}</td>
                        <td>{{ $car->updated_at->diffForHumans() }}</td>
                        <td class="text-center">
                           <div class="btn-group">
                              <x-edit route="admin.car.edit" :id="$car->id"/>
                              <x-delete route="admin.car.destroy" :id="$car->id"/>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         {{ $cars->links() }}
      </div>
   </div>
</div>
@stop
@section('script')
<script type="text/javascript">
   $(document).ready(function () {
           $('#car_brand_id').on('change',function(e){
           var brand_id = e.target.value;
           $.get('{{route('admin.car_model_ajax')}}?brand_id='+ brand_id,function(data){
               var car_model =  $('#car_model_id').empty();
               $.each(data,function(id,model){
                   car_model.append('<option value ="'+id+'">'+model['name']+'</option>');
               });
           });
       });

           @if(request('car_brand_id'))
                   var brand_id = $("#car_brand_id").val();

                  $.get('{{route('admin.car_model_ajax')}}?brand_id='+ brand_id,function(data){
                     var car_model =  $('#car_model_id').empty();
                     $.each(data,function(id,model){
                        car_model.append('<option value ="'+id+'">'+model['name']+'</option>');
                     });
                  });
            @endif
   });
</script>
@stop
