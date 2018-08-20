@if(count($errors)>0)

    <div class="col-sm-12 alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>


        <strong>Whoops something went wrong</strong>
        @foreach($errors->all() as $error)
            <br><br>
            <ul><li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
    </div>





@endif