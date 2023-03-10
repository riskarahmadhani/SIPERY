@extends('layouts.main',['title'=>'Outlet'])
@section('content')
<x-content :title="[
    'name'=>'Outlet',
    'icon'=>'fas fa-store-alt'
]">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <form action="{{ route('outlet.store') }}" class="card card-lightblue" method="POST">
                <div class="card-header">
                    Buat Outlet
                </div>
                <div class="card-body">
                    @csrf
                    <x-input
                    label="Nama" 
                    name="nama" />

                    <x-input 
                    label="Telepon"
                    name="tlp" />

                    <x-textarea
                    label="Alamat"
                    name="alamat" />
                </div>
                <div class="card-footer">
                    <x-btn-submit :title="'Outlet'" /> <x-btn-back href="{{ route('outlet.index') }}" />
                </div>
            </form>
        </div>
    </div>
</x-content>
@endsection