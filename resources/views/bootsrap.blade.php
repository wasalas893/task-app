<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1> Daliy Tasks<h1>
               <div class="row">
                   <div class="col-md-12">

                   @foreach($errors->all() as $error)
                   <div class="alert alert-danger" role="alert">
                       {{$error}}
                   </div>
                   @endforeach



                    <form method="post" action="/savetask">
                            {{csrf_field()}}

                        <input type="text" class="form-control" name="task" placeholder="Enter your taks here">
                        <br>
                             <input type="submit" class="btn btn-primary" value="SAVE">
                             <input type="button" class="btn btn-warning" value="CLEAR">




                    </form>



                        <table class="table table-dark">

                             <th>ID</th>
                             <th>Task</th>
                             <th>Comleted</th>
                             <th>Action</th>
                             @foreach($bootsrap as $taskk)
                                      <tr>
                                    <td>{{$taskk->id}}</td>
                                    <td>{{$taskk->taks}}</td>
                                    <td>
                                    @if($taskk->iscompleted)
                                    <button class="btn btn-success">Compleded</button>
                                    @else
                                    <button class="btn btn-warning"> Not Compleded</button>
                                    @endif
                                    </td>
                                    <td>

                                        @if(!$taskk->iscompleted)
                                        <a href="/markascompleted/{{$taskk->id}}" class="btn btn-primary">Mark As Completed</a>
                                        @else
                                        <a href="/markasnotcompleted/{{$taskk->id}}" class="btn btn-danger">Mark As Not Completed</a>
                                        @endif
                                        <a href="/deletetask/{{$taskk->id}}" class="btn btn-warning">Delete</a>
                                        <a href="updatetask/{{$taskk->id}}" class="btn btn-success">Update</a>
                                    </td>

                                     </tr>
                             @endforeach


                        </table>
                   </div>
               </div>
        </div>
    </div>

</body>
</html>
