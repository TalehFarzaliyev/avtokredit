@extends('admin.layouts.app')
@section('title', __('company.company'))
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
                                    <label for="">{{__('company.slogan')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('company.slogan') }}" name="slogan" value="{{ request('slogan') }}">
                                </div>
                                 <div class="form-group col-sm-3">
                                    <label for="">{{__('company.phone')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('company.phone') }}" name="phone" value="{{ request('phone') }}">
                                </div>
                                 <div class="form-group col-sm-3">
                                    <label for="">{{__('company.visit')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('company.visit') }}" name="visit" value="{{ request('visit') }}">
                                </div>
                                 <div class="form-group col-sm-3">
                                    <label for="">{{__('company.working_days')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('company.working_days') }}" name="working_days" value="{{ request('working_days') }}">
                                </div>
                                  <div class="form-group col-sm-3">
                                    <label for="">{{__('company.description')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('company.description') }}" name="description" value="{{ request('description') }}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">{{__('messages.address')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.address') }}" name="address" value="{{ request('address') }}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">{{__('messages.email')}}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.email') }}" name="email" value="{{ request('email') }}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="company_group_id">{{__('company.company_group')}}</label>
                                    <select name="company_group_id" class="select" id="company_group_id">
                                    <option value="">{{ __('messages.select-company-group') }}</option>
                                    @foreach($company_groups as $company_group)
                                    <option {{request('company_group_id') == $company_group->id? 'selected': ''}} value="{{$company_group->id}}">{{$company_group->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
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
                        <x-create route="admin.company.create"/>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><a class="{{ column_active('id') }} " href="{{ sort_url('id') }}">#</a></th>
                                <th><a class="{{ column_active('name') }}" href="{{ sort_url('name') }}">{{ __('messages.name') }}</a></th>
                                <th><a class="{{ column_active('slogan') }}" href="{{ sort_url('slogan') }}">{{ __('company.slogan') }}</a></th>
                                 <th><a class="{{ column_active('visit') }}" href="{{ sort_url('visit') }}">{{ __('company.visit') }}</a></th>
                                <th><a class="{{ column_active('address') }}" href="{{ sort_url('name') }}">{{ __('messages.address') }}</a></th>
                                <th><a class="{{ column_active('email') }}" href="{{ sort_url('name') }}">{{ __('messages.email') }}</a></th>
                                <th><a class="{{ column_active('status') }}" href="{{ sort_url('status') }}">{{ __('messages.status') }}</a></th>
                                <th><a class="{{ column_active('created_at') }}" href="{{ sort_url('created_at') }}">{{ __('messages.created_at') }}</a></th>
                                <th><a class="{{ column_active('updated_at') }}" href="{{ sort_url('updated_at') }}">{{ __('messages.updated_at') }}</a></th>
                                <th class="text-center"><i class="icon-menu7"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->slogan }}</td>
                                    <td>{{ $company->visit }}</td>
                                    <td>{{ $company->address }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                        {!! $company->status ? '<span class="badge badge-success">'.__('messages.enable').'</span>' : '<span class="badge badge-danger">'.__('messages.disable').'</span>' !!}
                                    </td>
                                    <td>{{ $company->created_at->diffForHumans() }}</td>
                                    <td>{{ $company->updated_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-edit route="admin.company.edit" :id="$company->id"/>
                                            <x-delete route="admin.company.destroy" :id="$company->id"/>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@stop
@section('script')
@stop
