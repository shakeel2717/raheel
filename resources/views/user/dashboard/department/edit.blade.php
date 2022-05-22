@extends('public.layout.app')
@section('content')
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ts-intro">
                        <h2 class="into-title">{{ $department->name }}</h2>
                        <h3 class="into-sub-title">Edit {{ $department->description }}</h3>
                        <br>
                        <a href="{{ route('department.index') }}" class="btn btn-primary">Go Back</a>
                    </div>

                    <div class="gap-20"></div>

                    <form action="{{ route('department.update', ['department' => $department->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Department Name" value="{{ $department->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Enter Department Description" value="{{ $department->description }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Update Department</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
