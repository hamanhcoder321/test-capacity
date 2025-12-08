<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<h2>Nhập thông tin</h2>


<form method="POST" action="{{ route('form.submit') }}">
    @csrf

    <label>Họ và tên:</label><br>
    <input type="text" name="name" value="{{ old('name', session('name')) }}"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="{{ old('email', session('email')) }}"><br><br>

    <label>Tuổi:</label><br>
    <input type="text" name="age" value="{{ old('age', session('age')) }}"><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
