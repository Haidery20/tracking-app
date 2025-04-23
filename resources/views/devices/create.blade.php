@extends('layouts.app')

@section('content')
<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Add New Device</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('devices.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                                Device Name
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('name') ? 'border-red-500' : '' }}"
                                   value="{{ old('name') }}"
                                   required>
                            @if ($errors->has('name'))
                                <p class="text-red-500 text-xs italic mt-1">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="device_id" class="block text-gray-700 text-sm font-bold mb-2">
                                Device ID
                            </label>
                            <input type="text" 
                                   id="device_id" 
                                   name="device_id" 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('device_id') ? 'border-red-500' : '' }}"
                                   value="{{ old('device_id') }}"
                                   required>
                            @if ($errors->has('device_id'))
                                <p class="text-red-500 text-xs italic mt-1">
                                    {{ $errors->first('device_id') }}
                                </p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                                Description
                            </label>
                            <textarea id="description" 
                                      name="description" 
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('description') ? 'border-red-500' : '' }}"
                                      rows="3">
                                {{ old('description') }}
                            </textarea>
                            @if ($errors->has('description'))
                                <p class="text-red-500 text-xs italic mt-1">
                                    {{ $errors->first('description') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex items-center justify-between">
                            <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Add Device
                            </button>
                            <a href="{{ route('devices.index') }}" class="inline-block align-baseline font-bold text-sm text-primary hover:text-primary/90">
                                Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
