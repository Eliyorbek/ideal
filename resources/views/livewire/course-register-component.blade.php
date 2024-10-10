<div>
    <div class="p-4">

        @include('livewire.content-header')
        <div class="card  mt-2">
            <div class="card-header d-flex align-items-center justify-content-end" style="gap:10px; line-height: 20px;">
                <div class="search">
                    <form action="">
                        <div class="form-group d-flex" style="gap:10px;">
                            <input type="search" wire:model.live="search" name="" id="" style=" padding:6px; outline: none; border-color: blue; height: 30px;margin-top: 14px; border-radius: 5px; width: 12rem" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive-lg">
                    @include('livewire.thead')
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->course->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" wire:click='deleteUser({{$user->id}})'><i class="fas" style="font-size: 18px; color:#fff;">X</i></button>
                                    <button class="btn btn-sm btn-success" wire:click="editStatus({{$user->id}})"><i class="fa fa-check"></i></button>
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
