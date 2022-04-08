@extends('layouts.app')

@section('content')
  

<div class="container-fluid">
<div class="row">
  <nav id="sidebarMenu " class=" bg-light sidebar ml-2 ">
    <div class="shadow-lg bg-body rounded">
        <div id="text-center" class="text-center">
            <b>DASHBOARD</b>
        </div>
      <ul class="nav flex-column text-center">
        <li class="nav-item ">
          <a class="nav-link" href="/subject">
            SUBJECT
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/instructor">
            INSTRUCTOR
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">
            STUDENT
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            ATTENDED
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            ABSENT
          </a>
        </li>
      </ul>
    </div>
  </nav>

   <main class="py-4 mx-auto">
    @yield('main')
   </main>
@endsection
