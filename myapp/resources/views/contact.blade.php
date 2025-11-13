@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <h2>Welcome to my home page!</h2>
    <p>Email: tonynguyen@gmail.com</p>
        <input type="text">
        <input type="phone">
        <input type="email">
        <input type="text">
        <a href="{{ route( 'home.page' ) }}">Home</a>
@endsection
