<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="book_id" class="form-label">{{ __('Book Id') }}</label>
            <input type="text" name="book_id" class="form-control @error('book_id') is-invalid @enderror" value="{{ old('book_id', $copy?->book_id) }}" id="book_id" placeholder="Book Id">
            {!! $errors->first('book_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="number" class="form-label">{{ __('Number') }}</label>
            <input type="text" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number', $copy?->number) }}" id="number" placeholder="Number">
            {!! $errors->first('number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shelving_id" class="form-label">{{ __('Shelving Id') }}</label>
            <input type="text" name="shelving_id" class="form-control @error('shelving_id') is-invalid @enderror" value="{{ old('shelving_id', $copy?->shelving_id) }}" id="shelving_id" placeholder="Shelving Id">
            {!! $errors->first('shelving_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>