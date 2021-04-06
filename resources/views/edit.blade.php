<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FLOSSPA Editar Asistencia Evento </title>
    <link rel="stylesheet" href="{{asset('css/appp.css')}}">
    <link rel="stylesheet" href="{{asset('css/registry.css')}}">


</head>

<body>
    <div class="container">
        <!-- <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}"> -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif

        <form method="post" action="{{action('App\Http\Controllers\StudentController@update', $id)}}" id="formRegistry">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">ADM NUMBER</label>
                    <input type="text" class="form-control" name="admin" value="{{$students->admin}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">FIRST NAME</label>
                    <input type="text" class="form-control" name="fullname" value="{{$students->fullname}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">SURNAME</label>
                    <input type="text" class="form-control" name="surname" value="{{$students->surname}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">COURSE</label>
                    <input type="text" class="form-control" name="speciality" value="{{$students->speciality}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">NATIONAL ID:</label>
                    <input type="text" class="form-control" name="nationalid" value="{{$students->nationalid}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">AGE</label>
                    <input type="text" class="form-control" name="age" value="{{$students->age}}">
                </div>
               
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">EMAIL</label>
                    <input type="text" class="form-control" name="email" value="{{$students->email}}">
                </div>
               
            </div>

            <h6><b>Guardian Information</b></h6>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN NAME</label>
                    <input type="text" class="form-control" name="guardianfname" value="{{$students->guardianfname}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN NATIONAL ID</label>
                    <input type="text" class="form-control" name="guarrdian_nationalid"
                        value="{{$students->guarrdian_nationalid}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN MOBILE</label>
                    <input type="text" class="form-control" name="guardian_mobile"
                        value="{{$students->guardian_mobile}}">
                </div>
            </div>





            <div class="row">

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <div id="toast-container" class="toast-top-right">
    </div </body>

</html>
        </div>
    </div>
</x-app-layout>




