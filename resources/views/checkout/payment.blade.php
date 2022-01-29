@extends('layouts.auth')

@section('content')
<div class="login-form">
  <form action="/checkout/payment/{{ $transaction->id }}" method="post"  style="max-width: 900px; width: 100%" enctype="multipart/form-data">
    <h2>Pembayaran untuk pesanan <span class="text-primary">{{ $room->name }}</span></h2>
    @error
    @success

    <img src="{{ $room->image }}" style="height: 200px; width: 100%; object-fit: cover;" alt="">

    <h3 class="mt-4">Transfer Ke </h3>
    <table class="table">
      <tr>
        <td>Bank </td>
        <td>:</td>
        <td>BANK JAGO </td>
      </tr>
      <tr>
        <td>Nama </td>
        <td>:</td>
        <td>Hendrawan </td>
      </tr>
      <tr>
        <td>Nomor Akun </td>
        <td>:</td>
        <td>087654567890876 </td>
      </tr>
      <tr>
        <td>Jumlah </td>
        <td>:</td>
        <td>IDR {{ $transaction->total }} </td>
      </tr>
    </table>
    
    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
    <div class="form-group">
      <label for="total" class="col-form-label">Nama Akun </label>
      <input type="text" placeholder="Dominic Toreto" class="form-control" name="account_name" >
    </div>
    <div class="form-group">
      <label for="total" class="col-form-label">Nomor Akun </label>
      <input type="text" placeholder="23456789" class="form-control" name="account_number" >
    </div>
    <div class="form-group">
      <label for="total" class="col-form-label">Jumlah </label>
      <input type="text" placeholder="10.000" class="form-control" name="account_number" >
    </div>
    <div class="form-group">
      <label for="total" class="col-form-label">Bukti </label>
      <input type="file" placeholder="10" class="form-control" name="file" >
    </div>
    <button type="submit">Pay Now</button>    
  </form>
</div>
@endsection