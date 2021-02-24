<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>examen2eva</title>
</head>

<body>
    <h1>Form</h1>
    <!-- Errors -->
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="post">
        <!-- Company's Name -->
        <div class="form-group form-control-sm">
            <label for="companyName">Company's Name</label>
            <input type="text" class="form-control" id="companyName" required placeholder="Enter your Company's Name"
                value="{{old('companyName')}}">
            <div>{!! $errors->first('companyName','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Document Type -->
        <div class="form-group form-control-sm">
            <label for="docType">Document Type</label>
            <select class="form-control" id="docType" required>
                <option value="dni" @if (old('docType')==='dni' ) selected @endif>DNI</option>
                <option value="nie" @if (old('docType')==='nie' ) selected @endif>NIE</option>
                <option value="passport" @if (old('docType')==='passport' ) selected @endif>Passport</option>
                <option value="notSelected" @if (old('docType')==='notSelected' ) selected @endif>Not Selected</option>
            </select>
            <div>{!! $errors->first('docType','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- NIF -->
        <div class="form-group form-control-sm">
            <label for="nif">NIF Number</label>
            <input type="text" class="form-control" id="nif" required placeholder="Enter your NIF number"
                value="{{old('nif')}}">
            <div>{!! $errors->first('nif','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Name -->
        <div class="form-group form-control-sm">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter your name"
                value="{{old('name')}}">
            <div>{!! $errors->first('name','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Surname 1 -->
        <div class="form-group form-control-sm">
            <label for="surname1">First Surname</label>
            <input type="text" class="form-control" id="surname1" required placeholder="Enter your first surname"
                value="{{old('surname1')}}">
            <div>{!! $errors->first('surname1','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Surname 2 -->
        <div class="form-group form-control-sm">
            <label for="surname2">Second Surname</label>
            <input type="text" class="form-control" id="surname2" placeholder="Enter your second surname"
                value="{{old('surname2')}}">
            <div>{!! $errors->first('surname2','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Document's Country -->
        <div class="form-group form-control-sm">
            <label for="docCountry">Document's Country</label>
            <select class="form-control" id="docCountry" required>
                <option value="america" @if (old('docCountry')==='america' ) selected @endif>America</option>
                <option value="spain" @if (old('docCountry')==='spain' ) selected @endif>Spain</option>
                <option value="uk" @if (old('docCountry')==='uk' ) selected @endif>United Kingdom</option>
                <option value="notSelected" @if (old('docCountry')==='notSelected' ) selected @endif>Not Selected
                </option>
            </select>
            <div>{!! $errors->first('docCountry','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Province -->
        <div class="form-group form-control-sm">
            <label for="province">Province</label>
            <select class="form-control" id="province" required>
                <option value="cataluna" @if (old('province')==='cataluna' ) selected @endif>Cataluña</option>
                <option value="madrid" @if (old('province')==='madrid' ) selected @endif>Madrid</option>
                <option value="illesBalears" @if (old('province')==='illesBalears' ) selected @endif>Illes Balears
                </option>
                <option value="notSelected" @if (old('province')==='notSelected' ) selected @endif>Not Selected</option>
            </select>
            <div>{!! $errors->first('province','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- County -->
        <div class="form-group form-control-sm">
            <label for="county">County</label>
            <select class="form-control" id="county" required>
                <option value="barcelona" @if (old('county')==='barcelona' ) selected @endif>Barcelona</option>
                <option value="madrid" @if (old('county')==='madrid' ) selected @endif>Madrid</option>
                <option value="palma" @if (old('county')==='palma' ) selected @endif>Palma de Mallorca</option>
                <option value="notSelected" @if (old('county')==='notSelected' ) selected @endif>Not Selected</option>
            </select>
            <div>{!! $errors->first('county','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Status -->
        <div class="form-group form-control-sm">
            <label for="status">Status</label>
            <select class="form-control" id="status">
                <option value="active" @if (old('status')==='active' ) selected @endif>Active</option>
                <option value="notActive" @if (old('status')==='notActive' ) selected @endif>Not Active</option>
                <option value="notSelected" @if (old('status')==='notSelected' ) selected @endif>Not Selected</option>
            </select>
            <div>{!! $errors->first('status','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <!-- Telephone -->
        <div class="form-group form-control-sm">
            <label for="tel">Telephone Number</label>
            <input type="text" class="form-control" id="tel" placeholder="Enter your telephone number"
                value="{{old('tel')}}">
            <div>{!! $errors->first('tel','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <div class="form-group form-control-sm">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" value="{{old('email')}}">
            <div>{!! $errors->first('email','<small class="text-danger">:message</small>') !!}</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>