@extends('components.layout')

@section('content')
    <div class="container px-4 my-8">
        <div class="p-4 bg-white rounded-lg shadow max-w-sm">
            <h3 class="text-3xl font-bold text-slate-800 mb-4">Anda sudah login</h3>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="py-3 px-4 bg-white border rounded-full text-center text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-white transition duration-500">Logout</button>
            </form>
        </div>
    </div>
@endsection
