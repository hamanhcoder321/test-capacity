<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <div class="form-container">
        <h2>Nhập thông tin</h2>
        <form method="POST" action="{{ route('form.submit') }}">
            @csrf

            <label>Họ và tên (*):</label><br>
            <input type="text"  name="name"  value="{{ old('name', session('name')) }}">
            @error('name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
            <br><br>

            <label>Email (*):</label><br>
            <input type="text" name="email"  value="{{ old('email', session('email')) }}">
            @error('email')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            <br><br>

            <label>Tuổi (*):</label><br>
            <input type="text" name="age"  value="{{ old('age', session('age')) }}">
            @error('age')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            <br><br>

            <button class="submit-1" type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
