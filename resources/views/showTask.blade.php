<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1> Task assegnati agli sviluppatori (VENGONO VISUALIZZATI SOLO I TASK IN CORSO) </h1>
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome del task </th>
                            <th scope="col">Descrizione del task </th>
                            <th scope="col">Stato del task </th>
                            <th scope="col"> Sviluppatore a cui è assegnato questo task</th>
                            <th scope="col"> Rimuovi il task </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        @if($task->status == 'IN CORSO')
                                <td> {{ $task->nameTask }} </td>
                                <td> {{ $task->details }} </td>
                                <td> {{ $task->status }} </td>
                                <td> {{ $task->employers->name }} {{ $task->employers->surname }} </td>
                                <td>
                                    <form action="{{ route('destroy', compact('task')) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger mt-1" type="submit"> Rimuovi il task
                                    </form>
                                </td>
                            </tr>
                            @endif  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
