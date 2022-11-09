<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Creazione nuovo impiegato </h1>
                <form action="{{ route('storeEmployer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Cognome </label>
                        <input type="text" class="form-control" name="surname" required>
                    </div>
                    <label class="form-label fw-bolder"> Ruolo </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role"
                        required>

                        <option value="CEO"> CEO </option>
                        <option value="PROJECT MANAGER"> PROJECT MANAGER</option>
                        <option value="DEVELOPER"> DEVELOPER </option>
                    </select>


                    <label class="form-label fw-bolder"> Nome del team  </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="team_id"
                        required>
                        @foreach ($teams as $team)
                            <option value="{{$team->id}}"> {{$team->nameTeam}} </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-dark mt-2"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
