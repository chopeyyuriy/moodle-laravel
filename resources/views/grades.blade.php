@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список користвачів зареєстрованих на курси і їх оцінку</div>

                    <div class="card-body">
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
