@extends('pages.layout')



@section('content')
    <hr>

    <body class="hm-gradient ">
        <main>
            <!--MDB Cards-->
            <div class="container">
                <div class="text-center darken-grey-text mb-4">
                    <h1 style='margin-top:45px'>All Questions</h1>
                    <a href="{{ route('posts.create') }}" class="btn "
                        style="margin-top:40px;background:#FFB452;color:white">Ask your question</a>
                </div>
                <!-- Grid row -->
                <div class="row ">


                    @foreach ($posts as $post)
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-4 mt-4 ">
                            <!--Card-->
                            <div class="card elegant-color mt-5 " style='height:450px'>

                                <!--Card image-->
                                <div class="view overlay hm-white-slight ">
                                    <img src="data:image/png;base64,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"
                                        class="img-fluid ml-4" alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask"></div>
                                    </a>
                                </div>

                                <!--Card content-->
                                <div class="card-body text-center">
                                    <!--Title-->
                                    <h4 class="card-title white-text py-3">{{ $post->title }}</h4>
                                    <!--Text-->
                                    <p style=' overflow: hidden;
                                    white-space: nowrap;
                                    text-overflow: ellipsis;' class="card-text white-text">{{ $post->body }}</p>
                                    <!-- <a href="#" class="btn btn-info my-3">Read more</a> -->
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn "
                                        style='background:#FFB452;color:white'>View Post</a>
                                </div>
                            </div>
                            <!--/.Card-->
                        </div>
                    @endforeach
                    <!-- Grid column -->
                </div>
                <!--MDB Cards-->

                <!-- MDB core JavaScript -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

        </main>

    </body>
@endsection
