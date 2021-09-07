@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>UUID</th>
            <th>Post</th>
            <th>Material</th>
            <th>Production store</th>
            <th>Order</th>
            <th>Nomenclarure</th>
            <th>Designation</th>
            <th>Quantity required</th>
            <th>Quantity Confirmed</th>
            <th>Quantity withdraw</th>
            <th>Quantity missing</th>
            <th>Unit</th>
            <th>Requirement date</th>
            <th>Post type</th>
            <th>Division</th>
            <th>Store</th>
            <th>Purchase document</th>
            <th>Deleted post</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materials as $input)
        <tr>
        <td> {{$input->uuid}}</td>
        <td> {{$input->post}}</td>
        <td>{{ $input->material }}</td>
        <td>{{ $input->production_store }}</td>
        <td>{{ $input->order }}</td>
        <td>{{ $input->nomenclature }}</td>
        <td>{{ $input->designation }}</td>
        <td>{{ $input->quantity_required }}</td>
        <td>{{ $input->quantity_confirmed }}</td>
        <td>{{ $input->quantity_withdraw }}</td>
        <td>{{ $input->quantity_missing }}</td>
        <td>{{ $input->unit }}</td>
        <td>{{ $input->requirement_date }}</td>
        <td>{{ $input->post_type }}</td>
        <td>{{ $input->division }}</td>
        <td>{{ $input->store }}</td>
        <td>{{ $input->purchase_document }}</td>
        <td>{{ $input->deleted_post }}</td>
    </tr>
        @endforeach
    </tbody>
</table>

@endsection
