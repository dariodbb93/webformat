<nav class="navbar navbar-expand-lg navBackground" id="navDark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showEmployer') }}"> Creazione del team
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('welcome') }}"> Creazione di un nuovo impiegato </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('project') }}"> Creazione di un nuovo progetto </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('task') }}"> Creazione di un nuovo task  </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('hireWorker') }}"> Assumi un developer  </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showTask') }}"> Mostra i task  </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
