<aside class="col-md-12 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Latest News</h4>
        @foreach ($newsTeams as $newsTeam)
            <p class="mb-0"><a href="/news/team/{{ $newsTeam->name }}">{{ $newsTeam->name }}</a></p>
        @endforeach
    </div>
</aside>