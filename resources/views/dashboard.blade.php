@extends('panelio::layout.layout')

@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_customers') }}" number="327">
                <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_sales') }}" number="324554521">
                <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_orders') }}" number="167">
                <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_online') }}" number="15">
                <i class="ki-duotone ki-map fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_sales_month') }}" number="1600000">
                <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('selora::base.dashboard.tiles.total_sales_last_month') }}" number="1500000">
                <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
    </div>
@endsection
