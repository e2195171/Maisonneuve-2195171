@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Liste des étudiants</h1>
                    </div>
                </div>
                <ol class="list-group list-group-numbered">
                    @forelse($students as $student)
                        <li class="list-group-item"><a href="{{ route('student.show', $student->id) }}" class="text-dark">{{ ucfirst($student->name)}}</a></li>
                    @empty
                        <li class="list-group-item">Aucun étudiant(e)</li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

@endsection