@extends('public.layout.app')
@section('content')
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ts-intro">
                        <h2 class="into-title">{{ $counter->name }}</h2>
                        <h3 class="into-sub-title">Edit {{ $counter->description }}</h3>
                        <br>
                        <a href="{{ route('counter.index') }}" class="btn btn-primary">Go Back</a>
                    </div>

                    <div class="gap-20"></div>

                    <form action="{{ route('counter.update', ['counter' => $counter->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label for="department_id">Department</label>
                                <select name="department_id" id="department_id" class="form-control">
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"
                                            {{ $department->id == $counter->department->id ? 'selected' : '' }}>
                                            {{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter counter Name" value="{{ $counter->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Enter counter Description" value="{{ $counter->description }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Update counter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
