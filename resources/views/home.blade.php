@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Your Balance: ₦{{ number_format($account->balance, 2) }}</h3>

            <form action="{{ route('deposit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="amount">Deposit Amount:</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Deposit</button>
            </form>

            <form action="{{ route('withdraw') }}" method="POST" style="margin-top: 20px;">
                @csrf
                <div class="form-group">
                    <label for="amount">Withdraw Amount:</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-danger">Withdraw</button>
            </form>
        </div>
    </div>
</div>
@endsection
