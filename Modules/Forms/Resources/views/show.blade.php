@extends('layouts.app_dashboard')

@section('content')
<?php $contents = str_replace('<div class="close">×</div>', '', str_replace('ui-draggable element', '', str_replace('ui-droppable ui-sortable', '', $form->form_code))); ?>
<table class="table table-bordered table-responsive-lg">
    <tr>
        <td><?= html_entity_decode(str_replace('id="content"', '', $contents)); ?></td>
    </tr>
    <tr>
        <td>{{$contents}}</td>
    </tr>
    <tr>
        <td>
            <div class="row">
                <div class="col-md-1">
                    <a href="{{ route('edit',$form->id)}}" style="border: none; background-color:transparent;">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                </div>
                <div class="col-md-1">
                    <form action="{{ route('destroy', $form->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-10"></div>
            </div>
        </td>
    </tr>
</table>
@endsection
