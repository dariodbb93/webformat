<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Creazione di un nuovo task </h1>
                <form action="{{ route('storeTask') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome del task </label>
                        <input type="text" class="form-control" name="nameTask" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Descrizione del Task </label>
                        <input type="text" class="form-control" name="details" required>
                    </div>
                    <label class="form-label fw-bolder"> Stato del task </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status"
                        required>

                        <option value="IN CORSO"> IN CORSO </option>
                        <option value="COMPLETATO"> COMPLETATO </option>
                    </select>

                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Data di scadenza del task </label>
                        <input type="date" class="form-control" name="deadline" required>
                    </div>

                    <label class="form-label fw-bolder"> Sviluppatore a cui assegnare il task </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="employer_id"
                        required>
                        @foreach ($employers as $employer)
                            @if ($employer->role !== 'CEO' && $employer->role !== 'PROJECT MANAGER')
                                <option value="{{ $employer->id }}"> {{ $employer->surname }} {{ $employer->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-dark mt-2"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
