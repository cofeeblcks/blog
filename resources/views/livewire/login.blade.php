<div>
    @if( session('message') )
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="login">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" wire:model="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-block btn-dark">Login</button>
        </div>
    </form>
</div>