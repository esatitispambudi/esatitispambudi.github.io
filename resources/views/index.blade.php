<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="New Vidio" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Url_vidio</th>
                            <th>ket</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->url_vidio }}</td>
                            <td>{{ $d->ket }}</td>
                            
                            <td>
                              
                                <a href="{{url('delete',array($d->id))}}">Delete</a>
                                <a href="{{url('edit',array($d->id))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>