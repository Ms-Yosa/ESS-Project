
            @if(!empty($errors))
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show pb-3" role="alert">
                    <ul  style="list-style-type: none">
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        @endif