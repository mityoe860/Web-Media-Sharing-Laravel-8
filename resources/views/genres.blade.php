@extends('layout.main')
@section('container')


<div class="container">




    <div class="container">
        <h1 class="mb-4">{{ $title }}</h1>
        <div class="container">
            <div class="card mb-3">
                <div class="row">
                  <div class="col-md-4">
            <div class="list-group-md-4">
                <button type="button" class="list-group-item list-group-item-action">
                  The current button
                </button>
                <button type="button" class="list-group-item list-group-item-action">A second item</button>
                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
              </div></div></div></div></div>

            @endsection
