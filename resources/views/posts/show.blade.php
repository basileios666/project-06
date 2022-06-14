@extends('pages.layout')



@section('content')
    <style>
        .comments-area {
            background: #F0F0F0;
            padding: 50px 30px;
            margin-top: 50px;
        }

        @media (max-width: 414px) {
            .comments-area {
                padding: 50px 8px;
            }
        }

        .comments-area h4 {
            text-align: center;
            margin-bottom: 50px;
            color: #002347;
            font-size: 18px;
        }

        .comments-area h5 {
            font-size: 16px;
            margin-bottom: 0px;
        }

        .comments-area a {
            color: #002347;
        }

        .comments-area .comment-list {
            padding-bottom: 30px;
        }

        .comments-area .comment-list:last-child {
            padding-bottom: 0px;
        }

        .comments-area .comment-list.left-padding {
            padding-left: 25px;
        }

        @media (max-width: 413px) {
            .comments-area .comment-list .single-comment h5 {
                font-size: 12px;
            }

            .comments-area .comment-list .single-comment .date {
                font-size: 11px;
            }

            .comments-area .comment-list .single-comment .comment {
                font-size: 10px;
            }
        }

        .comments-area .thumb {
            margin-right: 20px;
        }

        .comments-area .date {
            font-size: 13px;
            color: #777777;
            margin-bottom: 13px;
        }

        .comments-area .comment {
            color: #777777;
            margin-bottom: 0px;
        }

        .comments-area .btn-reply {
            background-color: #fff;
            color: #002347;
            border: 1px solid #eee;
            padding: 2px 18px;
            font-size: 12px;
            display: block;
            font-weight: 600;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .comments-area .btn-reply:hover {
            background: #fdc632;
            color: #002347;
        }

        .comment-form {
            background: #f1f9ff;
            text-align: center;
            padding: 47px 30px 43px;
            margin-top: 50px;
            margin-bottom: 40px;
        }

        .comment-form h4 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 18px;
            line-height: 22px;
            color: #002347;
        }

        .comment-form .name {
            padding-left: 0px;
        }

        @media (max-width: 767px) {
            .comment-form .name {
                padding-right: 0px;
                margin-bottom: 1rem;
            }
        }

        .comment-form .email {
            padding-right: 0px;
        }

        @media (max-width: 991px) {
            .comment-form .email {
                padding-left: 0px;
            }
        }

        .comment-form .form-control {
            padding: 8px 20px;
            background: #fff;
            border: none;
            border-radius: 0px;
            width: 100%;
            font-size: 14px;
            color: #777777;
            border: 1px solid transparent;
        }

        .comment-form .form-control:focus {
            box-shadow: none;
            border: 1px solid #eee;
        }

        .comment-form textarea.form-control {
            height: 140px;
            resize: none;
        }

        .comment-form ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            font-size: 15px;
            color: #777;
        }
    </style>


<hr>
    <div class="row">
        <div class="container my-1 py-1">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png"
                                    alt="avatar" width="60" height="60" />
                                <div>

                                    <h6 class="fw-bold  mb-1" style='color:#FFB452'>user</h6>
                                    <p class="text-muted middle mb-0">
                                        {{ $post->title }}
                                    </p>
                                </div>
                            </div>
                            <p class="mt-5 mb-5 pb-3 text-center ">
                                {{ $post->body }}
                            </p>
                            <div class="col-lg-12">

                                <div class="comments-area">
                                    <h4> Comments</h4>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">



                                        </div>
                                    </div>
                                    <div id="divider-transparent"></div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">

                                                <div class="desc">

                                                    @include('posts.commentsDisplay', [
                                                        'comments' => $post->comments,
                                                        'post_id' => $post->id,
                                                    ])
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form" style='background:#F0F0F0'>
                                    <h4>Leave a Comment/Reply</h4>

                                    <div class="row">

                                    </div><br />
                                    <div class="row">
                                        <div class="offset-lg-2 col-lg-8 col-md-8 col-sm-10">
                                            <form method="post" action="{{ route('comments.store') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <textarea class="form-control" name="body"></textarea>
                                                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn" style='background:#FFB452'
                                                        value="Add Comment" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endsection
