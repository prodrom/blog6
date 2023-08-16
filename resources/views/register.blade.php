@extends("layouts.app")
@section("content")
    <div class="container">
        <h3>Register</h3>
        <form action="{{ route("admin.registerp") }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label>
                        Name
                        <input type="text" name="name" id="name" class="form-control">
                    </label>
                </div>
            </div>
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
        </form>
    </div>
@endsection
