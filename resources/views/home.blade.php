@include('inc.header')
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <div class="row"><div class="col-md-12">
                    <legend>Laravel CRUD Application Atricle view</legend>
                </div> </div>

            @if(session('successMsg'))
                <div class="alert alert-dismissable alert-success">

                    {{session('successMsg')}}

                </div>
            @endif
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($articles)>0)
                        @foreach($articles->all() as $article)

               <tr class="table-light">
                    <th>{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>
                        <a href="{{url('/read')}}/{{$article->id}}" class="badge badge-primary">Read </a>
                        <a href="{{url('/update')}}/{{$article->id}}" class="badge badge-success">Update </a>
                        <a href="{{url('/delete')}}/{{$article->id}}" class="badge badge-danger">Delete </a>
                    </td>
                </tr>
                        @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('inc/footer')