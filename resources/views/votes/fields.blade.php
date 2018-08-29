<!-- Tps Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tps_id', 'Tps Id:') !!}
    {!! Form::text('tps_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vote Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vote_date', 'Vote Date:') !!}
    {!! Form::date('vote_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count', 'Count:') !!}
    {!! Form::text('count', null, ['class' => 'form-control']) !!}
</div>

<!-- Voteable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voteable_id', 'Voteable Id:') !!}
    {!! Form::text('voteable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Voteable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voteable_type', 'Voteable Type:') !!}
    {!! Form::text('voteable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('votes.index') !!}" class="btn btn-default">Cancel</a>
</div>
