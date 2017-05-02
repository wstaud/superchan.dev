@if ($paginator->lastPage() > 1)
    <ul class="pagination" role="navigation">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        </li>
    </ul>
@endif


<ul class="pagination" role="navigation" aria-label="Pagination">
    <li class="disabled">Previous <span class="show-for-sr">page</span></li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#0" aria-label="Page 2">2</a></li>
    <li><a href="#0" aria-label="Page 3">3</a></li>
    <li><a href="#0" aria-label="Page 4">4</a></li>
    <li class="ellipsis" aria-hidden="true"></li>
    <li><a href="#0" aria-label="Page 12">12</a></li>
    <li><a href="#0" aria-label="Page 13">13</a></li>
    <li><a href="#0" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>
