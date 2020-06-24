@extends('admin.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <div class="row">
                    <div class="col-sm-6 col-xl-4">
                        <div class="card card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <i class="icon-check icon-3x text-success"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h3 class="font-weight-semibold mb-0">{{ $count['enable'] }}</h3>
                                    <span class="text-uppercase font-size-sm text-muted">{{ __('messages.active_auto') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="card card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <i class="icon-cross2 icon-3x text-danger"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h3 class="font-weight-semibold mb-0">{{ $count['disable'] }}</h3>
                                    <span class="text-uppercase font-size-sm text-muted">{{ __('messages.pending_auto') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="card card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="font-weight-semibold mb-0">{{ $count['company'] }}</h3>
                                    <span class="text-uppercase font-size-sm text-muted">{{ __('messages.total_company') }}</span>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <i class="icon-user-tie icon-3x text-blue-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
@endsection
