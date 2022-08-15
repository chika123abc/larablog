@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content') 
<div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="{{ asset('./back/static/logo.svg') }}" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="." method="get" autocomplete="off">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Forgot Password</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-2">
             
             
            </div>
            <div class="mb-2">
            <a style="text-align:center;" href="{{ route('authorlogin')}}">Go Back</a>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Send Email</button>
            </div>
          </div>
        
         
      </div>
    </div>
@endextends