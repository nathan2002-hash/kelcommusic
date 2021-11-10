@foreach ($admins as $admin)
    {{ $admin->name }} <br>
    {{ $admin->email }}<br>
    {{ $admin->password }}
@endforeach
