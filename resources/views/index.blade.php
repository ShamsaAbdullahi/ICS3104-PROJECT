<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/appp.css')}}">
</head>

<body>
    <div class="container">
        <!-- <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}"> -->
        <div class="block mb-8">
                <a href="{{ route('students.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Student</a>
            </div>
        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>

                    <th>First Name</th>
                    <th>Surname</th>

                    <th>Course</th>
                    <th>Email</th>

                    <th>Age</th>
                    <th colspan="2">Action</th>
                   

                </tr>
            </thead>
            <tbody>
                @foreach($students as $students)
                <tr>
                    <td>{{$students['id']}}</td>
                    <td>{{$students['fullname']}}</td>
                    <td>{{$students['surname']}}</td>
                    <td>{{$students['speciality']}}</td>
                    <td>{{$students['email']}}</td>
                    <td>{{$students['age']}}</td>
                    

                    <td><a href="{{action('App\Http\Controllers\StudentController@edit', $students['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to delete?');"
                            action="{{action('App\Http\Controllers\StudentController@destroy', $students['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

        </div>
    </div>
</x-app-layout>


    



