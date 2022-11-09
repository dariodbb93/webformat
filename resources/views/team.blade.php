<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Creazione di un nuovo team </h1>
                <form action="{{ route('storeTeam') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome del Team </label>
                        <input type="text" class="form-control" name="nameTeam" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
