@extends('layouts.main')
@section('container')
<h3 class="text-center mt-3">Add data</h3>
<form method="POST" action="/rider/add" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label >Name</label>
      <input type="text" class="form-control" required id="name" name="name">
    </div>
    <div class="mb-3">
      <label >Number</label>
      <input type="number" class="form-control" required id="number" name="number" >
    </div>
    <div class="mb-3">
      <label for="team_id" class="form-label">Team</label>
      <select class="form-select" name="team_id" id="">
        @foreach ($team as $item)
        <option name="team_id" value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="img_flag" class="form-label">nationality</label>
      <input type="file" class="form-control" required id="img_flag)flag" name="img_flag">
    </div>
  <div class="mb-3">
    <label for="img_rider" class="form-label">image</label>
    <input type="file" class="form-control" required id="img_rider" name="img_rider">
  </div>
  <div class="mb-3">
    <label for="icon_rider" class="form-label">icon</label>
    <input type="text" class="form-control" required id="icon_rider" name="icon_rider">
  </div>
  <div class="mb-3">
    <label for="date_of_brith" class="form-label">Date of Brith</label>
    <input type="date" class="form-control" required id="date_of_brith" name="date_of_brith">
  </div>
  <div class="mb-3">
    <label for="place_of_brith" class="form-label">Place of Brith</label>
    <input type="text" class="form-control" required id="place_of_brith" name="place_of_brith">
  </div>
  <div class="mb-3">
    <label for="height" class="form-label">Height</label>
    <input type="text" class="form-control" required id="height" name="height">
  </div>
  <div class="mb-3">
    <label for="weight" class="form-label">Weight</label>
    <input type="text" class="form-control" required id="weight" name="weight">
  </div>
  <div class="mb-3">
    <label for="gp_victories" class="form-label">Grand Prix Victories</label>
    <input type="text" class="form-control" required id="gp_victories" name="gp_victories">
  </div>
  <div class="mb-3">
    <label for="worldchampionships" class="form-label">Worldchampionships</label>
    <input type="text" class="form-control" required id="worldchampionships" name="worldchampionships">
  </div>
</div>
<div class="modal-footer">
<button type="button" class="btn w-auto btn-secondary m-2" data-bs-dismiss="modal">Cancel</button>
<button type="submit" class="btn w-auto btn-primary">Add</button>
</form>
@endsection