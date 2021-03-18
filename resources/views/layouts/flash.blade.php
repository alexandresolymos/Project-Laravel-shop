@if ($message = Session::get('success'))
    <div class="test">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">X</button>
    </div>
@endif


@if ($message = Session::get('successdelete'))
    <div class="test">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">X</button>
    </div>
@endif


<style>
  .test{
      z-index: 1;
      background: #00d2ff;
      padding: 1em;
  }
  </style>
