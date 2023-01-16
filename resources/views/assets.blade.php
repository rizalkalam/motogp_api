@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Upload your asset</h1>
    </div>

<div class="container text-center">
    <div class="row">
    @foreach ($assets as $item)
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/'.$item->asset) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{ $item->asset }}</p>
              <form action="/delete/asset/{{ $item->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
              </form>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
  
  <div class="position-relative">
      <div class="position-relative py-2 px-4 text-center">
          <button type="button" data-bs-target="#addModal" data-bs-toggle="modal" class="btn btn-success">Upload File</button>
      </div>
  </div>

    <!-- Modal add -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="detailAddLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="detailAddLabel">Add</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/asset/add" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="asset" class="form-label">your asset</label>
              <input type="file" class="form-control" required id="asset" name="asset">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn w-auto btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn w-auto btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection