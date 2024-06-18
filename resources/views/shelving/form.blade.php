<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codshel" class="form-label">{{ __('Codshel') }}</label>
            <input type="text" name="codshel" class="form-control @error('codshel') is-invalid @enderror" value="{{ old('codshel', $shelving?->codshel) }}" id="codshel" placeholder="Codshel">
            {!! $errors->first('codshel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="topic_id" class="form-label">{{ __('Topic Id') }}</label>
            <input type="text" name="topic_id" class="form-control @error('topic_id') is-invalid @enderror" value="{{ old('topic_id', $shelving?->topic_id) }}" id="topic_id" placeholder="Topic Id">
            {!! $errors->first('topic_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>