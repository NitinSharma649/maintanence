@php
$user = Auth::guard('panel')->user() ?? (object)[];
@endphp
<aside id="sidebar_main">
    
    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            {{-- <a href="{{ route('panel.index') }}" class="sSidebar_hide"><img src="{{ asset('theme/assets/img/logo_main.png') }}" alt="" height="15" width="71"/></a>
            <a href="{{ route('panel.index') }}" class="sSidebar_show"><img src="{{ asset('theme/assets/img/logo_main_small.png') }}" alt="" height="32" width="32"/></a> --}}
            <a href="{{ route('panel.index') }}" class="sSidebar_hide">Maintenance</a>
            <a href="{{ route('panel.index') }}" class="sSidebar_show">Maintenance</a>
        </div>
        <div class="sidebar_actions">
            <select id="lang_switcher" name="lang_switcher">
                <option value="gb" selected>English</option>
            </select>
        </div>
    </div>
    
    <div class="menu_section">
        <ul>
            <li class="current_section" title="Dashboard">
                <a href="{{ route('panel.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            
            @if($user->hasRole('admin'))
            <li>
                <a href="javascript:;">
                    <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                    <span class="menu_title">Employee</span>
                </a>
                <ul>
                    <li><a href="{{ route('panel.employee.index') }}">Employee</a></li>
                    <li><a href="{{ route('panel.employee.create') }}">Add Employee</a></li>
                </ul>
            </li>            
            <li title="Compaints">
                <a href="{{ route('panel.complaint.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                    <span class="menu_title">Compaints</span>
                </a>
            </li>
            @endif
            
            @if($user->hasRole('engineer'))
            <li title="Compaints">
                <a href="{{ route('panel.jobs.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                    <span class="menu_title">Assign Jobs</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside><!-- main sidebar end -->
