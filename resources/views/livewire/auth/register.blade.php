<div class="container w-50">
    <h3 class="h3 mb-3 fw-normal">Register</h3>

    <div class="form-group">
        <label for="name">Name:</label><br>
        <input wire:model.live="name" type="text" class="form-control">

        @error('name')
            <span class="d-block fs-6 text-danger mt-1">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mt-2">
        <label for="email">Email:</label><br>
        <input wire:model.live="email" type="email" class="form-control">

        @error('email')
            <span class="d-block fs-6 text-danger mt-1">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mt-2">
        <label for="password">Password:</label><br>
        <input wire:model.live="password" type="password" class="form-control">

        @error('password')
            <span class="d-block fs-6 text-danger mt-1">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mt-4">
        <button wire:click="register" class="btn btn-primary btn-md">Submit</button>
    </div>

    <div class="text-right mt-2">
        <p class="text-left small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                class="link-danger">Login here</a></p>
    </div>
</div>
</div>
