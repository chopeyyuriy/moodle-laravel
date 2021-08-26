@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список Користувачів</div>
                    <div class="card-body mt-10">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Country</th>
                                <th scope="col">City</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                @if($key !== 0 && $key !== 1)
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ isset($user->country) ? $user->country : '' }}</td>
                                        <td>{{ isset($user->city) ? $user->city : '' }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Список Курсів</div>

                    <div class="card-body mt-10">
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
                <div class="card">
                    <div class="card-header">Список користвачів зареєстрованих на курси і їх оцінку</div>

                    <div class="card-body mt-10">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Grades</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($grades->tables as $grade)
                                <tr>
                                    <th>1</th>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="4">Даних немає</th>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
