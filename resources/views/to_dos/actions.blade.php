@if($todo->status != 'Completed')
    <a href="javascript:void(0)" data-id="{{ $todo->id }}" class="btn btn-ghost-info w-6 complete_button">
    Complete
    </a>
@endif


{{--<a href="javascript:void(0)" data-id="{{ $todo->id }}"  class="btn btn-ghost-danger w-5 delete_button">--}}
{{--    Delete--}}
{{--</a>--}}
