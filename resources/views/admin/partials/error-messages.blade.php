
@if( $errors->any())
    @foreach( $errors->all() as $error)
        <li class="list-group-item list-group-item-danger">
            {{ $error }}
        </li>
    @endforeach
@endif
