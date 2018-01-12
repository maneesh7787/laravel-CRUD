@include('inc.header')
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{url('/edit')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Laravel crud application Update Article</legend>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="title"
                                   value="{{$articles->title}}">
                            <?php  echo $errors->first('title',"<li class='errors'>:message</li>");?>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{$articles->description}}</textarea>
                        <?php

                        echo $errors->first('description',"<li class='errors'>:message</li>");
                        ?>
                    </div>
                 <input type="hidden" name="id" value="{{$articles->id}}">


                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>

@include('inc/footer')