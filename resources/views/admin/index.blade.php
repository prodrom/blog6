@extends("layouts.app")
@section("content")
    Admin sayfasına hoşgeldiniz.
    <a href="{{ route("admin.logoutp") }}" class="btn btn-warning">Çıkış</a>
@endsection
