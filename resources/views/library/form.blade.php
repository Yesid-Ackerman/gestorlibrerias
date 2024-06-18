<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $library?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="localization" class="form-label">{{ __('Localization') }}</label>
            <input type="text" name="localization" class="form-control @error('localization') is-invalid @enderror" value="{{ old('localization', $library?->localization) }}" id="localization" placeholder="Localization">
            {!! $errors->first('localization', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desc" class="form-label">{{ __('Desc') }}</label>
            <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" value="{{ old('desc', $library?->desc) }}" id="desc" placeholder="Desc">
            {!! $errors->first('desc', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>