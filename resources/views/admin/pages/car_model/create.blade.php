@extends('admin.layouts.app')
@section('title', __('car_model.title_create'))
@section('content')
    <div class="page-content pt-0">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.car_model.store')}}" method="post">
                            @csrf
                            <div class="row">
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
                                    <label for="car_brand_id">{{__('messages.carbrand')}}</label>
                                    <div>
                                        <select name="car_brand_id" class="select-search" @error('car_brand_id') data-container-css-class="border-danger text-danger" @enderror id="car_brand_id">
                                            <option value="">{{ __('messages.select-carbrand') }}</option>
                                            @foreach($car_brands as $car_brand)
                                                <option {{old('car_brand_id') == $car_brand->id? 'selected': ''}} value="{{$car_brand->id}}">{{$car_brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('car_brand_id')
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
                                <div class="col-sm-12">
                                    <x-save />
                                    <x-back route="admin.car_model.index"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
