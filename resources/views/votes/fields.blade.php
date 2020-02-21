<!-- Tps Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tps_id', 'TPS:') !!}
    {!! Form::select('tps_id', ($dropdown_tps) ?? [], null, ['class' => 'form-control', 'placeholder' => 'Pilih TPS'], ($dropdown_tps_opt) ?? []) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', ($dropdown_user) ?? [], null, ['class' => 'form-control', 'placeholder' => 'Pilih User']) !!}
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

<!-- Voteable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voteable_type', 'Tipe Vote:') !!}
    {!! Form::select('voteable_type', RELATION_MAP, null, ['class' => 'form-control', 'placeholder' => 'Pilih Tipe Vote']) !!}
</div>

<!-- Voteable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voteable_id', 'Voteable Id:') !!}
    {!! Form::text('voteable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Tingkat/Tipe:') !!}
    {!! Form::select('type', TINGKAT_DAPIL, null, ['class' => 'form-control', 'placeholder' => 'Pilih Tingkat/Tipe']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('votes.index') !!}" class="btn btn-default">Cancel</a>
</div>
