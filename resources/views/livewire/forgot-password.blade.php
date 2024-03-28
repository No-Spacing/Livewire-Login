<div class="card container mt-2 w-25"> 
    <div class="card-body">
        <div class="d-flex justify-content-center mb-3">
            <img class="w-75" src="img/laravel-livewire.jpeg"/>
        </div>
        <h5 class="card-title mb-3">
            Forgot Password
        </h5>
        <form wire:submit="submit">
            <div class="mb-3">
                <p>
                    Tell us your email to proceed.
                </p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                @error('email') <span class="text-danger ">{{ $message }}</span> @enderror
                <input type="email" wire:model="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="my-1 text-center">
                    <hr></hr>
                    <span>or</span>
                    <hr></hr>
                </div>
                <a href="/login" class="btn btn-outline-primary mb-3">Login</a>
            </div> 
        </form>
    </div>
</div>