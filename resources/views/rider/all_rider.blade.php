@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Riders</h1>
</div>

<div class="table-responsive col-lg-10">
  <a class="btn btn-primary w-40 float-end ms-2" type="button" href="/rider/create">add</a>
    <table class="table table-striped table-sm align-middle">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">number</th>
          <th scope="col">team name</th>
          <th scope="col">nationality</th>
          <th scope="col">image</th>
          <th scope="col">icon</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($riders as $rider)    
        <tr>
          <td>{{ $rider->id }}</td>
          <td>{{ $rider->name }}</td>
          <td>{{ $rider->number }}</td>
          <td>{{ $rider->team->name }}</td>
          <td><img src="{{ asset('images/'.$rider->img_flag) }}" alt="" class="img-thumbnail" width="50" height="50"></td>
          <td><img src="{{ asset('images/'.$rider->img_rider) }}" alt="" class="img-thumbnail" width="50" height="50"></td>
          {{-- <td>
            @if ($rider->img_rider)        
            <img src="{{ url('img_rider').'/'.$rider->img_rider }}" alt="" class="img-thumbnail" width="50" height="50">
            @endif
          </td> --}}
          <td>{{ $rider->icon_rider }}</td>
          <td>
            
            
            <a href="" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal-{{ $rider->id }}"><span data-feather="eye"></span></a>
            <a href="/detail/rider/{{ $rider->id }}" class="badge bg-info"><span data-feather="edit"></span></a>
            
            <form action="/delete/rider/{{ $rider->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{-- <!-- Modal add -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="detailAddLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="detailAddLabel">Add</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
    </div>
  </div>
</div>
</div>



  
<!-- Modal edit -->
<div class="modal fade" id="editModal-{{ $rider->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="editLabel">Edit</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form method="POST" action="/rider/update/{{ $rider->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input type="hidden" id="id" name="id" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $rider->id }}" readonly>
          <label >Name</label>
          <input type="text" class="form-control" required id="name" name="name" >
      </div>
      <div class="mb-3">
        <label >Number</label>
        <input type="number" class="form-control" required id="number" name="number" >
      </div>
      <div class="mb-3">
        <label for="team" class="form-label">Team</label>
        <input type="text" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="img_flag" class="form-label">nationality</label>
      <input type="file" class="form-control" required id="img_flag" name="img_flag" >
  </div>
      <div class="mb-3">
          <label for="img_rider" class="form-label">image</label>
          <input type="file" class="form-control" required id="img_rider" name="img_rider" >
      </div>
      <div class="mb-3">
        <label for="icon_rider" class="form-label">icon</label>
        <input type="text" class="form-control" required id="icon_rider" name="icon_rider">
      </div>
      
  </div>
  <div class="modal-footer">
  </form>
    </div>
  </div>
</div>
</div> --}}

@endsection