@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Professors</h1>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($professors as $professor)
                <tr>
                    <td>{{ $professor->name }}</td>
                    <td>{{ $professor->created_at?->diffForHumans() }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center text-muted">No professors found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">{{ $professors->links() }}</div>
</div>
@endsection


