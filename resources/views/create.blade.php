@include('inc.header')
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{url('/insert')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Laravel crud application Create User</legend>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="title" value="">
                            <?php  echo $errors->first('title',"<li class='errors'>:message</li>");?>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <?php

                        echo $errors->first('description',"<li class='errors'>:message</li>");
                        ?>
                    </div>



                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>

@include('inc/footer')