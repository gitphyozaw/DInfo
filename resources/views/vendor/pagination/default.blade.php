 
<style type="text/css">
     .pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
</style>
<?php $text = array("","D", "a", "w","e", "i", "I","n", "f", "o","r", "m", "a","t","i","o","n"); ?>
@if ($paginator->hasPages())

        <ul class="pagination  " >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true"><b>«</b></span>
                    <span class="">Previous</span>

                 </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span >{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))

                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a class="page-link" href="#">{{$page}}</a></li>
   
                        @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">
                                    {{$text[$page]}}
                                </a></li>
                        @endif
                    @endforeach

                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true"><B>»</B></span>
                        <span class="">Next</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link"><B>«</B></span></li>
            @endif
        </ul>
 
@endif


