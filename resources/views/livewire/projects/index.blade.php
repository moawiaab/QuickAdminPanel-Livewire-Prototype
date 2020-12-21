<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Category</th>
            <th>Is active</th>
            <th>Price</th>
            <th>Author</th>
            <th>Participants</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->type }}</td>
                <td>{{ $project->category }}</td>
                <td>{{ $project->is_active }}</td>
                <td>{{ $project->price }}</td>
                <td>{{ $project->author->name ?? '' }}</td>
                <td>
                    @foreach ($project->participants as $participant)
                        <span class="badge badge-info">{{ $participant->name }}</span>
                    @endforeach
                </td>
                <td>
                    @can('project_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.livewire-projects.edit', $project->id) }}">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan

                    @can('project_delete')
                        <form action="{{ route('admin.livewire-projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                        </form>
                    @endcan
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No project found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
