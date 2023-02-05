<div class="container blue p-2  ">
    <form action="{{ route('article.search') }}" method="GET" class="d-flex" role="search">
               <input name="searched" class="form-control me-2" type="search" placeholder="Search"
                   aria-label="Search">
               <button class="btn btn-outline-custom1 border-1 border-white" type="submit">Ricerca</button>
     </form>
</div>     