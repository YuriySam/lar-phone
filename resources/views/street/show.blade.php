@extends('layouts.main')
@section('content')
    <div>
        <table class="table table-hover" id="serch-table">
            <thead>
                <tr>

                    <th scope="col">town_pre</th>
                    <th scope="col">town</th>
                    <th scope="col">street_pre</th>
                    <th scope="col">street</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">deleted_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> {{ $street->town_pre }}</th>
                    <th> {{ $street->town }}</th>
                    <th> {{ $street->street_pre }}</th>
                    <th> {{ $street->street }}</th>
                    <td> {{ $street->created_at }} </td>
                    <td> {{ $street->updated_at }}</td>
                    <td> {{ $street->deleted_at }}</td>

                </tr>
            </tbody>
        </table>
        <!--
      <div>
            <a href="{{ route('street.edit', $street->id) }}">Edit</a>

    </div>
    <div>
            <a href="{{ route('street.create_edit', $street->id) }}">Create_Edit</a>

    </div>
    <div>
        <form action="{{ route('street.destroy', $street->id) }}" method ='post'>
          @csrf
          @method('delete')
          <input type= 'submit' value="Delete">
        </form>
            
    </div>
    -->
        <div>
            <a href="{{ route('street.index') }}">Back</a>

        </div>
    @endsection
