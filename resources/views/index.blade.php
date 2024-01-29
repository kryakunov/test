<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5">

                    <form method="POST" action="{{ route('feedback') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Имя</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="" aria-label="" aria-describedby="basic-addon2">
                            @error('name')
                                <div class="invalid-feedback">
                                Заполните поле name
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Почта</label>
                            <input type="email" name="email"  value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                                <div class="invalid-feedback">
                                Заполните поле email
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Телефон</label>
                            <input type="text" name="phone"  value="{{old('phone')}}" class="mask-phone form-control @error('phone') is-invalid @enderror" placeholder="" aria-label="" aria-describedby="basic-addon2">
                            @error('email')
                                <div class="invalid-feedback">
                                Заполните поле phone
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlFile1">Прикрепите файл</label>
                            <input type="file" name="file"  class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>

                </div>
            </div>
        </div>

<script>
    $('.mask-phone').mask('+7 (999) 999-99-99');
</script>

</body>
</html>
   