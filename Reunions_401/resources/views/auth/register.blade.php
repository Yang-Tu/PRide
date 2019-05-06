@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class_year" class="col-md-4 col-form-label text-md-right">{{ __('Class Year') }}</label>

                            <div class="col-md-6">
                                <input id="class_year" type="numeric" pattern = "[0-9]{4}" class="form-control{{ $errors->has('class_year') ? ' is-invalid' : '' }}" name="class_year" value="{{ old('class_year') }}" required>

                                @if ($errors->has('class_year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('class_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone XXXXXXXXXX') }}</label>

                            <div class="col-md-6">
                            
                                <input id="phone" type="tel"  pattern = "[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Origin Zipcode') }}</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="numeric" pattern = "[0-9]{5}"class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" required autofocus>

                                @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="airport" class="col-md-4 col-form-label text-md-right">{{ __('Are you leaving from an airport?') }}</label>

                            <div class="col-md-6">
                                <select id="airport" type="text" class="form-control{{ $errors->has('airport') ? ' is-invalid' : '' }}" name="airport" value="{{ old('airport') }}" required autofocus>
                                    <option value="NO" selected>No</option>
                                    <option value="PHL">PHL</option>
                                    <option value="JFK">JFK</option>
                                    <option value="EWR">EWR</option>
                                    <option value="LGA">LGA</option>
                                </select>

                                @if ($errors->has('airport'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('airport') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="d_date" class="col-md-4 col-form-label text-md-right">{{ __('Dep Date') }}</label>

                            <div class="col-md-6">
                                <select id="d_date" type="text" class="form-control{{ $errors->has('d_date') ? ' is-invalid' : '' }}" name="d_date" value="{{ old('d_date') }}" required autofocus>
                                    <option value="Wed">Wednesday</option>
                                    <option value="Thurs" selected>Thursday</option>
                                    <option value="Fri">Friday</option>
                                </select>

                                @if ($errors->has('d_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('d_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="d_time" class="col-md-4 col-form-label text-md-right">{{ __('Dep Time') }}</label>


                            <div class="col-md-6">
                                <input id="d_time" type="time" class="form-control{{ $errors->has('d_time') ? ' is-invalid' : '' }}" name="d_time" value="{{ old('d_time') }}" required>

                                @if ($errors->has('d_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('d_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="seats" class="col-md-4 col-form-label text-md-right">{{ __('Seats Available (if you are willing to drive)') }}</label>


                            <div class="col-md-6">
                                <select id="seats" type="text" class="form-control{{ $errors->has('seats') ? ' is-invalid' : '' }}" name="seats" value="{{ old('seats') }}" required autofocus>
                                    <option value='0' selected>0</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                </select>

                                @if ($errors->has('seats'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('seats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pref_service" class="col-md-4 col-form-label text-md-right">{{ __('Preferred Form of Transport') }}</label>

                            <div class="col-md-6">
                                <select id="pref_service" type="text" class="form-control{{ $errors->has('pref_service') ? ' is-invalid' : '' }}" name="pref_service" value="{{ old('pref_service') }}" required autofocus>
                                    <option value="rideshare" selected>Carpool</option>
                                    <option value="uber">Uber/Lyft</option>
                                </select>

                                @if ($errors->has('pref_service'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pref_service') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eating_club" class="col-md-4 col-form-label text-md-right">{{ __('Eating Club Affiliation') }}</label>

                            <div class="col-md-6">
                                <select id="eating_club" type="text" class="form-control{{ $errors->has('eating_club') ? ' is-invalid' : '' }}" name="eating_club" value="{{ old('eating_club') }}" required autofocus>
                                    <option value="None" selected>None</option>
                                    <option value="Cannon">Cannon Dial Elm</option>
                                    <option value="Cap">Cap and Gown</option>
                                    <option value="Charter">Charter</option>
                                    <option value="Cloister">Cloister</option>
                                    <option value="Colonial">Colonial</option>
                                    <option value="Cottage">Cottage</option>
                                    <option value="Ivy">Ivy</option>
                                    <option value="Terrace">Terrace</option>
                                    <option value="Tiger Inn">Tiger Inn</option>
                                    <option value="Tower">Tower</option>
                                    <option value="Quadrangle">Quadrangle</option>
                                    <option value="Arch">Arch</option>
                                    <option value="Arbor Inn">Arbor Inn</option>
                                    <option value="Campus">Campus</option>
                                    <option value="Court">Court</option>
                                    <option value="Dial">Dial</option>
                                    <option value="Elm">Elm</option>
                                    <option value="Gateway">Gateway</option>
                                    <option value="Key and Seal">Key and Seal</option>
                                    <option value="Prospect">Prospect</option>
                                </select>

                                @if ($errors->has('eating_club'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('eating_club') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
