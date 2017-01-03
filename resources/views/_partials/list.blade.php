<h1 class="title is-3">All projects</h1>
@if (count($projects))
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->name }}
            </li>
        @endforeach
    </ul>

    <hr>
@else
    There are no projects yet
@endif
