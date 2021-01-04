@extends('layouts.panel')
@section('body')

    <div class="row align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <h2 class="page-title">
                All Tasks
            </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none" style="padding-bottom: 10px;">
            <div class="btn-list">
                <a href="javascript:void(0)" class="btn btn-primary add_button"  data-bs-target="#modal-report">
                    Add Task
                </a>
            </div>
        </div>
    </div>
    <div class="card" style="padding: 20px">
        {!! $dataTable->table() !!}
    </div>
    <div class="modal_data">
    </div>
@endsection

@section('js')
    {!! $dataTable->scripts() !!}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>

    $('.add_button').click(function (){
        axios.get('{{ route('tasks.create') }}'
        )
            .then(function (response) {
                $('.modal_data').html(response.data);
                $('.add_modal_data').modal('show');

            })
            .catch(function (error) {
                console.log(error);
                alert(error);
            });
    });
    $(document).on('click','.complete_button',function (){
        let id = $(this).attr('data-id');
        axios.post('{{ route('tasks.complete') }}',{
            id:id,
        })
            .then(function (response) {
              $("#todos_table").DataTable().ajax.reload();

            })
            .catch(function (error) {
                console.log(error);
                alert(error);
            });

    });


</script>
@endsection
