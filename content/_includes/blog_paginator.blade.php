<div class="pagination">
    @if($previousPage)
        <a class="pagination-item older" href="@url($previousPage)">مطالب جدیدتر</a>
    @endif

    @if($nextPage)
        <a class="pagination-item newer" href="@url($nextPage)">مطالب قدیمی‌تر</a>
    @endif
</div>