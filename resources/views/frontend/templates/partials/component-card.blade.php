<div class="col my-2">
    <div class="d-flex flex-column align-items-center card h-100">
        <div class="mb-2 p-4">
            <img src="{{ $book->getCover() }}" class="card-img-top card-img-bottom" style='width:15rem; height:20rem'>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="card-content">
                <a href="{{ route('book.show', $book) }}" class="text-decoration-none text-dark fs-5 text-center">
                    <p class="card-title">{{ Str::limit($book->title, 25) }}</p>
                </a>
                <p>{{ Str::limit($book->description, 100) }}</p>
            </div>
            <div class="w-full">
                <form action="{{ route('book.borrow') }}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input type="hidden" name="title" value="{{ $book->title }}">
                    <button type="submit" class="btn btn-primary text-light text-capitalize w-100">Tambahkan</button>
                </form>
            </div>
        </div>
        </form>
    </div>
</div>
