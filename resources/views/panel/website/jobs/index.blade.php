@extends('panel.layouts.main')

@section('css')

@endsection

@section('topbar')
<div id="top_bar">
    <div class="md-top-bar">
        <div class="uk-width-large-8-10 uk-container-center">
            <div class="uk-clearfix">
                <div class="md-top-bar-actions-left">
                    <div class="md-top-bar-checkbox">
                        <input type="checkbox" name="mailbox_select_all" id="mailbox_select_all" data-md-icheck />
                    </div>
                </div>
                <div class="md-top-bar-actions-right">
                    <div class="md-top-bar-icons">
                        <i id="mailbox_list_split" class=" md-icon material-icons">&#xE8EE;</i>
                        <i id="mailbox_list_combined" class="md-icon material-icons">&#xE8F2;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="md-card-list-wrapper" id="mailbox">
    <div class="uk-width-large-8-10 uk-container-center">
        <div class="md-card-list">
            {{--  <div class="md-card-list-header heading_list">Today</div>  --}}
            
            {{--  <div class="md-card-list-header md-card-list-header-combined heading_list" style="display: none">All Messages</div>  --}}
            <div class="md-card-list-header md-card-list-header-combined heading_list">All Complaints</div>
            <ul class="hierarchical_slide">
                @foreach ($jobs as $job)
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                @if($job->status==0)
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="{{ route('panel.jobs.changeStatus', ['jobs'=>$job->id, 'status'=>1]) }}"><i class="material-icons">edit</i> Approve </a></li>
                                <li><a href="{{ route('panel.jobs.changeStatus', ['jobs'=>$job->id, 'status'=>3]) }}"><i class="material-icons">&#xE872;</i> Reject </a></li>
                                @elseif($job->status == 1)
                                <li><a href="{{ route('panel.jobs.changeStatus', ['jobs'=>$job->id, 'status'=>2]) }}"><i class="material-icons">edit</i> Completed </a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">{{ date('d M Y', strtotime($job->complaint->created_at)) }}</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-grey"></span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>{{ $job->complaint->email }}</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>{{ $job->complaint->email }}</span>
                        </div>
                        <span>{{ $job->complaint->issue }}</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Warranty Number: {{ $job->complaint->warranty_number }}<br>
                        </div>
                        <div class="md-card-list-item-content">
                            {{ $job->complaint->description }}
                        </div>
                        <form class="md-card-list-item-reply" action="javascript:;">
                            <label for="mailbox_reply_1895">Reply to <span>{{ $job->complaint->email }}</span></label>
                            <textarea class="md-input md-input-full" name="message" id="mailbox_reply_1895" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary" type="submit">Send</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('theme/assets/js/pages/page_mailbox.min.js') }}"></script>
@endsection