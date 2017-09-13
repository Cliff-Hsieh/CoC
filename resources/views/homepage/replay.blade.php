@extends('homepage.index')

@section('replay')
<div id='replay_list' class="container">
    <div class="page-header row">
        <div class="col-md-9"><h2 class="text-center text-primary">Replay</h2></div>
        <div class="col-md-3 offset-md-2">
            <button id='add_replay_btn' class="btn btn-primary">Add replay</button>
        </div>
    </div>
    <div class="row">
    @for ($i = 0; $i < count($videos); $i++)
        <div class="col-md-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="640" height="360" src="{{ $videos[$i]->website }}" frameborder="0" allowfullscreen></iframe>
            </div>
            <span class="text-center">{{ $videos[$i]->name }}</span>
        </div>
        @if ($i % 4 == 3)
            </div><div class='row'>
        @endif        
    @endfor
    </div>
</div>
<div id='add_new_replay' class="container">
    <div class="row page-header mt-5">
        <div class="col-md-9"><h2 class="text-center text-primary">Add Replay</h2></div>
        <div class="col-md-3 offset-md-9">
            <button id='back_replay_btn' class="btn btn-primary">Back to replay list</button>
        </div>
    </div>
    <div id="msg" class="control-group row"></div>
    <div class='form_maini mt-3'>
        <form action=''>
            <div class='form-group row'>
                <label for='file' class="col-md-2 form-control-file">File input: </label>
                <div class="col-md-10 form-control">
                    <input id='file' type='file' style='btn-file'>
                </div>
            </div>
            <div class='form-group row'>
                <label for='type' class="col-md-2">Base type: </label>
                <div class="col-md-10 form-control">
                    <select id='type'>
                        <option value='base' seleted>Base</option>
                        <option value='night_base'>Night Base</option>
                    </select>
                </div>
            </div>
            <div class='form-group row'>
                <label for='tag' class="col-md-2">Tag: </label>
                <div class="col-md-10 form-control">
                    <input id='tag' type='text'>
                </div>
            </div>
            <div class='form-group row'>
                <label for='description' class="col-md-2">Description: </label>
                <div class="col-md-10 form-control">
                    <textarea id="description" class="form-control"></textarea>
                </div>
            </div>
            <div class='form-group row'>
                <div class="offset-md-2">
                    <button type="button" class='btn btn-outline-primary'>Submit</button>
                    <button type="button" class='btn btn-outline-danger'>Cancel</button>
                </div>
            </div>
        </form>
    <div>
</div>
<script>
$(function(){
  $('#add_new_replay').hide();
});
$('#add_replay_btn').on('click', function(){
  $('#replay_list').hide();  
  $('#add_new_replay').show();
});
$('#back_replay_btn').on('click', function(){
  $('#replay_list').show();
  $('#add_new_replay').hide();
});
</script>
@endsection
