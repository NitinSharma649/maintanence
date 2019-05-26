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
                        <td><input type="checkbox" data-md-icheck class="ts_checkbox AssignTo" name="assignTo[]" value="{{ $employee->id }}"></td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->role->role }}</td>
                        <td class="uk-text-center">
                            <a href="{{ route('panel.employee.show', $employee->id) }}"><i class="md-icon material-icons">remove_red_eye</i></a>
                            <a href="{{ route('panel.employee.edit', $employee->id) }}"><i class="md-icon material-icons">edit</i></a>
                            <a data-delete-button href="javascript:;">
                                <i class="md-icon material-icons">&#xE872;</i>
                            </a>
                            <form data-delete-form action="{{ route('panel.employee.destroy', $employee->id) }}" style="display:none;">
                                @csrf
                                @method('delete')
                            </form>
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
<div class="md-fab-wrapper">
    <form action="{{ route('panel.assign_job.store') }}" method="post">
        @csrf
        <input type="hidden" name="complaint_id" value="{{ $maintenance->id }}">
        <input type="hidden" name="warranty_number" value="{{ $maintenance->warranty_number }}">
        <input type="hidden" name="employee_id" id="AssignToEmployee">
        <button class="md-fab md-fab-accent AssignBtn" title="Assign" href="" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </button>
    </form>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.AssignBtn', function(e){
                e.preventDefault();
                e.stopPropagation();
                if($('input.AssignTo:checked').length>0){
                    var values = new Array();
                    $.each($(`input[name="assignTo[]"]:checked`), function() {
                        values.push($(this).val());
                    });
                    $('#AssignToEmployee').val(values);
                    
                    $(this).parents('form').submit();
                }else{
                    toastr.info('Please select atlease 1 engineer');
                }
            });
        });
    </script>

@endsection