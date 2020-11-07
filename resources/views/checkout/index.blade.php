@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h3>THANH TOÁN</h3>
            <hr>

            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                @csrf
                <div class="row ">

                    <div class="col-12">
                        <h5>CHI TIẾT VẬN CHUYỂN</h5>
                    </div>

                    <div class="col-12">
                        <label for="name" class="">{{ __('Tên') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phonenumber" class="">{{ __('Số điện thoại') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') ?? $user->profile->phonenumber ??'' }}" required autocomplete="phonenumber" autofocus>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="country" class="">{{ __('Quốc gia') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') ?? $user->profile->country ??'' }}" required autocomplete="country" autofocus>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="city" class="">{{ __('Thành phố') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') ?? $user->profile->city ??'' }}" required autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="">{{ __('Địa chỉ') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->profile->address ??'' }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="zipcode" class="">{{ __('Zipcode') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') ?? $user->profile->zipcode ??'' }}" required autocomplete="zipcode" autofocus>
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                        <h5>BILLING ADDRESS</h5>
                    </div>


                    <div class="col-12">
                        <label for="creditcardnumber" class="">{{ __('Số thẻ tín dụng') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="creditcardnumber" type="text" class="form-control @error('creditcardnumber') is-invalid @enderror" name="creditcardnumber" value="{{ old('creditcardnumber') }}" required autocomplete="creditcardnumber" autofocus>
                                @error('creditcardnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="expiremonth" class="">{{ __('Tháng hết hạn') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="expiremonth" type="text" class="form-control @error('expiremonth') is-invalid @enderror" name="expiremonth" value="{{ old('expiremonth') }}" required autocomplete="expiremonth" autofocus>
                                @error('expiremonth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="expireyear" class="">{{ __('Năm hết hạn') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="expireyear" type="text" class="form-control @error('expireyear') is-invalid @enderror" name="expireyear" value="{{ old('expireyear') }}" required autocomplete="expireyear" autofocus>
                                @error('expireyear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="cvc" class="">{{ __('CVC') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="cvc" type="text" class="form-control @error('cvc') is-invalid @enderror" name="cvc" value="{{ old('cvc') }}" required autocomplete="cvc" autofocus>
                                @error('cvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>

                <button type="submit" class="button-primary w-100">MUA</button>

            </form>
        </div>
    </div>
</div>

@endsection
