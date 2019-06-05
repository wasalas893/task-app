<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update Task</title>
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <form action="/updatetasks" method="post">
              {{ csrf_field() }}
            <input type="text" class="form-control" name="takname" value="{{$taskdata->taks}}"/>
            <input type="submit" class="btn btn-warning" value="Update"/>
            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
        </form>
    </div>

</body>
</html>
