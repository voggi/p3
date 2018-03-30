@extends('layouts.master')

@section('content')
    <div class="col-6">
        <p class="text-center">
            This is a simple app to split a bill.<br>

            <small class="text-muted">* Required Field</small>
        </p>

        <form method="GET" action="{{ url('result') }}">
            <div class="form-group">
                <label for="amount">* What's the total amount?</label>

                <div class="input-group">
                    <input type="number"
                           class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}"
                           id="amount"
                           name="amount"
                           placeholder="e.g. 15.99"
                           step="0.01"
                           value="{{ old('amount') }}">

                    <div class="input-group-append">
                        <span class="input-group-text">Euro</span>
                    </div>
                </div>

                @include('modules.error-field', ['field' => 'amount'])
            </div>

            <div class="form-group">
                <label for="number-of-people">* How many are paying?</label>

                <input type="number"
                       class="form-control {{ $errors->has('number-of-people') ? 'is-invalid' : '' }}"
                       id="number-of-people"
                       name="number-of-people"
                       placeholder="e.g. 3"
                       value="{{ old('number-of-people') }}">

                @include('modules.error-field', ['field' => 'number-of-people'])
            </div>

            <div class="form-group">
                <label for="tip">How was the service?</label>

                <select class="form-control" id="tip" name="tip">
                    <option value="0.25" {{ old('tip') == '0.25' ? 'selected' : '' }}>
                        Excellent (25% Tip)
                    </option>
                    
                    <option value="0.15" {{ old('tip') == '0.15' ? 'selected' : '' }}>
                        Good (15% Tip)
                    </option>
                    
                    <option value="0.05" {{ old('tip') == '0.05' ? 'selected' : '' }}>
                        Poor (5% Tip)
                    </option>
                </select>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox"
                           class="form-check-input"
                           id="round-up"
                           name="round-up"
                           {{ old('round-up') ? 'checked' : '' }}>

                    <label class="form-check-label" for="round-up">Want me to round up?</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Calculate!</button>
        </form>
    </div>
@endsection