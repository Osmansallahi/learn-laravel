@extends('Employees.layout')
@section('title', 'List Employee')
@section('content')
@if (session('success'))
<div class="bg-green-500 text-white p-4 mb-4 rounded">
    {{ session('success') }}
</div>
@endif
@if ($errors->any())
<div class="bg-red-500 text-white p-4 mb-4 rounded">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container mx-auto">
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class=" border-b border-gray-200">ID</th>
                <th class=" border-b border-gray-200">Nom</th>
                <th class=" border-b border-gray-200">Prénom</th>
                <th class=" border-b border-gray-200">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr class="border-b border-gray-200">
                <td class="px-4 text-center py-2">{{ $employee->id }}</td>
                <td class="px-4 text-center py-2">{{ $employee->nom }}</td>
                <td class="px-4 text-center py-2">{{ $employee->prenom }}</td>
                <td class="px-4 text-center py-2">{{ $employee->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
