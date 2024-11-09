@extends('layout.app')

@section('title', 'dashboard')
@section('content')
<div class="w-full">
<div class="grid  gap-[30px]">

    <!-- Header -->
    <div class="col-span-2 flex justify-between">
        <div>
            <h2 class="text-xl font-medium">Dashboard</h2>
            <p class="text-[#4B5675]">Central Hub for Personal Customization</p>
        </div>
        <button class="bg-white text-[#4B5675] h-8 px-4 text-xs border border-1 border-[#DBDFE9] hover:bg-[#DBDFE9] self-center rounded-md">View Profile</button>
    </div>

    <!-- Summary -->
    <div>
        @include('dashboardlayout.summary')
    </div>
    <div>
        @include('dashboardlayout.selamatdatang')
    </div>
    <div>
        @include('dashboardlayout.ringkasanklinik')
    </div>
    <div>
        @include('dashboardlayout.grafiktingkat')
    </div>
    <div>
        @include('dashboardlayout.grafiklingkaranobat')
    </div>
    <div>
        @include('dashboardlayout.tabeltransaksi')
    </div>




</div>
</div>

@endsection
