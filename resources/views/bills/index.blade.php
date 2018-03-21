@extends('layouts.master')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-6">
            <h3>Split My Bill</h3>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-6">
            <form method="GET" action="/split-bill">
                <div class="form-group">
                    <label for="amount">What's the total amount?</label>

                    <div class="input-group">
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="15.99">

                        <div class="input-group-append">
                            <span class="input-group-text">Euro</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="number-of-people">How many are paying?</label>

                    <input type="number" class="form-control" id="number-of-people" name="number-of-people" placeholder="3">
                </div>

                <div class="form-group">
                    <label for="tip">How was the service?</label>

                    <select class="form-control" id="tip" name="tip">
                        <option value="0.25" selected>Excellent (25% Tip)</option>
                        <option value="0.15">Good (15% Tip)</option>
                        <option value="0.05">Poor (5% Tip)</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="round-up" name="round-up">

                        <label class="form-check-label" for="round-up">Want me to round up?</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Calculate!</button>
            </form>
        </div>
    </div>
@endsection