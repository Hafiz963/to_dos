@extends('layouts.panel')
@section('title','All Users')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection

@section('body')
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
    $(document).on('click', '.delete_button', function (){
        let id = $(this).attr('data-id');
        $.confirm({
            title: 'Confirm!',
            content: 'Are You sure to delete',
            buttons: {
                cancel: function () {

                },
                somethingElse: {
                    text: 'Yes Delete',
                    btnClass: 'btn-red',
                    keys: ['enter', 'shift'],
                    action: function(){
                        axios.post('{{ route('users.delete') }}', {
                                id:id,

                        })
                            .then(function (response) {
                                $('#users_table').DataTable().ajax.reload()
                            })
                            .catch(function (error) {
                                alert(error);
                            });

                    }
                }
            }
        });

    });

    $(document).on('click', '.edit_button', function (){
        let id = $(this).attr('data-id');
                        axios.get('{{ route('users.edit') }}', {
                            params:{
                                id: id,
                            }
                        })
                            .then(function (response) {
                                $(".modal_data").html(response.data);
                                $('.edit_modal_data').modal('show');
                            })
                            .catch(function (error) {
                                alert(error);
                            });


    });
</script>
@endsection
