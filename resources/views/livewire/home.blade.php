<div class="card container mt-2 w-25"> 
    <div class="card-body">
        <div class="d-flex justify-content-center mb-3">
            <img class="w-75" src="img/laravel-livewire.jpeg"/>
        </div>
        <h5 class="card-title mb-3">
            Home
        </h5>
        <div>
            <h4>User: {{ $user->name }}</h4>
            <div class="d-flex justify-content-center mt-3 mb-3">
                <a href="/logout" class="btn btn-outline-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
            

        </div>
    </div>
</div> 

