@extends('admin.layouts.app')
@section('title', __('company.company')." ".__('messages.create'))
@section('content')
<!-- Page content -->
<div class="page-content pt-0">
   <!-- Main content -->
   <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
         @if(count(langs_get_code_name()))
         <form action="{{ route('admin.company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
               <div class="bg-light">
                  <ul class="nav nav-tabs nav-tabs-bottom mb-0">
                     @foreach(langs_get_code_name() as $key=>$lang)
                     <li class="nav-item">
                        <a href="#card-{{$key}}"
                           class="nav-link {{$loop->index == '0' ? 'active' : ''}}"
                           data-toggle="tab">
                        {{$lang}}
                        </a>
                     </li>
                     @endforeach
                  </ul>
               </div>
               <div class="card-body tab-content">
                  @foreach(langs_get_code_name() as $key=>$lang)
                  <div class="tab-pane fade show {{ $loop->index == '0' ? 'active' : '' }}"
                     id="card-{{ $key }}">
                     <div class="form-row">
                        <div class="form-group col-sm-12">
                           <label for="slogan-{{ $key }}">{{ __('company.slogan') }}</label>
                           <input type="text" class="form-control " name="{{ 'slogan:'.$key }}" placeholder="{{ __('company.slogan') }}" value="{{ old('slogan:'.$key) }}">
                           @error('slogan:'.$key)
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-sm-12">
                           <label for="working_days-{{ $key }}">{{ __('company.working_days') }}</label>
                           <input type="text" class="form-control " name="{{ 'working_days:'.$key }}" placeholder="{{ __('company.working_days') }}" value="{{ old('working_days:'.$key) }}">
                           @error('working_days:'.$key)
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-sm-12">
                           <label for="address-{{ $key }}">{{ __('company.address') }}</label>
                           <input type="text" class="form-control " name="{{ 'address:'.$key }}" placeholder="{{ __('company.address') }}" value="{{ old('address:'.$key) }}">
                           @error('address:'.$key)
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-sm-12">
                           <label for="description-{{ $key }}">{{__('messages.description')}}</label>
                           <input type="text" class="form-control " name="{{ 'description:'.$key }}" placeholder="{{__('messages.description')}}" value="{{old('description:'.$key)}}">
                           @error('description:'.$key)
                           <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="card-body">
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
                        <label class="font-weight-semibold">{{ __('company.company') }} {{ __('messages.group') }}</label>
                        <select name="company_group_id" class="form-control select" id="">
                           <option value="">{{ __('messages.select-company-group') }}</option>
                           @foreach($company_groups as $company_group)
                              <option {{ old('company_group_id') == $company_group->id ? 'selected': '' }} value="{{$company_group->id}}">{{$company_group->name}}</option>
                           @endforeach
                        </select>
                        @error('company_group_id')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('location_lat') text-danger @enderror" for="location_lat">{{__('company.location_lat')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="text" name="location_lat" id="location_lat" class="form-control @error('location_lat') border-danger @enderror" placeholder="{{__('company.location_lat')}}" value="{{ old('location_lat') }}">
                        </div>
                        @error('location_lat')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('location_lng') text-danger @enderror" for="location_lng">{{__('company.location_lng')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="text" name="location_lng" id="location_lng" class="form-control @error('location_lng') border-danger @enderror" placeholder="{{__('company.location_lng')}}" value="{{ old('location_lng') }}">
                        </div>
                        @error('location_lng')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>



                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('email') text-danger @enderror" for="email">{{__('messages.email')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="email" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="{{__('messages.email')}}" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('password') text-danger @enderror" for="password">{{__('messages.password')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="password" name="password" id="password" class="form-control @error('password') border-danger @enderror" placeholder="{{__('messages.password')}}" value="{{ old('password') }}">
                        </div>
                        @error('password')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('password_confirmation') text-danger @enderror" for="password_confirmation">{{__('messages.password_confirmation')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') border-danger @enderror" placeholder="{{__('messages.password_confirmation')}}" value="{{ old('password_confirmation') }}">
                        </div>
                        @error('password_confirmation')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('visit') text-danger @enderror" for="visit">{{__('company.visit')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="number" name="visit" id="visit" class="form-control @error('visit') border-danger @enderror" placeholder="{{__('company.visit')}}" value="{{ old('visit') }}">
                        </div>
                        @error('visit')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="font-weight-semibold @error('phone') text-danger @enderror" for="phone">{{__('messages.phone')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="tel" name="phone" id="phone" class="form-control @error('phone') border-danger @enderror" placeholder="{{__('messages.phone')}}" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-6">
                        <label class="font-weight-semibold @error('image') text-danger @enderror" for="image">{{__('messages.image')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="file" name="image" id="image" class="form-control h-auto @error('image') border-danger @enderror">
                        </div>
                        @error('image')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group col-sm-6">
                        <label class="font-weight-semibold @error('cover_image') text-danger @enderror" for="cover_image">{{__('company.cover_image')}}</label>
                        <div class="form-group-feedback form-group-feedback-right">
                           <input type="file" name="cover_image" id="cover_image" class="form-control h-auto @error('cover_image') border-danger @enderror">
                        </div>
                        @error('cover_image')
                        <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <x-save />
                     <x-back route="admin.company_group.index"></x-back>
                  </div>
               </div>
            </div>
         </form>
      @else
      @include('admin.particles._alert',['message'=> __('please_add_language')])
      @endif
   </div>
   <!-- /content area -->
</div>
<!-- /main content -->
</div>
<!-- /page content -->
@stop
@section('script')
@stop
