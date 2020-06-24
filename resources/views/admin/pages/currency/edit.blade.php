@extends('admin.layouts.app')
@section('title', __('currency.title_edit'))
@section('content')
    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.currency.update', $currency->id)}}" method="post">
                            <input type="hidden" name="id" value="{{ $currency->id }}">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('title') text-danger @enderror" for="title">{{__('messages.title')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" name="title" id="title" class="form-control @error('title') border-danger @enderror" placeholder="{{ __('messages.title') }}" value="{{ old('title', $currency->title) }}">
                                    </div>
                                    @error('title')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('code') text-danger @enderror" for="title">{{__('messages.code')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" name="code" id="code" class="form-control @error('code') border-danger @enderror" placeholder="{{__('messages.code')}}" value="{{ old('code', $currency->code) }}">
                                    </div>
                                    @error('code')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('symbol_left') text-danger @enderror" for="symbol_left">{{__('currency.symbol_left')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" name="symbol_left" id="symbol_left" class="form-control @error('symbol_left') border-danger @enderror" placeholder="{{__('currency.symbol_left')}}" value="{{ old('symbol_left', $currency->symbol_left) }}">
                                    </div>
                                    @error('symbol_left')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('symbol_right') text-danger @enderror" for="symbol_right">{{__('currency.symbol_right')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" name="symbol_right" id="symbol_right" class="form-control @error('symbol_right') border-danger @enderror" placeholder="{{__('currency.symbol_right')}}" value="{{ old('symbol_right', $currency->symbol_right) }}">
                                    </div>
                                    @error('symbol_right')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('decimal_places') text-danger @enderror" for="decimal_places">{{__('currency.decimal_places')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="number" step="1" name="decimal_places" id="decimal_places" class="form-control @error('decimal_places') border-danger @enderror" placeholder="{{__('currency.decimal_places')}}" value="{{ old('decimal_places', $currency->decimal_places) }}">
                                    </div>
                                    @error('decimal_places')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="font-weight-semibold @error('value') text-danger @enderror" for="value">{{__('messages.value')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="number" step="0.01" name="value" id="value" class="form-control @error('value') border-danger @enderror" placeholder="{{__('messages.value')}}" value="{{ old('value', $currency->value) }}">
                                    </div>
                                    @error('value')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="status" class="font-weight-semibold @error('status') text-danger @enderror">{{__('messages.status')}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <select name="status" class="select" id="status" @error('status') data-container-css-class="border-danger text-danger" @enderror>
                                            <option {{old('status', $currency->status) == 1 ? 'selected': ''}} value="1">{{__('messages.enable')}}</option>
                                            <option {{old('status', $currency->status) == '0'? 'selected': ''}}  value="0">{{__('messages.disable')}}</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <x-save />
                                    <x-back route="admin.currency.index"></x-back>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
@stop
@section('script')
@stop
