@extends('admin.layouts.app')
@section('title', __('car_brand.title_index'))
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
                                <div class="form-group col-sm-6">
                                    <label for="">{{__('messages.name')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.name') }}" name="name" value="{{ request('name') }}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="status">{{ __('messages.status') }}</label>
                                    <select name="status" class="select" id="status">
                                        <option value="">{{ __('messages.all') }}</option>
                                        <option {{ request('status') == 1 ? 'selected' : '' }}  value="1">{{ __('messages.enable') }}</option>
                                        <option {{ request('status') == '0' ? 'selected' : '' }} value="0">{{ __('messages.disable') }}</option>
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
                        <x-create route="admin.car_brand.create"/>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><a class="{{ column_active('id') }} " href="{{ sort_url('id') }}">#</a></th>
                                <th><a class="{{ column_active('name') }}" href="{{ sort_url('name') }}">{{ __('messages.name') }}</a></th>
                                <th><a class="{{ column_active('status') }}" href="{{ sort_url('status') }}">{{ __('messages.status') }}</a></th>
                                <th><a class="{{ column_active('created_at') }}" href="{{ sort_url('created_at') }}">{{ __('messages.created_at') }}</a></th>
                                <th><a class="{{ column_active('updated_at') }}" href="{{ sort_url('updated_at') }}">{{ __('messages.updated_at') }}</a></th>
                                <th class="text-center"><i class="icon-menu7"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($car_brands as $car_brand)
                                <tr>
                                    <td>{{ $car_brand->id }}</td>
                                    <td>{{ $car_brand->name }}</td>
                                    <td>
                                        @if($car_brand->status == 1)
                                            <span class="badge badge-success">{{__('messages.enable')}}</span>
                                        @else
                                            <span class="badge badge-danger">{{__('messages.disable')}}</span>
                                        @endif
                                    </td>
                                    <td>{{ $car_brand->created_at->diffForHumans() }}</td>
                                    <td>{{ $car_brand->updated_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-edit route="admin.car_brand.edit" :id="$car_brand->id"/>
                                            <x-delete route="admin.car_brand.destroy" :id="$car_brand->id"/>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $car_brands->links() }}
            </div>
        </div>
    </div>
@stop
@section('script')
@stop
