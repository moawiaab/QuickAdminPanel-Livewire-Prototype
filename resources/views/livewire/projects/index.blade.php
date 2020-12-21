<div>
    <div class="row mb-3">
        <div class="col">
            Per page:
            <select wire:model="entriesPerPage">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>

            @if (count($selectedEntries) > 0)
                <button wire:click="deleteSelected"
                        class="btn btn-sm btn-danger ml-3"
                        onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()">Delete Selected</button>
            @endif
        </div>
        <div class="col text-right">
            Search:
            <input wire:model.debounce.500ms="searchQuery" />
        </div>
    </div>
    <div wire:loading.delay class="col-12 alert alert-info">
        Loading...
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>ID
                @include('partials.tablesort', ['field' => 'id'])
            </th>
            <th>Name
                @include('partials.tablesort', ['field' => 'name'])
            </th>
            <th>Type
                @include('partials.tablesort', ['field' => 'type'])
            </th>
            <th>Category
                @include('partials.tablesort', ['field' => 'category'])
            </th>
            <th>Is active
                @include('partials.tablesort', ['field' => 'is_active'])
            </th>
            <th>Price
                @include('partials.tablesort', ['field' => 'price'])
            </th>
            <th>Author</th>
            <th>Participants</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($projects as $project)
            <tr>
                <td>
                    <input type="checkbox" value="{{ $project->id }}" wire:model="selectedEntries" />
                </td>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->type }}</td>
                <td>{{ $project->category }}</td>
                <td>
                    <span style="display:none">{{ $project->is_active ?? '' }}</span>
                    <input type="checkbox" disabled="disabled" {{ $project->is_active ? 'checked' : '' }}>
                </td>
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
                <td colspan="10">No entries found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
