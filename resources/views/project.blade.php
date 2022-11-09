<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Creazione di un nuovo progetto </h1>
                <form action="{{ route('storeProject') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome del progetto</label>
                        <input type="text" class="form-control" name="nameProject" required>
                    </div>
                    <label class="form-label fw-bolder"> PROJECT MANAGER a cui assegnare il progetto </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="employer_id"
                        required>
                        @foreach ($employers as $employer)
                            @if ($employer->role !== 'CEO' && $employer->role !== 'DEVELOPER')
                                <option value="{{ $employer->id }}"> {{ $employer->surname }} </option>
                            @endif
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-dark mt-2"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
