<div class="col s12 m6">
    <div class="card horizontal hoverable">

        <div class="card-image">
            <img src="{{ $book->getCover() }}" class="materialboxed" style="max-height: 250px;">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <a href="{{ route('book.show', $book) }}">
                    <p class="card-title"><b>{{ Str::limit($book->title,10)}}</b></p>
                </a>
                <p>{{ Str::limit($book->description,100) }}</p>
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow') }}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input type="hidden" name="title" value="{{ $book->title }}">
                    <button type="submit" class="btn-floating waves-effect waves-light teal lighten-2"><i class="material-icons">add</i></button>
                </form>
            </div>
        </div>
        </form>
    </div>
</div>