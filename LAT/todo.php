 <!-- TO DO List -->
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">
             <i class="ion ion-clipboard mr-1"></i>
             To Do List
         </h3>

         <div class="card-tools">
             <ul class="pagination pagination-sm">
                 <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                 <li class="page-item"><a href="#" class="page-link">1</a></li>
                 <li class="page-item"><a href="#" class="page-link">2</a></li>
                 <li class="page-item"><a href="#" class="page-link">3</a></li>
                 <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
             </ul>
         </div>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <ul class="todo-list" data-widget="todo-list">
             <li>
                 <!-- drag handle -->
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <!-- checkbox -->
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo1" id="todoCheck1">
                     <label for="todoCheck1"></label>
                 </div>
                 <!-- todo text -->
                 <span class="text">Design a nice theme</span>
                 <!-- Emphasis label -->
                 <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                 <!-- General tools such as edit or delete-->
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
             <li>
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                     <label for="todoCheck2"></label>
                 </div>
                 <span class="text">Make the theme responsive</span>
                 <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
             <li>
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo3" id="todoCheck3">
                     <label for="todoCheck3"></label>
                 </div>
                 <span class="text">Let theme shine like a star</span>
                 <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
             <li>
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo4" id="todoCheck4">
                     <label for="todoCheck4"></label>
                 </div>
                 <span class="text">Let theme shine like a star</span>
                 <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
             <li>
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo5" id="todoCheck5">
                     <label for="todoCheck5"></label>
                 </div>
                 <span class="text">Check your messages and notifications</span>
                 <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
             <li>
                 <span class="handle">
                     <i class="fas fa-ellipsis-v"></i>
                     <i class="fas fa-ellipsis-v"></i>
                 </span>
                 <div class="icheck-primary d-inline ml-2">
                     <input type="checkbox" value="" name="todo6" id="todoCheck6">
                     <label for="todoCheck6"></label>
                 </div>
                 <span class="text">Let theme shine like a star</span>
                 <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                 <div class="tools">
                     <i class="fas fa-edit"></i>
                     <i class="fas fa-trash-o"></i>
                 </div>
             </li>
         </ul>
     </div>
     <!-- /.card-body -->
     <div class="card-footer clearfix">
         <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#adding-task"><i class="fas fa-plus"></i> Add item</button>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="adding-task" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog modal-sm">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">To-do</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form id="myForm" action="post" name="myForm">
                 <div class="modal-body">
                     <div class="form-group">

                         <div class="due-human pull-right"><span class="badge bg-success"> due: <span class="text-due"></span> </span> </div>
                         <label>Task</label>
                         <div class="input-group">
                             <input type="text" class="form-control">
                             <div class="input-group-append">
                                 <span class="input-group-text">
                                     <input type="checkbox">
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6">
                             <div class=" form-group">
                                 <label>Due date</label>
                                 <input type="text" class="form-control" id="due_date" name="due_date" value="" size="10">
                             </div>
                         </div>
                         <div class="col-6">
                             <div class=" form-group">
                                 <label>Due time</label>
                                 <input type="text" class="form-control" id="due_time" name="due_time" value="" size="10">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button id="insert" type="submit" class="btn btn-success" name="insert_x">Save</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <script>
     $j(function() {
         // jQuery UI sortable for the todo list
         $j('.todo-list').sortable({
             placeholder: 'sort-highlight',
             handle: '.handle',
             forcePlaceholderSize: true,
             zIndex: 999999
         })
         //date
         $j("#due_date").datetimepicker({
             format: 'DD/MM/YYYY'
         });
         $j("#due_time").datetimepicker({
             format: 'LT'
         });
         $j("#due_date").on('dp.change', function(e) {
             var due = moment(e.date).endOf('date').fromNow();
             $j(".text-due").text(due);

         });
         $j("#due_time").on('dp.change', function(e) {
             //  time = moment(e.time);
             //  console.log(time);
         });
     });
     $j("#myForm").submit(function(event) {
         alert("Handler for .submit() called.");
         event.preventDefault();
     });
 </script>