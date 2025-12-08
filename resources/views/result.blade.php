<!DOCTYPE html>
<html>
<head>
    <title>Kết quả</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="result-container">
    <h2>Thông tin đã nhập</h2>

    <p><strong>Họ và tên:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Tuổi:</strong> {{ $data['age'] }}</p>

    <a href="{{ route('form.reset') }}">
        <button>Back</button>
    </a>
</div>
</body>
</html>
