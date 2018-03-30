@if($errors->get($field))
    <ul class="text-danger">
        @foreach($errors->get($field) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif