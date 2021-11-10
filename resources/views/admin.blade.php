@foreach ($admins as $admin)
    {{ $admin->name }} <br>
    {{ $admin->email }}
@endforeach
