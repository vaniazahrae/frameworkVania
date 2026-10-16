<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">


    <div class="container py-5">
        <div class="card shadow mx-auto" style="max-width: 650px;">
            <div class="card-body p-4">
                <h2 class="mb-4">Question</h2>


                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('question.store') }}" method="POST">
                    @csrf


                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama"
                               class="form-control"
                               value="{{ old('nama') }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                               class="form-control"
                               value="{{ old('email') }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">
                            Pertanyaan
                        </label>
                        <textarea name="pertanyaan" id="pertanyaan"
                                  class="form-control" rows="4"
                                  required>{{ old('pertanyaan') }}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Kirim Pertanyaan
                    </button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>