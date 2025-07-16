




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.layout.header')
@include('admin.layout.aside')


<div class="container">
        <div class="row justify-content-center ">
          <!-- left column -->
          <div class="col-8 ">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data for Testimonials</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Heading">
                  </div>
                  <div class="form-group">
                  <label>Content</label>
                        <textarea class="form-control" rows="3" name="content" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                  <label>Designation</label>
                        <textarea class="form-control" rows="3" name="designation" placeholder="Enter ..."></textarea>
                  </div>
                  
                   <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <input type="file" class="form-control-file" id="exampleInputFile" name="image">
        </div> 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>

@foreach($testimonials as $testimonial)
<div class="container">
        <div class="row justify-content-center ">
          <!-- left column -->
          <div class="col-8 ">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: green;">
                <h3 class="card-title">Our Testimonials</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                
                <div class=" card-body">
                  <div class="row">
                   <div class="col-10"> 
                <h2>{{ $testimonial->name }}</h2>
                <p class="text-break">{{ $testimonial->content }}</p>
                <p class="text-break">{{ $testimonial->designation }}</p></div>
                    <div class="col-2">
                
                    @if($testimonial->img)
                <img src="{{ asset('assets/images/' . $testimonial->img) }}" alt="Thumbnail" style="max-width: 50px; max-height: 50px;">
                      @endif
                  </div>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div class="row">
                  <div class="col-2">
                <form action="{{ route('admin.layout.testimonial.destroy', $testimonial->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
                </div>
            </form>
            <div class="col-2">
            <button class="btn btn-primary update-btn" data-toggle="modal" data-target="#updateModal{{$testimonial->id}}">Update</button>
            </div>
                </div>
                </div>
              
            </div>
          </div>
        </div>
</div>
@endforeach

<!-- for edit form -->

       
<!-- Popup Form for Update -->
@foreach($testimonials as $testimonia)
<div id="updateModal{{$testimonia->id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Post</h3>
                </div>
                <form id="updateForm{{$testimonia->id}}" action="{{ route('admin.layout.testimonial.update', $testimonia->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">  
                            <label for="heading{{$testimonia->id}}">Name:</label>
                            <input type="text" class="form-control" id="heading{{$testimonia->id}}" name="name" value="{{ $testimonia->name }}">
                        </div>
                        <div class="form-group">
                            <label for="content{{$testimonia->id}}">Content:</label>
                            <textarea class="form-control" id="content{{$testimonia->id}}" name="content">{{ $testimonia->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content{{$testimonia->id}}">Designation:</label>
                            <textarea class="form-control" id="content{{$testimonia->id}}" name="designation">{{ $testimonia->designation }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image{{$testimonia->id}}">Image:</label>
                            <input type="file" class="form-control-file" id="image{{$testimonia->id}}" name="image">
                            @if($testimonia->img)
                                <img src="{{ asset('assets/images/' . $testimonia->img) }}" alt="Thumbnail" style="max-width: 50px; max-height: 50px;">
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach










 

</div>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js')}}/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>

<script>
    // Get the modal
    var modals = document.querySelectorAll(".modal");

    // Get the button that opens the modal
    var btns = document.querySelectorAll(".update-btn");

    // Get the <span> element that closes the modal
    var spans = document.querySelectorAll(".close");

    // When the user clicks the button, open the modal
    btns.forEach(function(btn, index) {
        btn.onclick = function() {
            modals[index].style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the modal
    spans.forEach(function(span, index) {
        span.onclick = function() {
            modals[index].style.display = "none";
        }
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        modals.forEach(function(modal) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    }
</script>

@yield('scripts')
</body>
</html>
