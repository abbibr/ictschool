<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<h3 style="text-align: center;">Savol qo`shish!</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  #pdf
  {
    position: absolute;
    right: 2%;
  }
</style>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
@foreach($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>{{$error}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach

<!-- Session -->
@if(Session::get('successMessage'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>{{Session::get('successMessage')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php Session::forget('successMessage'); ?>

@endif

</div>
<div class="col-md-4"></div>
</div>
</div>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary" id="bir">Qo`shish</Button>
                    <a href="/" id="bosh">Bosh Sahifa</a>
                    <a href="download" class="btn btn-success" id="pdf" onclick="myFunction()">PDF</a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Savollar <i class="fa fa-sort"></i></th>
                       <th>Holatlar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($qs as $q)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$q->question}}</td>
                        <td>
                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#Modal_update{{$q->id}}">Yangilash</a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#Modal_delete{{$q->id}}">O`chirish</a>
                        </td>
                     </tr>
<!-- modal update -->
<div class="modal fade" id="Modal_update{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="/update" method="post">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yangilash</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <h5>Savollar</h5>
      </div>
      <input style="visibility:hidden" name="id" value="{{$q->id}}">
        <div class="row" style="padding:10px;">
        <input name="question" value="{{$q->question}}" class="form-control" autocomplete="off">
        </div>
        <div class="row">
        <!-- <div class="col-md-6"><label>Mavzu: </label></div> -->
        <div class="col-md-6"><label>Nechta: </label></div>
        </div>
        <div class="row">
        <!-- <div class="col-md-6"><input value="{{$q->mavzu}}" name="opa"></div> -->
        <div class="col-md-6"><input value="{{$q->son}}" name="opb" autocomplete="off"></div>
        </div>
        <div class="row">
        </div>
        <div class="row">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button type="submit" class="btn btn-primary">Savolni yangilash</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="Modal_delete{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="/delete" method="post">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">O`chirish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input style="visibility:hidden" name="id" value="{{$q->id}}">
        <h5>Ishonchingiz komilmi?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
        <button type="submit" class="btn btn-danger">Savolni o`chirish</button>
      </div>
      </form>
    </div>
  </div>
</div>
                
@endforeach
</tbody>
</table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="add" method="post">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Qo`shish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <h5>Savollar</h5>
      </div>
        <div class="row" style="padding:10px;">
        <input name="question" class="form-control" autocomplete="off">
        </div>
        <div class="row">
        <!-- <div class="col-md-6"><label>Mavzu: </label></div> -->
        <div class="col-md-6"><label>Nechta: </label></div>
        </div>
        <div class="row">
        <!-- <div class="col-md-6"><input name="opa"></div> -->
        <div class="col-md-6"><input name="opb" type="number" autocomplete="off"></div>
        </div>
        <div class="row">
        </div>
        <div class="row">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button type="submit" class="btn btn-primary">Savol qo`shish</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal-Update -->

<script src="files/jquery.min.js"></script>
<script src="files/popper.min.js"></script>
<script src="files/bootstrap.min.js"></script>