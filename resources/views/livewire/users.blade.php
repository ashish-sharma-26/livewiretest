<div>
@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if($frmFlag)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-secondary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-secondary btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
