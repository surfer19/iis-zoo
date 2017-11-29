@extends('layouts.app')

@section('content')
    <h2>animals</h2>

    <!-- Table -->
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Outlet</th>
            <th>Birth Date</th>
            <th>Birth Country</th>
            <th>Parent</th>
            <th>Place of animal occurrence</th>
            <th>Decription</th>
            <th>Action</th>
        </tr>
        @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->animalType->type_name }}</td>
                <td>{{ $animal->outlet->name }}</td>
                <td>{{ $animal->birth_date }}</td>
                <td>{{ $animal->birth_country }}</td>
                <td>{{ $animal->parent }}</td>
                <td>{{ $animal->occurrence_place }}</td>
                <td>{{ $animal->description }}</td>
                <td>
                    <a class="btn btn-default" href="{{ route('animals.show',$animal->id) }}">Detail</a>
                    <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-primary">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['animals.destroy', $animal->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{ route('animals.create')  }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new
                </a>
            </div>
        </div>
    </div>

    @include('Animals/animalType/animal_type')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{ route('animals.create_type')  }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new
                </a>
            </div>
        </div>
    </div>

    <div class="well invisible"></div>

@endsection