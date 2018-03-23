@extends('template.template')

@section('body')
    @include('shared.errors')
    <div class="ui segment">
       Total No. of Patients: {{count($patients)}}
    </div>
    <table class="ui table">

        <thead>
            <tr>
                <th>Name:</th>
                <th>Gender:</th>
                <th>Age:</th>
                <th>Temperature:</th>
                <th>Weight:</th>
                <th>Blood Pressure:</th>
                <th>Prescription:</th>

            </tr>
        </thead>
        <tbody>
        @if(count($patients)>0)
            @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->gender}}</td>
                    <td>{{$patient->age}}</td>
                    <td>{{$patient->temperature}}</td>
                    <td>{{$patient->weight}}</td>
                    <td>{{$patient->blood_pressure}}</td>
                    <td>{{$patient->prescription}}</td>

                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7">
                    No records found.
                </td>
            </tr>>

        @endif
        </tbody>
    </table>

@endsection