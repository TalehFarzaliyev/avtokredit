<div class="navbar navbar-expand-md navbar-light">
    <div class="text-center d-md-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbar-navigation">
            <i class="icon-unfold mr-2"></i>
            Navigation
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="navbar-nav-link {{ request()->routeIs('dashboard')  ? 'active' : ''}}">
                    <i class="icon-home4 mr-2"></i>
                    {{ __('messages.dashboard') }}
                </a>
            </li>

           
        

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle {{request()->routeIs('admin.language.*') || request()->routeIs('admin.currency.*') ? 'active' : ''}}" data-toggle="dropdown">
                    <i class="icon-sphere mr-2"></i>
                    {{ __('messages.localization') }}
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('admin.language.index')}}" class="dropdown-item {{ request()->routeIs('admin.language.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.language')}}</a>
                    <a href="{{route('admin.currency.index')}}" class="dropdown-item {{ request()->routeIs('admin.currency.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.currency')}}</a>
                </div>
            </li>

           

            
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle {{(request()->routeIs('admin.user.*')) ? 'active' : ''}}" data-toggle="dropdown">
                    <i class="icon-users4 mr-2"></i>
                    {{ __('messages.user') }}
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('admin.user.index')}}" class="dropdown-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.user')}}</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle {{(request()->routeIs('admin.role.*')) ? 'active' : ''}}" data-toggle="dropdown">
                    <i class="icon-collaboration mr-2"></i>
                    {{ __('messages.group') }}
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('admin.role.index')}}" class="dropdown-item {{ request()->routeIs('admin.role.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.role')}}</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle {{(request()->routeIs('admin.car_body.*') || request()->routeIs('admin.car_model.*') || request()->routeIs('admin.car_brand.*')) ? 'active' : ''}}" data-toggle="dropdown">
                    <i class="icon-car2 mr-2"></i>
                    {{ __('messages.car') }}
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('admin.car_model.index')}}" class="dropdown-item {{ request()->routeIs('admin.car_model.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.carmodel')}}</a>
                    <a href="{{route('admin.car_brand.index')}}" class="dropdown-item {{ request()->routeIs('admin.car_brand.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.carbrand')}}</a>
                     <a href="{{route('admin.car.index')}}" class="dropdown-item {{ request()->routeIs('admin.car.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.car')}}</a>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.color.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.color.*')  ? 'active' : ''}}">
                    <i class="icon-color-sampler"></i>
                    {{ __('messages.colors') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.fuel-type.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.fuel-type.*')  ? 'active' : ''}}">
                    <i class="icon-gas"></i>
                    {{ __('messages.fuel-type') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.body-type.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.body-type.*')  ? 'active' : ''}}">
                    <i class="icon-car"></i>
                    {{ __('messages.body-type') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.gear.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.gear.*')  ? 'active' : ''}}">
                    <i class="icon-gear"></i>
                    {{ __('messages.gear') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.transmission.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.transmission.*')  ? 'active' : ''}}">
                    <i class="icon-transmission"></i>
                    {{ __('messages.transmission') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.city.index')}}" class="navbar-nav-link {{ request()->routeIs('admin.city.*')  ? 'active' : ''}}">
                    <i class="icon-city"></i>
                    {{ __('messages.city') }}
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle {{(request()->routeIs('admin.company.*') || request()->routeIs('admin.company_group.*')) ? 'active' : ''}}" data-toggle="dropdown">
                    <i class="icon-office mr-2"></i>
                    {{ __('messages.company') }}
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('admin.company.index')}}" class="dropdown-item {{ request()->routeIs('admin.company.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.company')}}</a>
                    <a href="{{route('admin.company_group.index')}}" class="dropdown-item {{ request()->routeIs('admin.company_group.*') ? 'active' : '' }}"><i class="icon-grid6"></i> {{__('messages.company_group')}}</a>
                     
                </div>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.setting')}}" class="navbar-nav-link {{ request()->routeIs('admin.setting')  ? 'active' : ''}}">
                    <i class="icon-cog mr-2"></i>
                    {{ __('messages.setting') }}
                </a>
            </li>

        </ul>
    </div>
</div>
