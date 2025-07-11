@php
Use Illuminate\Support\Facades\App;

$my_app_name = env('APP_NAME');
// $my_db_name = ENV

echo $my_app_name; ECHO "<br>";

$my_config_data = config('app.timezone');

ECHO $my_config_data;  ECHO "<br>";


// $my_global_helpers = asset(), urll(), route(), view(), auth();


$time = config(['app.timezone' => 'Asia/Seoul']);

echo $time; ECHO "<br>";

@endphp


{{ __('messages.welcome') }};

<br>

{{ __('passwords.sent') }}


