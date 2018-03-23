@extends('template.template')

@section('body')
    @include('shared.errors')
    <table class="ui table">
        <thead>
             <tr>
                 <th colspan="4">
                     <a href="{{route('nurse.create')}}" class="ui blue button">Add New Patient</a>
                 </th>
            </tr>
        </thead>+
        <thead>
            <tr>
                <th>Name:</th>
                <th>Gender:</th>
                <th>Age:</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @if(count($patients)>0)
            @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->gender}}</td>
                    <td>{{$patient->age}}</td>
                    <td>
                        <form action="{{route('nurse.destroy',['id'=>$patient->id])}}" method="post">
                          {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="ui transparent button"><i class="trash red icon"></i>Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">
                    No records found.
                </td>
            </tr>>

        @endif
        </tbody>
    </table>

@endsection