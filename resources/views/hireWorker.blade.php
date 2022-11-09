<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Assunzione di un nuovo sviluppatore </h1>
                <form action="{{ route('storeWorker') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label fw-bolder"> Sviluppatore da assumere (PM || DEV) </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="employer_id"
                        required>
                        @foreach ($employers as $employer)
                        @if ($employer->role !== 'CEO')
                        <option value="{{ $employer->id }}"> {{ $employer->surname }} {{ $employer->name }} </option>
                        @endif
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-dark mt-2"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
