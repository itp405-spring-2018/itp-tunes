@extends('layouts.app')

@section('title', 'Invoices')

@section('content')
  <table class="table">
    <tr>
      <th>Date</th>
      <th>Last Name</th>
      <th colspan="2">First Name</th>
    </tr>
    @foreach($invoices as $invoice)
      <tr>
        <td>{{$invoice->InvoiceDate}}</td>
        <td>{{$invoice->LastName}}</td>
        <td>{{$invoice->FirstName}}</td>
        <td>
          <a href="/invoices/{{$invoice->InvoiceId}}">Details</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
