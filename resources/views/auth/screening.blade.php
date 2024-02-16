@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Subject Screening Form</div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="age" class="col-md-4 col-form-label text-md-end text-start">Age</label>
                        <div class="col-md-6">
                          <input type="age" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}">
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Response Options</label>
                        <div class="col-md-6">
                        
                            <select class="form-control @error('problem_response') is-invalid @enderror" id="problem_response" name="problem_response" value="{{ old('problem_response') }}">
                            <option>Select Option</option>
                            <option value="Monthely">Monthly</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Daily">Daily</option>
                            </select>

                            @if ($errors->has('problem_response'))
                                <span class="text-danger">{{ $errors->first('problem_response') }}</span>
                            @endif
                        </div>
                    </div>

                      <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Daily Frequency</label>
                        <div class="col-md-6">
                        
                            <select class="form-control @error('daily_frequency') is-invalid @enderror" id="daily_frequency" name="daily_frequency" value="{{ old('daily_frequency') }}">
                            <option>Select Option</option>
                            <option value="1-2">1-2</option>
                            <option value="3-4">3-4</option>
                            <option value="5+">5+</option>
                            </select>

                            @if ($errors->has('daily_frequency'))
                                <span class="text-danger">{{ $errors->first('daily_frequency') }}</span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection