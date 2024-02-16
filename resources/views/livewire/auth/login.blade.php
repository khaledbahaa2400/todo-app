<div>
    @if (session('error'))
        <div class="" role="alert">
            {{ session('error') }}
            <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container w-50">
        <h3 class="h3 mb-3 fw-normal">Login</h3>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input wire:model.live="email" type="email" class="form-control">

            @error('email')
                <span class="d-block fs-6 text-danger mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="password" class="mb-1">Password:</label><br>
            <input wire:model.live="password" type="password"class="form-control">

            @error('password')
                <span class="d-block fs-6 text-danger mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mt-4">
            <button wire:click="authenticate" class="btn btn-primary btn-md">submit</button>
        </div>

        <div class="text-right mt-2">
            <p class="text-left small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                    class="link-danger">Register</a></p>
        </div>
    </div>
</div>
