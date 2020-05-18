<style type="text/css">
     .pagination>li>a, .pagination>li>span {
        border-radius: 2em;
        margin-left: 8px;
        width: 35px;
    }
    .pagination>.active>a{
        color: #000 !important;
    }
    

@keyframes  random {
    15% { background-color: red; } 
    30% { background-color: #000000; } 
    45% { background-color: green; } 
    60% { background-color: blue; }
    75% { background-color: gold; }  
}

</style>
<?php $text = array("","D", "a", "w","e", "i", "I","n", "f", "o","r", "m", "a","t","i","o","n"); ?>
@if ($paginator->hasPages())

    <div class="col-sm-offset-4">
        <ul class="pagination" >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))

                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active">
                                <span style=" background-color: #fff;
                                             -webkit-animation: random 8s infinite;
                                                animation: random 8s infinite;">
                                            {{ $page }}</span></li>
                        @else
                                <li class="pag_link"><a href="{{ $url }}">
                                    {{$text[$page]}}
                                </a></li>
                        @endif
                    @endforeach

                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </div>  
@endif
<script type="text/javascript">
var randomColor = "#"+((1<<24)*Math.random()|0).toString(16); 

document.documentElement.style.setProperty('main-bg-color', randomColor);
</script>