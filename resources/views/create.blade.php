<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>STUDENT MANAGEMENT SYSTEM </title>
    <link rel="stylesheet" href="{{asset('css/appp.css')}}">
    <link rel="stylesheet" href="{{asset('css/registry.css')}}">


</head>

<body>
    <div class="container">
        <!-- <img alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}"> -->

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

        <form method="post" action="{{url('students')}}" id="formRegistry">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">ADM NUMBER:</label>
                    <input type="number" class="form-control" name="admin" value={{old('admin')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">FIRST NAME:</label>
                    <input type="text" class="form-control" name="fullname" value={{old('fullname')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">SURNAME:</label>
                    <input type="text" class="form-control" name="surname" value={{old('surname')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">COURSE</label>
                    <input type="text" class="form-control" name="speciality" value={{old('speciality')}}>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">NATIONAL ID</label>
                    <input type="number" class="form-control" name="nationalid" value={{old('nationalid')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">AGE</label>
                    <input type="number" class="form-control" name="age" value={{old('age')}}>
                </div>
                
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">STUDENT EMAIL</label>
                    <input type="email" class="form-control" name="email" value={{old('email')}}>
                </div>
               
            </div>

            <h6><b>Guardian Information</b></h6>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN NAME</label>
                    <input type="text" class="form-control" name="guardianfname" value={{old('guardianfname')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN NATIONAL ID</label>
                    <input type="number" class="form-control" name="guarrdian_nationalid"
                        value={{old('guarrdian_nationalid')}}>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN MOBILE</label>
                    <input type="tel" class="form-control" name="guardian_mobile" value={{old('guardian_mobile')}}>
                </div>

            </div>





            <div class="row">

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-success">REGISTER</button>
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












