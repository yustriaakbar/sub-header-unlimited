<!DOCTYPE html>
<html>
<head>
<title>Treeview Header</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/compiled-4.20.0.min.css">
</head>
<body>
    <div class="treeview-colorful w-20 border border-secondary mx-4 my-4">
        <h6 class="pt-3 pl-3">Sidebar Header</h6>
        <hr>
        <ul class="treeview-colorful-list mb-3">
          @foreach ($headers as $header)
          <li class="treeview-colorful-items">
            <a class="treeview-colorful-items-header">
              <i class="fas fa-plus-circle"></i>
              {{-- <span><i class="far fa-envelope-open ic-w mx-1"></i>{{ $category->name }}</span> --}}
              <span><i class="ic-w mx-1"></i>{{ $header->name }}</span>
            </a>
            <ul class="nested">
              {{-- @foreach ($category->childrenCategories as $childCategory) --}}
              @foreach ($header->sub_header as $subHeader)
                @include('sub-header', ['child_header' => $subHeader])
              @endforeach
            </ul>
          </li>
          @endforeach
        </ul>
      </div>

      <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
    ></script>
    <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/bundles/4.20.0/compiled.min.js"></script>
      <script>
        // Treeview Initialization
        $(document).ready(function() {
        $('.treeview-colorful').mdbTreeview();
        });
      </script>
</body>
</html>