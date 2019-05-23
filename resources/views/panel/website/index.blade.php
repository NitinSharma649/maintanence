@extends('panel.layouts.main')

@section('css')
    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="{{ asset('theme/bower_components/weather-icons/css/weather-icons.min.css') }}" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="{{ asset('theme/bower_components/metrics-graphics/dist/metricsgraphics.css') }}">
    <!-- chartist -->
    <link rel="stylesheet" href="{{ asset('theme/bower_components/chartist/dist/chartist.min.css') }}">


@endsection

@section('content')

    <!-- statistics (small charts) -->
    <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                    <span class="uk-text-muted uk-text-small">Visitors (last 7d)</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Sale</span>
                    <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                    <span class="uk-text-muted uk-text-small">Orders Completed</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                    <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- circular charts -->
    <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE0BE;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            User Messages
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content uk-flex uk-flex-center uk-flex-middle">
                    <span class="peity_conversions_large peity_data">5,3,9,6,5,9,7</span>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Conversions
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay md-card-overlay-active">
                <div class="md-card-content" id="canvas_1">
                    <div class="epc_chart" data-percent="37" data-bar-color="#9c27b0">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE85D;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Tasks List
                        </h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <button class="md-btn md-btn-primary">More</button>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="53" data-bar-color="#009688">
                        <span class="epc_chart_text"><span class="countUpMe">53</span>%</span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Orders
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            User Registrations
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </div>

    <!-- tasks -->
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table">
                            <thead>
                                <tr>
                                    <th class="uk-text-nowrap">Task</th>
                                    <th class="uk-text-nowrap">Status</th>
                                    <th class="uk-text-nowrap">Progress</th>
                                    <th class="uk-text-nowrap uk-text-right">Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-231</a></td>
                                    <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In progress</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-progress-warning uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 40%;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">24.11.2015</td>
                                </tr>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-82</a></td>
                                    <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-warning">Open</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-progress-success uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 82%;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">21.11.2015</td>
                                </tr>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-123</a></td>
                                    <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-primary">New</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 0;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                </tr>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-164</a></td>
                                    <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-success">Resolved</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-progress-primary uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 61%;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">17.11.2015</td>
                                </tr>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-123</a></td>
                                    <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-danger">Overdue</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-progress-danger uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 10%;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                </tr>
                                <tr class="uk-table-middle">
                                    <td class="uk-width-3-10"><a href="scrum_board.html">ALTR-92</a></td>
                                    <td class="uk-width-2-10"><span class="uk-badge uk-badge-success">Open</span></td>
                                    <td class="uk-width-3-10">
                                        <div class="uk-progress uk-progress-mini uk-margin-remove">
                                            <div class="uk-progress-bar" style="width: 90%;"></div>
                                        </div>
                                    </td>
                                    <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a uk-margin-bottom">Statistics</h3>
                    <div id="ct-chart" class="chartist"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- info cards -->
    <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
        <div>
            <div class="md-card">
                <div class="md-card-head md-bg-light-blue-600">
                    <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
                        <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#">User profile</a></li>
                                <li><a href="#">User permissions</a></li>
                                <li><a href="#" class="uk-text-danger">Delete user</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-text-center">
                        <img class="md-card-head-avatar" src="{{ asset('theme/assets/img/avatars/avatar_11.png') }}" alt=""/>
                    </div>
                    <h3 class="md-card-head-text uk-text-center md-color-white">
                        Mariane Reinger                                <span>evonrueden@yahoo.com</span>
                    </h3>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon">
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE158;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">mann.cooper@hotmail.com</span>
                                <span class="uk-text-small uk-text-muted">Email</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">+32(1)2290814290</span>
                                <span class="uk-text-small uk-text-muted">Phone</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">facebook.com/envato</span>
                                <span class="uk-text-small uk-text-muted">Facebook</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon uk-icon-twitter"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">twitter.com/envato</span>
                                <span class="uk-text-small uk-text-muted">Twitter</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-head">
                    <div id="video_player"></div>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon md-list-interactive" id="video_player_playlist">
                        <li data-video-src="-CYs99M7hzA">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Unboxing the HERO4</span>
                                <span class="uk-text-small uk-text-muted">Mashable</span>
                            </div>
                        </li>
                        <li data-video-src="te689fEo2pY">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Apple Watch Unboxing & Setup</span>
                                <span class="uk-text-small uk-text-muted">Unbox Therapy</span>
                            </div>
                        </li>
                        <li data-video-src="7AFJeaYojhU">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Energous WattUp Power Transmitter</span>
                                <span class="uk-text-small uk-text-muted">TechCrunch</span>
                            </div>
                        </li>
                        <li data-video-src="hajnEpCq5SE">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">The new MacBook - Design</span>
                                <span class="uk-text-small uk-text-muted">Apple</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-head head_background" style="background-image: url('theme/assets/img/gallery/Image17.jpg')">
                    <div class="md-card-head-menu">
                        <i class="md-icon material-icons md-icon-light">&#xE5D5;</i>
                    </div>
                    <h3 class="md-card-head-text">
                        Some City
                    </h3>
                    <div class="md-card-head-subtext">
                        <i class="md-card-head-icon wi wi-day-sunny-overcast uk-margin-right"></i>
                        <span>14&deg;</span>
                    </div>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon">
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-sunny-overcast"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">22&deg; Mostly Sunny</span>
                                <span class="uk-text-small uk-text-muted">14 Nov (Saturday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-cloudy"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">19&deg; Partly Cloudy</span>
                                <span class="uk-text-small uk-text-muted">15 Nov (Sunday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-rain"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">16&deg; Rainy</span>
                                <span class="uk-text-small uk-text-muted">16 Nov (Monday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-sunny uk-text-warning"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">24&deg; Sunny</span>
                                <span class="uk-text-small uk-text-muted">16 Nov (Monday)</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
        <div class="uk-width-large-1-2">
            <div class="md-card">
                <div id="clndr_events" class="clndr-wrapper">
                    <script>
                        // calendar events
                        clndrEvents = [
                            { date: '2015-11-08', title: 'Doctor appointment', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' },
                            { date: '2015-11-09', title: 'John\'s Birthday', url: 'javascript:void(0)' },
                            { date: '2015-11-09', title: 'Party', url: 'javascript:void(0)', timeStart: '08:00', timeEnd: '08:30' },
                            { date: '2015-11-13', title: 'Meeting', url: 'javascript:void(0)', timeStart: '18:00', timeEnd: '18:20' },
                            { date: '2015-11-18', title: 'Work Out', url: 'javascript:void(0)', timeStart: '07:00', timeEnd: '08:00' },
                            { date: '2015-11-18', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '11:10', timeEnd: '11:45' },
                            { date: '2015-11-23', title: 'Meeting', url: 'javascript:void(0)', timeStart: '20:25', timeEnd: '20:50' },
                            { date: '2015-11-26', title: 'Haircut', url: 'javascript:void(0)' },
                            { date: '2015-11-26', title: 'Lunch with Katy', url: 'javascript:void(0)', timeStart: '08:45', timeEnd: '09:45' },
                            { date: '2015-11-26', title: 'Concept review', url: 'javascript:void(0)', timeStart: '15:00', timeEnd: '16:00' },
                            { date: '2015-11-27', title: 'Swimming Poll', url: 'javascript:void(0)', timeStart: '13:50', timeEnd: '14:20' },
                            { date: '2015-11-29', title: 'Team Meeting', url: 'javascript:void(0)', timeStart: '17:25', timeEnd: '18:15' },
                            { date: '2015-12-02', title: 'Dinner with John', url: 'javascript:void(0)', timeStart: '16:25', timeEnd: '18:45' },
                            { date: '2015-12-13', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' }
                        ]
                    </script>
                    
                </div>
                <div class="uk-modal" id="modal_clndr_new_event">
                    <div class="uk-modal-dialog">
                        <div class="uk-modal-header">
                            <h3 class="uk-modal-title">New Event</h3>
                        </div>
                        <div class="uk-margin-bottom">
                            <label for="clndr_event_title_control">Event Title</label>
                            <input type="text" class="md-input" id="clndr_event_title_control" />
                        </div>
                        <div class="uk-margin-medium-bottom">
                            <label for="clndr_event_link_control">Event Link</label>
                            <input type="text" class="md-input" id="clndr_event_link_control" />
                        </div>
                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-large-bottom" data-uk-grid-margin>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                    <label for="clndr_event_date_control">Event Date</label>
                                    <input class="md-input" type="text" id="clndr_event_date_control" data-uk-datepicker="{format:'YYYY-MM-DD', addClass: 'dropdown-modal', minDate: '2015-11-13' }">
                                </div>
                            </div>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                    <label for="clndr_event_start_control">Event Start</label>
                                    <input class="md-input" type="text" id="clndr_event_start_control" data-uk-timepicker>
                                </div>
                            </div>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                    <label for="clndr_event_end_control">Event End</label>
                                    <input class="md-input" type="text" id="clndr_event_end_control" data-uk-timepicker>
                                </div>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="clndr_new_event_submit">Add Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-large-1-2">
            <div class="md-card">
                <div id="map_users_controls"></div>
                <div id="map_users" class="gmap"></div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon gmap_list" id="map_users_list">
                        <li data-gmap-lat="37.406267"  data-gmap-lon="-122.06742" data-gmap-user="Ericka Rogahn I" data-gmap-user-company="Dietrich Ltd">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Ericka Rogahn I</span>
                                <span class="uk-text-small uk-text-muted">Dietrich Ltd</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.379267"  data-gmap-lon="-122.02148" data-gmap-user="Reginald Huels" data-gmap-user-company="Denesik Inc">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('theme/assets/img/avatars/avatar_02_tn.png') }}" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Reginald Huels</span>
                                <span class="uk-text-small uk-text-muted">Denesik Inc</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.410267"  data-gmap-lon="-122.11048" data-gmap-user="Anne Mann" data-gmap-user-company="Little, Rutherford and Bartoletti">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Anne Mann</span>
                                <span class="uk-text-small uk-text-muted">Little, Rutherford and Bartoletti</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.397267"  data-gmap-lon="-122.084417" data-gmap-user="Dr. Jimmie Schaefer" data-gmap-user-company="Shanahan Inc">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Dr. Jimmie Schaefer</span>
                                <span class="uk-text-small uk-text-muted">Shanahan Inc</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.372267"  data-gmap-lon="-122.090417" data-gmap-user="Elisabeth Weissnat" data-gmap-user-company="Mosciski, Lesch and Cassin">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('theme/assets/img/avatars/avatar_05_tn.png') }}" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Elisabeth Weissnat</span>
                                <span class="uk-text-small uk-text-muted">Mosciski, Lesch and Cassin</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="{{ asset('theme/bower_components/d3/d3.min.js') }}"></script>
    <!-- metrics graphics (charts) -->
    <script src="{{ asset('theme/bower_components/metrics-graphics/dist/metricsgraphics.min.js') }}"></script>
    <!-- chartist (charts) -->
    <script src="{{ asset('theme/bower_components/chartist/dist/chartist.min.js') }}"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true'"></script>
    <script src="{{ asset('theme/bower_components/maplace.js/src/maplace-0.1.3.js') }}"></script>
    <!-- peity (small charts) -->
    <script src="{{ asset('theme/bower_components/peity/jquery.peity.min.js') }}"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="{{ asset('theme/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <!-- countUp -->
    <script src="{{ asset('theme/bower_components/countUp.js/countUp.min.js') }}"></script>
    
    <!-- CLNDR -->
    <script src="{{ asset('theme/bower_components/clndr/src/clndr.js') }}"></script>
    <!-- fitvids -->
    <script src="{{ asset('theme/bower_components/fitvids/jquery.fitvids.js') }}"></script>

    <!--  dashbord functions -->
    <script src="{{ asset('theme/assets/js/pages/dashboard.min.js') }}"></script>

    
    
@endsection