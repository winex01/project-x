@extends('layouts.master')
@section('content')
	@include('layouts.search')

	 <div class="row">
        <div class="col-lg-3 col-md-3">
                
              <center>
                <img class="img-responsive img-thumbnail" src="{{ asset('images/projects/1.png') }}">
                <img class="img-responsive img-thumbnail" src="{{ asset('images/projects/2.png') }}">
              </center>

              <div align="center">
                <span class="label label-primary" data-toggle="tooltip" title=""><i class="fa fa-eye"></i> 003</span>
                <span class="label label-success" data-toggle="tooltip" title=""><i class="fa fa-bookmark-o"></i> 001</span>
                <span class="label label-danger" data-toggle="tooltip" title=""><i class="fa fa-cloud-download"></i> 002</span>
              </div>
        </div>
        
        <div class="col-lg-9 col-md-9">
         <h4><a href="http://ebook.test/book/new-book/view" class="text-info">Inventory System PHP <sub class="text-success">14 hours ago</sub></a></h4>

          <p>
            2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during th<a href="#modal-show-description" data-toggle="modal"> (...)</a>            
          </p>

          <p>
            <a href="http://ebook.test/book/new-book/view" class="btn btn-primary btn-xs">View More
            <i class="fa fa-chevron-right"></i>
            </a>

            <a href="http://ebook.test/book/bookmark/new-book/bookmark" class="btn btn-success btn-xs">Bookmark
            <i class="fa fa-bookmark-o"></i>
            </a>

            <a href="http://ebook.test/book/download/new-book/download" class="btn btn-danger btn-xs">Download
            <i class="fa fa-cloud-download"></i>
            </a>
          </p>

          <strong>#Tags:</strong>
          <a href="#">Arduino,</a>
          <a href="#">Web,</a>
          <a href="#">Management,</a>
          <a href="#">SQL,</a>
          <a href="#">Visual Studio,</a>
          <a href="#">Windows Form,</a>
          <a href="#">Management,</a>
          <a href="#">SQL,</a>
          <a href="#">Camtasia Studio,</a>
          <a href="#">Arduino Form</a>
        </div>
    </div>
    <hr />




    <div class="row">
        <div class="col-lg-3 col-md-3">
                              <center>
                  <img class="img-responsive img-thumbnail" src="{{ asset('images/projects/3.png') }}">
                  <img class="img-responsive img-thumbnail" src="{{ asset('images/projects/4.png') }}">
                </center>
                            <div align="center">
                <span class="label label-primary" data-toggle="tooltip" title=""><i class="fa fa-eye"></i> 003</span>
                <span class="label label-success" data-toggle="tooltip" title=""><i class="fa fa-bookmark-o"></i> 001</span>
                <span class="label label-danger" data-toggle="tooltip" title=""><i class="fa fa-cloud-download"></i> 002</span>
              </div>
        </div>
        
        <div class="col-lg-9 col-md-9">
         <h4><a href="http://ebook.test/book/new-book/view" class="text-info">Laundry App <sub class="text-success">14 hours ago</sub></a></h4>

          <p>
            2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during th<a href="#modal-show-description" data-toggle="modal"> (...)</a>            
          </p>

          <p>
            <a href="http://ebook.test/book/new-book/view" class="btn btn-primary btn-xs">View More
            <i class="fa fa-chevron-right"></i>
            </a>

            <a href="http://ebook.test/book/bookmark/new-book/bookmark" class="btn btn-success btn-xs">Bookmark
            <i class="fa fa-bookmark-o"></i>
            </a>

            <a href="http://ebook.test/book/download/new-book/download" class="btn btn-danger btn-xs">Download
            <i class="fa fa-cloud-download"></i>
            </a>
          </p>

          <strong>#Tags:</strong>
          <a href="#">Arduino,</a>
          <a href="#">Web,</a>
          <a href="#">Management,</a>
          <a href="#">SQL,</a>
          <a href="#">Visual Studio,</a>
          <a href="#">Windows Form,</a>
          <a href="#">Management,</a>
          <a href="#">SQL,</a>
          <a href="#">Camtasia Studio,</a>
          <a href="#">Arduino Form</a>
        </div>
    </div>
    <hr />


    <center>
      <ul class="pagination pagination-lg">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </center>

@endsection