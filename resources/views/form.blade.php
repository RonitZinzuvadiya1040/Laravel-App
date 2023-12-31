<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Registration Page</title>

<body>
    <form action="{{route('register')}}" method="post">
        @csrf
        <!-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> -->
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" name="name" value="{{old('name')}}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span><br>
            </div>

            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>