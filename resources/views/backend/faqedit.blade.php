<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-10 py-20">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block p-4 border-left-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('/AdminFaq') }}">
                    <button class="btn btn-info">FAQs List</button>
                </a>
            </div>
            <div class="card-body">
                <form method="post" action="/admin/faq-edit/{{ $faqs->id }}">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="question">Question</label>
                        <input class="form-control" id="question" type="text" placeholder="Enter Question" name="question" value="{{ old('question', $faqs->question) }}"/>
                        @if ($errors->has('question'))
                            <span class="text-danger">
                                {{ $errors->first('question') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="answer">Answer</label>
                        <input class="form-control" id="answer" type="text" placeholder="Enter Answer" name="answer" value="{{ old('answer', $faqs->answer) }}"/>
                        @if ($errors->has('answer'))
                            <span class="text-danger">
                                {{ $errors->first('answer') }}
                            </span>
                        @endif
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input class="btn btn-info btn-block" type="submit" value="Submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
