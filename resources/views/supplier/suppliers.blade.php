{{-- master template --}}
@extends('layouts.master')

{{-- header --}}
@includeIf('layouts.header')

{{-- sidebar --}}
@includeIf('layouts.sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blank Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
    </div>

{{-- footer --}}
@extends('layouts.footer')