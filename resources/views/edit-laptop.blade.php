@extends('layouts.app')

@section('title', 'Edit Laptop')

@push('styles')
<style>
    .form-group { margin-bottom: 18px; }
    .form-group label { display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px; }
    .form-group input {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid var(--border);
        border-radius: 10px;
        font: inherit;
    }
    .error { color: var(--primary); font-size: 13px; margin-top: 4px; }
    .btn-secondary { background: #9ca3af; }
</style>
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <div>
            <h1>Edit Laptop</h1>
            <p class="subtitle">Change the data of laptop #{{ $laptop->id }}</p>
        </div>
    </div>

    {{-- route('update-laptop', $laptop) -> /update-laptop/{id} --}}
    <form method="POST" action="{{ route('update-laptop', $laptop) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Brand</label>
            <input type="text" name="brand" value="{{ old('brand', $laptop->brand) }}">
            @error('brand') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" value="{{ old('model', $laptop->model) }}">
            @error('model') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Processor</label>
            <input type="text" name="prosessor" value="{{ old('prosessor', $laptop->prosessor) }}">
            @error('prosessor') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>RAM (GB)</label>
            <input type="number" name="ram" value="{{ old('ram', $laptop->ram) }}">
            @error('ram') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn">Update Laptop</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
