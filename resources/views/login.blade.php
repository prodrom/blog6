@extends("layouts.app")
@section("content")
    <h3>Login</h3>
    <form action="{{ route("admin.loginp") }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label>
                    Email
                    <input type="text" name="email" id="email" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Password
                    <input type="password" name="password" id="password" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>
        </div>
        @if($errors->any() )
            <div class="row">
                <div class="col-12">
                    <label class="bg-danger">{{ $errors->first() }}</label>
                </div>
            </div>
        @endif
    </form>
@endsection
