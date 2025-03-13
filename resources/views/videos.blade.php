<x-layout>
    <div>
        {{ Breadcrumbs::render('videos') }}
    </div>

    <h1>All Videos</h1>

    <form action="#" method="GET" class="flex">
        <label for="search" class="hidden">Search</label>
        <input type="text" name="search" placeholder="Search..." id="search">

        <input type="submit" name="submit" value="submit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>          
        </input>
    </form>
    
</x-layout>