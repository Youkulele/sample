
@if (count($errors) > 0)
  <div class="alert alert-danger">
      <dl>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </dl>
  </div>
@endif
