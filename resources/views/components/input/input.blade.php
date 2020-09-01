<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
        <label for="{{$label}}">{{$label}}</label>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8">
        <div class="form-group">                                
            <input name="{{$name}}" type="{{$type}}" id="{{$id != null ? $id : $name}}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) }}" autocomplete="{{$name}}" placeholder="Masukan {{ $label }}" autofocus>
            {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

            @error($name)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>