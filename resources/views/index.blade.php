<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  @extends('layouts.app')


  @section('main')
  <link rel="stylesheet" href="css/index.css">
  <h1 class="contanct-title">お問い合わせ</h1>
  <form action="{{ route('form.confirm') }}" method="post" class="h-adr" name="contactform">


    @csrf
    <div>
      <label for="last-name" class="form-title-required">お名前</label>
      <input type="text" autocomplete="family-name" name="last-name" id="last-name" value="{{ old('last-name') }}" />
      <input type="text" name="first-name" autocomplete="given-name" id="first-name" value="{{ old('first-name') }}" />
    </div>

    <div>
      <span class="subform-title"></span>
      <span class="example"> 例）山田</span>

      <span class="real-check" id="lastname-check">※姓を入力してください</span>
      @error('last-name')
      <span class="error-message" id="Error-lastname">{{ $message }}</span>
      @enderror
      @if ($errors->has('last-name'))
      <span class="Error" id="Error"></span>
      @else
      <span class="jsError" id="jsError"></span>
      @endif
      <span class="example"> 例）太郎</span>
      <span class="real-check" id="firstname-check">※名を入力してください</span>
      @error('first-name')
      <span class="error-message" id="Error-firstname">{{ $message }}</span>
      @enderror
    </div>

    <div class="gender">
      <span class="form-title-required">性別</span>
      <input type="radio" name="gender" value="1" id="male" checked /><label for="male">男性</label>
      <input type="radio" name="gender" value="2" id="female" /><label for="female">女性</label>
    </div>

    <div>
      <label for="email" class="form-title-required">メールアドレス</label>
      <input type="text" name="email" id="email" value="{{ old('email') }}" />
    </div>


    <div>
      <span class="subform-title"></span>
      <span class="example"> 例）test@example.com</span>
      <span class="real-check" id="email-check">※メールアドレスを入力してください</span>
      <span class="real-check" id="email-format">※メールアドレスは例の形式で入力してください</span>
      @error('email')
      <span class="error-message" id="Error-email">{{ $message }}</span>
      @enderror
    </div>


    <div>
      <label for="postcode" class="form-title-required">郵便番号</label>
      <span> 〒 </span>
      <input type="hidden" class="p-country-name" value="Japan">
      <input type="text" class="p-postal-code" name="postcode" id="postcode" value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" z />
    </div>



    <div>
      <span class="subform-postcode"></span>
      <span class="example"> 例）123-4567</span>
      <span class="real-check" id="postcode-check">※郵便番号を入力してください</span>
      <span class="real-check" id="postcode-format">※郵便番号は例の形式で入力してください</span>
      @error('postcode')
      <span class="error-message" id="Error-postcode">{{ $message }}</span>
      @enderror
    </div>


    <div>
      <label for="address" class="form-title-required">住所</label>
      <input type="text" class="" name="address" id="address" value="{{ old('address') }}" />
    </div>




    <div>
      <span class="subform-title"></span>
      <span class="example"> 例）東京都渋谷区千駄ヶ谷1-2-3</span>
      <span class="real-check" id="address-check">※住所を入力してください</span>
      @error('address')
      <span class="error-message" id="Error-address">{{ $message }}</span>
      @enderror
    </div>



    <div>
      <label for="building_name" class="form-title">建物名</label>
      <input type="text" name="building_name" id="building_name" value="{{ old('building_name') }}" />
    </div>













    <br>

    <input type="submit" value="送信する">
  </form>

</body>

</html>