@extends('Employees.layout')
@section('title', 'add employee')
@section('content')
    
<form action="{{ route('employee.store') }}" method="POST" class="w-[700px] mx-auto my-48 border-black rounded-xl shadow-xl
 shadow-orange-600 border-6 p-8 bg-white">
 <h1 class="text-5xl text-center my-6">Ajouter un employé</h1>
    @csrf
    <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
            <input type="text" name="nom" id="nom" class="p-2 outline-none border-2 border-green-300 text-gray-500 font-bold rounded-md shadow-sm w-full {{ $errors->has('nom') ? 'border-red-500' : '' }}" >
            @if ($errors->has('nom'))
                <p class="text-red-500 text-sm mt-1">{{ $errors->first('nom') }}</p>
            @endif
        </div>
        <div class="mb-4">
            <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prénom:</label>
            <input type="text" name="prenom" id="prenom" class="p-2 outline-none border-2 border-green-300 text-gray-500 font-bold rounded-md shadow-sm w-full {{ $errors->has('prenom') ? 'border-red-500' : '' }}" >
            @if ($errors->has('prenom'))
                <p class="text-red-500 text-sm mt-1">{{ $errors->first('prenom') }}</p>
            @endif
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" class="p-2 outline-none border-2 border-green-300 text-gray-500 font-bold rounded-md shadow-sm w-full {{ $errors->has('email') ? 'border-red-500' : '' }}" >
            @if ($errors->has('email'))
                <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter</button>
    </form>
@endsection