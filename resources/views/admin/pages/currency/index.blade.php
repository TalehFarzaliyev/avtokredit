@extends('admin.layouts.app')
@section('title', __('currency.title_index'))
@section('content')
    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="get">
                            <input type="hidden" name="column" value="{{request('column')}}">
                            <input type="hidden" name="order" value="{{request('order')}}">
                            <div class="form-row">
                                <div class="form-group col-sm-3">
                                    <label for="">{{__('messages.title')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.title') }}" name="title" value="{{request('title')}}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="code">{{__('messages.code')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.code') }}"  name="code" value="{{request('code')}}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">{{__('messages.value')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.value') }}"  name="value" value="{{request('value')}}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="status">{{__('messages.status')}}</label>
                                    <select name="status" class="select" id="status">
                                        <option value="">{{ __('messages.all') }}</option>
                                        <option {{request('status') == 1 ? 'selected' : ''}}  value="1">{{ __('messages.enable') }}</option>
                                        <option {{request('status') == '0' ? 'selected' : ''}} value="0">{{ __('messages.disable') }}</option>
                                    </select>
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
                        <x-create route="admin.currency.create"/>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><a class="{{ column_active('id') }}" href="{{sort_url('id')}}">#</a></th>
                                <th><a class="{{ column_active('title') }}" href="{{sort_url('title')}}">{{__('messages.title')}}</a></th>
                                <th><a class="{{ column_active('code') }}" href="{{sort_url('code')}}">{{__('messages.code')}}</a></th>
                                <th><a class="{{ column_active('value') }}" href="{{sort_url('value')}}">{{__('messages.value')}}</a></th>
                                <th><a class="{{ column_active('status') }}" href="{{sort_url('status')}}">{{__('messages.status')}}</a></th>
                                <th><a class="{{ column_active('created_at') }}" href="{{ sort_url('created_at') }}">{{__('messages.created_at')}}</a></th>
                                <th><a class="{{ column_active('updated_at') }}" href="{{ sort_url('updated_at') }}">{{__('messages.updated_at')}}</a></th>
                                <th class="text-center"><i class="icon-menu7"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($currencies as $currency)
                                <tr>
                                    <td>{{ $currency->id }}</td>
                                    <td>{{ $currency->title }}</td>
                                    <td>{{ $currency->code }}</td>
                                    <td>{{ $currency->value }}</td>
                                    <td>
                                        @if($currency->status == 1)
                                            <span class="badge badge-success">{{__('messages.enable')}}</span>
                                        @else
                                            <span class="badge badge-danger">{{__('messages.disable')}}</span>
                                        @endif
                                    </td>
                                    <td>{{ $currency->created_at->diffForHumans() }}</td>
                                    <td>{{ $currency->updated_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-edit route="admin.currency.edit" :id="$currency->id"/>
                                            <x-delete route="admin.currency.destroy" :id="$currency->id"/>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $currencies->links() }}
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
@stop
@section('script')
@stop
