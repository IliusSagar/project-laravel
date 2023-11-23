@extends('welcome')

@section('content')

<div class="container mt-2">
<h1>Manage Expense</h1>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Sl</th>
            <th scope="col">Expense Name</th>
            <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  @foreach($expense as $key => $row)
        <tr>
            <td scope="row"> {{ $key+1 }}</td>
            <td > {{ $row->name }}</td>
            <td > {{ $row->amount }}</td>
        </tr>

        @endforeach

  </tbody>
</table>



@endsection

