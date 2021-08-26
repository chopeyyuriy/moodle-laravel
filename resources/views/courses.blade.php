@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список Курсів</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date start</th>
                                <th scope="col">Date end</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $key => $course)
                                @if($key !== 0)
                                <tr>
                                    <th scope="row">{{ $course->id }}</th>
                                    <td>{{ $course->fullname }}</td>
                                    <td>{{ gmdate("Y-m-d H:i:s", $course->startdate) }}</td>
                                    <td>{{ gmdate("Y-m-d H:i:s", $course->enddate) }}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
