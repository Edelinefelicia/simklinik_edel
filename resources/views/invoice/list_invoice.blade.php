@extends('layout.app')

@section('title', 'Invoice')
@section('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<style>
    main {
        margin-left: 12px;
    }
body{
    /* overflow: hidden; */
    overflow-x: hidden;
}
/* Remove DataTables default styling */
table.dataTable.no-footer {
    border-bottom: none;
}
table.dataTable thead th, table.dataTable thead td {
    border-bottom: 1px solid #e5e7eb; /* your custom color */
}
table.dataTable tbody tr {
    background-color: transparent;
}
table.dataTable tbody tr:hover {
    background-color: #f3f4f6; /* your custom hover color */
}

</style>
@endsection
@section('content')

    <div class="page-title overflow-y-visible d-flex flex-column justify-content-center flex-wrap max-w-[79.5%] mb-3">
        <!--begin::Title-->
        {{-- <h4 class="page-heading d-flex text-gray-900 fw-bold fs-5 flex-column justify-content-center my-0">
            List Invoice
                </h4> --}}
                <h4 class="text-gray-900 font-bold text-lg flex flex-col justify-center my-0" >
                    List Invoice
                </h4>

        <!--end::Title-->


            <!--begin::Breadcrumb-->
<ul class="flex flex-row space-x-2 my-0 pt-1 text-gray-600">
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            Jumlah Pasien :
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            9888
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            Jumlah Dokter :
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            9888
        </p>
    </li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->

    </div>
    {{-- <div class="flex flex-col block w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="overflow-x-scroll">
            <div class="inline-block min-w-full align-middle"></div>
                <div class="overflow-hidden shadow">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="max-w-[100%]  overflow-x-auto  whitespace-nowrap block w-[98.5%] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="card-header align-items-center py-2 gap-2 gap-md-5" data-select2-id="select2-data-123-y4cr">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <div class="relative my-1">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input
                            type="text"
                            data-kt-ecommerce-product-filter="search"
                            class="form-input rounded-md pl-10 pr-4 w-64 border border-gray-300 focus:ring focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search Product">
                    </div>

                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->


        </div>
        <table id="invoiceTable" class="max-w-[72vw] inline-block divide-y overflow-auto  divide-gray-200  dark:divide-gray-600 ">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                       ID
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Tanggal
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        No.RM
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Pasien
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Owner Pasien
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Nomor Telepon
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Total
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Status
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Invoice
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-5 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </td>
                </tr>



            </tbody>
        </table>
        <div id="pagination" class="mt-4 flex justify-center space-x-2">
            <!-- Page numbers will be injected here -->
        </div>
    </div>
@endsection

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    {{-- <script>
        const data = [
            { id: 1, name: 'John Doe', email: 'john@example.com' },
            { id: 2, name: 'Jane Smith', email: 'jane@example.com' },
            { id: 3, name: 'Mike Johnson', email: 'mike@example.com' },
            { id: 4, name: 'Alice Brown', email: 'alice@example.com' },
            { id: 5, name: 'Bob Davis', email: 'bob@example.com' },
            { id: 6, name: 'Charlie Adams', email: 'charlie@example.com' },
            { id: 7, name: 'Eve Taylor', email: 'eve@example.com' },
            { id: 8, name: 'Frank Wilson', email: 'frank@example.com' },
            // Add more data as needed
        ];

        let currentPage = 1;
        const rowsPerPage = 2;

        function renderTable(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = data.slice(start, end);

            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            paginatedItems.forEach(item => {
                const row = `<tr>
                    <td class="py-2 px-4 border">${item.id}</td>
                    <td class="py-2 px-4 border">${item.name}</td>
                    <td class="py-2 px-4 border">${item.email}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        }

        function renderPagination() {
            const pageCount = Math.ceil(data.length / rowsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= pageCount; i++) {
                const pageButton = document.createElement('button');
                pageButton.className = `px-4 py-2 rounded ${i === currentPage ? 'bg-blue-500 text-white' : 'bg-gray-200'}`;
                pageButton.innerText = i;
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    renderTable(currentPage);
                    renderPagination();
                });
                pagination.appendChild(pageButton);
            }
        }

        // Search functionality
        document.getElementById('search').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const filteredData = data.filter(item =>
                item.name.toLowerCase().includes(searchTerm) ||
                item.email.toLowerCase().includes(searchTerm)
            );

            // Update the table and pagination with the filtered data
            currentPage = 1;
            renderTable(currentPage);
            renderPagination();
        });

        // Initial rendering
        renderTable(currentPage);
        renderPagination();
    </script> --}}
    <script>
        $(document).ready(function() {
    $('#invoiceTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": false, // Remove "Showing x to y of z entries"
        "lengthChange": false, // Disable entries dropdown
        "dom": 'lrtip', // Limit to search, pagination
        "pageLength": 5,
        "language": {
            "paginate": {
                "previous": "&lt;",
                "next": "&gt;"
            }
        }
    });
});

    </script>
    @endsection
