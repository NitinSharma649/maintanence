@extends('panel.layouts.main')

@section('css')

@endsection

@section('content')
<div class="md-card">
    <div class="md-card-content">
        <div class="uk-overflow-container uk-margin-bottom">
            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                <thead>
                <tr>
                    <th><input type="checkbox" class="ts_checkbox_all"></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="filter-false remove sorter-false uk-text-center">Actions</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="uk-text-center">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->role->role }}</td>
                        <td class="uk-text-center">
                            <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <ul class="uk-pagination ts_pager">
            <li data-uk-tooltip title="Select Page">
                <select class="ts_gotoPage ts_selectize"></select>
            </li>
            <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
            <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
            <li><span class="pagedisplay"></span></li>
            <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
            <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
            <li data-uk-tooltip title="Page Size">
                <select class="pagesize ts_selectize">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('js')

@endsection