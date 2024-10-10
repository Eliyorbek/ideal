<div>
    @include('livewire.content-header')
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Matematika
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matem as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Kimyo
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kimyo as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    English
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($english as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Ona tili
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ona as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Tarix
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarix as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                  Huquq
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($huquq as $item)
                        <tr>
                            <td>{{$kimyo->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Geografiya
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($geografiya as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Biologiya
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biologiya as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                   Fizika
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fizika as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Rus tili
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rus as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  collapsed-card card-outline">
        <div class="card-header">
            <h3 class="card-title" style="display: flex; justify-content: space-between; max-width: 100%; width: 100%">
                <h2 class="my-span" style="flex: 0 0 80px">
                    Arab tili
                </span>
            
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arab as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td><button class="btn btn-danger btn-sm" wire:click='deleteUser({{$item->id}})'><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
</div>