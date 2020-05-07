@extends('layouts.proyek')
@section('contents')
    @yield('content')
@endsection
@section('sidebar')
<div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <li><a href="{{route('guest.index')}}"> <i class="fa fa-home"></i>Home                             </a></li>
          @if (Auth::user())
          @if (Auth::user()->status=="ADMIN"||Auth::user()->status=="GURU"||Auth::user()->status=="UMUM")
          <li><a href="{{route('rekammedik.index')}}"> <i class="fa fa-book-medical"></i>Data Penjaringan Kesehatan Anak                             </a></li>
          @endif
          @endif
          <li><a href="{{route('guest.pojokbaca')}}"> <i class="fa fa-book"></i>Pojok Baca                            </a></li>
    </ul>
  </div>

@endsection
