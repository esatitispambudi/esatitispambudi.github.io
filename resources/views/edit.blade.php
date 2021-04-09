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
                <form action="{{url('update', $data->id)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kode">URL VIDIO</label>
                        <input type="text" name="url_vidio" id="kode" value="{{$data->url_vidio}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">KET</label>
                        <input type="text" name="ket" id="judul" value="{{$data->ket}}" class="form-control">
                    </div>                    
                   
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>