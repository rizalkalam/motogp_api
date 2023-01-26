@extends('layouts.main')
@section('container')
            <h3 class="text-center mt-3">Edit data</h3>
            <form method="post" action="/update/team/{{ $team->id }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label >Name</label>
                    <input type="text" class="form-control" required id="name" name="name" value="{{ old('name', $team->name) }}">
                </div>
                <div class="mb-3">
                    <label for="bike" class="form-label">bike</label>
                    <input type="bike" class="form-control" required id="bike" name="bike" value="{{ old('bike', $team->bike) }}">
                </div>
                {{-- <div class="mb-3">
                    <label for="rider_id" class="form-label">rider</label>
                    <select class="form-select" name="rider_id" id="">
                        @foreach ($rider as $data)
                            @if (old('rider_id', $team->rider_id == $data->id))
                                <option name="rider_id" value="{{ $data->id }}" selected>{{ $data->name }}</option>    
                            @else
                                <option name="rider_id" value="{{ $data->id }}">{{ $data->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div> --}}
                <div class="mb-3">
                    <label for="img_bike" class="form-label">image</label>
                    <input type="file" class="form-control" required id="img_bike" name="img_bike" value="{{ old('img_bike', $team->img_bike) }}">
                </div>
                <div class="mb-3">
                    <label for="main_color" class="form-label">main color</label>
                    <input type="text" class="form-control" required id="main_color" name="main_color" value="{{ old('main_color', $team->main_color) }}">
                </div>
            <a type="button" href="/dashboard/teams" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
@endsection