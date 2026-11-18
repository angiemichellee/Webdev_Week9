@extends('layouts.app')

@section('title', 'Laptop List')

@push('styles')
<style>
    .table-wrap {
        overflow-x: auto;
        border: 1px solid var(--border);
        border-radius: 12px;
    }

    table { width: 100%; border-collapse: collapse; font-size: 15px; }

    thead th {
        background: var(--primary-soft);
        color: var(--primary-dark);
        text-align: left;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .05em;
        padding: 14px 18px;
    }

    tbody td {
        padding: 14px 18px;
        border-top: 1px solid var(--border);
        white-space: nowrap;
    }

    tbody tr { transition: background .15s; }
    tbody tr:hover { background: #fff7f9; }

    .col-num { color: var(--muted); width: 48px; }
    .brand-cell { font-weight: 600; }

    .badge {
        display: inline-block;
        background: var(--primary-soft);
        color: var(--primary-dark);
        font-weight: 600;
        font-size: 13px;
        padding: 4px 10px;
        border-radius: 999px;
    }

    .empty {
        text-align: center;
        padding: 48px 20px;
        color: var(--muted);
    }

    .empty .icon { font-size: 40px; margin-bottom: 8px; }
</style>
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <div>
            <h1>Laptop List</h1>
            <p class="subtitle">{{ $laptops->count() }} {{ Str::plural('laptop', $laptops->count()) }} saved</p>
        </div>
        <a href="{{ url('/create-laptop') }}" class="btn">+ Add Laptop</a>
    </div>

    @if ($laptops->isEmpty())
        <div class="empty">
            <div class="icon">📭</div>
            <p>No laptops yet. Click <strong>Add Laptop</strong> to create one.</p>
        </div>
    @else
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th class="col-num">#</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Processor</th>
                        <th>RAM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laptops as $laptop)
                    <tr>
                        <td class="col-num">{{ $loop->iteration }}</td>
                        <td class="brand-cell">{{ $laptop->brand }}</td>
                        <td>{{ $laptop->model }}</td>
                        <td>{{ $laptop->prosessor }}</td>
                        <td><span class="badge">{{ $laptop->ram }} GB</span></td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                            <a href="{{ route('edit-laptop', $laptop) }}" style="background: orange; color: white; padding: 2px 10px; text-decoration: none; border-radius: 3px;">Edit</a>
                            <form method="POST" action="{{ route('delete-laptop') }}">
                                @csrf
                                <input type=hidden name="id" value="{{ $laptop->id }}">
                                <input style="background: red; color:white" type="submit" value="Hapus">
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
