<form method="POST" action="{{ route('save.patient.details') }}">
    @csrf
    <div class="form-group row">
        <label for="blood_group" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

        <div class="col-md-6">
            <input id="blood_group" type="text" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" value="{{ old('blood_group') }}" required autocomplete="blood_group">

            @error('blood_group')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="medications" class="col-md-4 col-form-label text-md-right">{{ __('Ongoing Medications') }}</label>

        <div class="col-md-6">
            <input id="medications" type="text" class="form-control @error('medications') is-invalid @enderror" name="medications" value="{{ old('medications') }}" required autocomplete="medications">

            @error('medications')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <!-- Add any additional form elements here -->

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save Details') }}
            </button>
        </div>
    </div>
</form>
