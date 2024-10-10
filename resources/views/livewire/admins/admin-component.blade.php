<div>
    <div class="p-4">

        @include('livewire.content-header')
        <div class="card  mt-2">
            @include('livewire.card-header')
                @if(isset($create) && $create==1)
                    @include('livewire.admins.create')
                    @include('livewire.show')
                @endif
                @if(isset($update) && $update==1)
                @include('livewire.admins.update')
                @include('livewire.show')
            @endif
            <div class="card-body">
                <table class="table table-bordered table-responsive-lg">
                    @include('livewire.thead')
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" wire:click='updateWindow({{$user->id}})'><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click="deleteUser({{$user->id}})"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                @if(isset($users))
                    {{$users->links()}}
                @endif
            </div>
        </div>
    </div>
</div>
