<div class="mb-3">
    <label for="title" class="form-label">{{ __('admin.title') }}</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $conference['title'] ?? '') }}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">{{ __('admin.description') }}</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $conference['description'] ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">{{ __('admin.date') }}</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $conference['date'] ?? '') }}">
    @error('date')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="time" class="form-label">{{ __('admin.time') }}</label>
    <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time', $conference['time'] ?? '') }}">
    @error('time')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">{{ __('admin.address') }}</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $conference['address'] ?? '') }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="lecturers" class="form-label">{{ __('admin.lecturers') }}</label>
    <input type="text" class="form-control @error('lecturers') is-invalid @enderror" id="lecturers" name="lecturers" value="{{ old('lecturers', $conference['lecturers'] ?? '') }}">
    @error('lecturers')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>