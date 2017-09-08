@extends('homepage.index')

@section('replay')
<div id='replay_list' class="container">
    <div class="page-header row">
        <div class="col-md-9"><h2 class="text-center text-primary">Replay</h2></div>
        <div class="col-md-3 offset-md-2">
            <button id='add_replay_btn' class="btn-primary">Add replay</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/s0S6ZzbimYM" frameborder="0" allowfullscreen></iframe>
            </div>
           <span class="text-center">表哥狗球流1</span>
        </div>
        <div class="col-md-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/KqRKMrMUIyY" frameborder="0" allowfullscreen></iframe>
            </div>
            <span class="text-center">表哥狗球流2</span>
        </div>
    </div>
</div>
<div id='add_new_replay' class="container">
    <div class="row page-header">
        <div class="col-md-9"><h2 class="text-center text-primary">Add Replay</h2></div>
        <div class="col-md-3 offset-md-9">
            <button id='back_replay_btn' class="btn-primary">Back to replay list</button>
        </div>
    </div>
    <div class='panel-default'>
        <form action=''>
            <div class='form-group'>
                <label for='file'>File input: </label>
                <input id='file' type='file' style='btn-file'>
            </div>
            <div class='form-group'>
                <label for='type'>Base type: </label>
                    <select id='type'>
                        <option value='base' seleted>Base</option>
                        <option value='night_base'>Night Base</option>
                    </select>
                </label>
            </div>
            <div class='form-group'>
                <label for='tag'>Tag: </label>
                <input id='tag' type='text'>
            <div>
            <div class='form-group'>
                <label for='description'>Description: </label>
                <textarea id='descrtiption'></textarea>
            </div>
            <div class='form-group'>
                <button class='btn-primary'>Submit</button>
                <button class='btn-danger'>Cancel</button>
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
