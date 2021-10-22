
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="container mt-5">

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">

            <div class="card-header text-center font-weight-bold">
                <h2>Upload Image</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

                <form action="{{ route('upload.post.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 text-center mb-2 mt-2">
                            <input id="img" type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <label class="mb-1" for="title">le titre</label>
                                <input id="title" inlist="title" type="text" name="title" class="form-control">

                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <label class="mb-1" for="desc">la description</label>
                                <input id="desc" type="text" name="desc" class="form-control">
                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-app-layout>
