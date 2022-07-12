<li class="treeview-colorful-items">
    <a class="treeview-colorful-items-header">
      <i class="fas fa-plus-circle"></i>
      <span><i class="ic-w mx-1"></i>{{ $child_header->name }}</span></a>
    @if ($child_header->sub_header)
    <ul class="nested">
        @foreach ($child_header->sub_header as $subHeader)
            @include('sub-header', ['child_header' => $subHeader])
        @endforeach
    </ul>
    @endif
</li>