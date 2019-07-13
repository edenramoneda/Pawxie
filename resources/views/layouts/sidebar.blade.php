@extends('layouts.app')

@section('title', 'Pawxie | Home')

    @section('sidebar')
    <div id="sidebar">
    <a href="javascript:void(0)" class="closebtn text-white" onclick="closeNav()"><b>&times;</b></a>
            <div class="banner text-white">
                <div class="logo">
                    <img src="{{asset('/images/logo.png')}}">  
                </div>
                <div class="logo-name">
                    <h4>Pawxie</h4>   
                </div>    
            </div>
            <div class="Profile text-center p-3">
                <div class="image">
                    <img src="{{ asset('/images/m.jpg') }}" height="75" width="75" class="rounded-circle">
                </div>
                <div class="p-info">
                    <a href="" class="nav-link text-white mt-2">
                    Eden Ramoneda
                    </a>
                </div>
            </div>
            <ul class="li-navs list-unstyled">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('home') }}">
                    <i class="fa fa-tachometer-alt" aria-hidden="true"></i> Dashboard</a>
                </li>
                <li class="nav-item"> 
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link text-white dropdown-toggle">
                    <i class="fa fa-hospital" aria-hidden="true"></i> Patient</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="nav-item">
                            <a href="{{ url('patient/owners') }}" class="nav-link text-white">&ensp;<i class="fa fa-user" aria-hidden="true"></i> Owners</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('patient/pets') }}" class="nav-link text-white">&ensp;<i class="fa fa-medkit" aria-hidden="true"></i> Pet Patients</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('patient/petVaccination/') }}" class="nav-link text-white">&ensp;<i class="fa fa-medkit" aria-hidden="true"></i> Pet Vaccinations</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('patient/petLabTests/') }}" class="nav-link text-white">&ensp;<i class="fa fa-medkit" aria-hidden="true"></i> Pet Lab Tests</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('vaccination/') }}">
                    <i class="fa fa-heart" aria-hidden="true"></i> Vaccinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('labtest/') }}">
                    <i class="fa fa-stethoscope" aria-hidden="true"></i> Lab Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('veterinarians/') }}">
                    <i class="fa fa-user-md" aria-hidden="true"></i> Veterinarians</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="home">
                    <i class="fa fa-credit-card" aria-hidden="true"></i> Payment</a>
                </li>

            </ul>
    </div>

    <div class="toggle-btn" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
    </div>
    
    <nav class="navbar justify-content-end ess-navigation">
        <li class="nav-item text-white dropdown" title="Notifications">
            <i class="fa fa-bell" data-toggle="dropdown" id="notifDrop" aria-haspopup="true" aria-expanded="false"></i><sup> <span class="badge badge-danger" id="number_notifs">0</span></sup>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifDrop" style="width: 600px">
                <div class="card dropdown-item">
                    <div class="card-header">
                        <b>Notifications</b>
                    </div>
                </div>
            </div>
        </li>&ensp;&ensp;


        <li class="nav-item text-white dropdown" title="Messages">
            <div data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <sup><span class="badge badge-danger">
                    1
                </span></sup>
            </div>
             <div class="dropdown-menu dropdown-menu-right" style="width:400px;overflow-y:auto;height:50vh;">
                    <div class="card">
                        <div class="card-header">
                            <b>Messages</b>
                            <span>
                                <i class="fa fa-pencil-alt" title="compose message" style="float:right" data-toggle="modal" data-target="#ComposeMessageModal"></i>
                            </span>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group">
                            </ul>                    
                        </div>
                    </div>
            </div>
        </li>&ensp;&ensp;
        <li><a href="/logout">
        <i class="fa fa-user text-white" title="logout"></i></a></li>
    </nav>
    <div id="overlay" style="width: 100%; opacity: 0.9;"></div>
    @show

     <div class="container-fluid mt-5">
            @yield('content')
    </div>