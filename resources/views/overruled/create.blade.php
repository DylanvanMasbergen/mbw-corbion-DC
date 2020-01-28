@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Overrule a Scanpoint') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('overruled.store') }}">
                            @csrf

                             <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Shiftmanager or Assistant') }}</label>
                                <div class="col-md-6">
                                    
                                    
                                    <input class="form-control form-control-lg w-100" type="text" name="currentuser_id" placeholder="{{$currentUser->name}}" required="required" id="{{ $currentUser->id }}" value="{{$currentUser->id}}" readonly="readonly">

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Scandepartment') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="role_id" name="scandepartment_id">
                                        @foreach ($ScanDepartments as $ScanDepartment)
                                            <option value="" disabled selected hidden>Please Choose a Scandepartment...</option>
                                            <option  id="{{ $ScanDepartment->name }}" value="{{ $ScanDepartment->id }}">{{ $ScanDepartment->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose a ScanRound') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control form-control-lg w-100" type="text" name="scanround_id" placeholder="" required="required" id="{{ $currentUser->id }}" value="{{$scanround_id}}" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Give a Valid Reason for Overruling') }}</label>
                                    <div class="col-md-6">
                                        <input class="form-control form-control-lg w-100" type="text" name="reason" placeholder="Reason for Overruling" required="required" value="">
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection