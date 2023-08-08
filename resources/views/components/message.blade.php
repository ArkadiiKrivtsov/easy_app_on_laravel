@if(session()->has('message'))
    <div class="flash_message_success">
        <p>{{ session('message') }}</p>
    </div>
@endif
