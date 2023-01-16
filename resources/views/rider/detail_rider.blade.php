@extends('layouts.main')
@section('container')
            <h3 class="text-center mt-3">Edit data</h3>
            <form method="post" action="/update/rider/{{ $rider->id }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label >Name</label>
                    <input type="text" class="form-control" required id="name" name="name" value="{{ old('name', $rider->name) }}">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">number</label>
                    <input type="number" class="form-control" required id="number" name="number" value="{{ old('number', $rider->number) }}">
                </div>
                <div class="mb-3">
                    <label for="team_id" class="form-label">team</label>
                    <select class="form-select" name="team_id" id="">
                        @foreach ($team as $data)
                            @if (old('team_id', $rider->team_id == $data->id))
                                <option name="team_id" value="{{ $data->id }}" selected>{{ $data->name }}</option>    
                            @else
                                <option name="team_id" value="{{ $data->id }}">{{ $data->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="img_flag" class="form-label">nationality</label>
                    <input type="file" class="form-control" id="img_flag" name="img_flag" value="{{ old('img_flag', $rider->img_flag) }}">
                </div>
                <div class="mb-3">
                    <label for="img_rider" class="form-label">image</label>
                    <input type="file" class="form-control" id="img_rider" name="img_rider" value="{{ old('img_rider', $rider->img_rider) }}">
                </div>
                <div class="mb-3">
                <label for="icon_rider" class="form-label">icon</label>
                <input type="text" class="form-control" id="icon_rider" name="icon_rider" value="{{ old('icon_rider', $rider->icon_rider) }}">
              </div>
            <a type="button" href="/dashboard/riders" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
@endsection