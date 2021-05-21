@extends('layouts.app_dashboard')

@section('content')
<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Form_code</th>
        <th>Actions</th>
    </tr>
    @foreach ($forms as $form)
    <tr>
        <td>{{$form->id}}</td>
        <td>{{$form->form_code}}</td>
        <td>
            <a href="{{ route('show',$form->id)}}" style="border: none; background-color:transparent;">
                <i class="fas fa-eye text-success  fa-lg"></i>
            </a>
            <a href="{{ route('edit',$form->id)}}" style="border: none; background-color:transparent;">
                <i class="fas fa-edit  fa-lg"></i>
            </a>
            <form action="{{ route('destroy', $form->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $forms->links() !!}
@endsection
