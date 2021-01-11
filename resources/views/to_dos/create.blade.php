<div class="modal modal-blur fade add_modal_data"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a new Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 align-items-end">
                    <div class="col">
                        <label class="form-label">Task Name</label>
                        <input type="text" id="task_name" name="task_name" placeholder="Task Name" class="form-control" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary save_button" data-bs-dismiss="modal">Save</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script>
    $('.save_button').click(function (){
        let task_name = $("#task_name").val();
        axios.post('{{ route('tasks.store') }}',{
            task_name : task_name,
        })
            .then(function (response) {
                $('#todos_table').DataTable().ajax.reload();
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
                alert(error);
            });
    });
</script>
