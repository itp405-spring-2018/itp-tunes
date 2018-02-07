@extends('layouts.app')

@section('title', 'Invoice Details')

@section('content')
  <table class="table">
    <tr>
      <th>Song</th>
      <th>Quantity</th>
      <th>Unit Price</th>
    </tr>
    @foreach($invoiceItems as $invoiceItem)
      <tr>
        <td>{{$invoiceItem->TrackName}} by {{$invoiceItem->ArtistName}}</td>
        <td>{{$invoiceItem->Quantity}}</td>
        <td>{{$invoiceItem->UnitPrice}}</td>
      </tr>
    @endforeach
  </table>
@endsection
