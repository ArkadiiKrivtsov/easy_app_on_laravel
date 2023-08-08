@if($errors->any())
    <div class="flash_message_error">
        @foreach($errors->all() as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
