@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
@section('plugins.BootstrapSwitch', true)
<x-admin-lte-layout>
    <x-slot name="header">

        {{__("Liste des matériels")}}

    </x-slot>

<div class="container-fluid">


    <livewire:show-materiels

     hideable="select"
    exportable/>

</div>



</x-admin-lte-layout>
