@extends('layouts.admin')
@section('content')
@can('arrow_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('arrow.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.arrow.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.list') }} {{ trans('cruds.arrow.title_singular') }} 
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-arrow">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.arrow.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.arrow.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.arrow.fields.addrees') }}
                        </th>
                        <th>
                            {{ trans('cruds.arrow.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.arrow.fields.end_date') }}
                        </th>
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($arrows as $key => $arrow)
                        <tr data-entry-id="{{ $arrow->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $arrow->id ?? '' }}
                            </td>
                            <td>
                                {{ $arrow->name ?? '' }}
                            </td>
                            <td>
                                {{ $arrow->addrees ?? '' }}
                            </td>
                           
                            <td>
                                {{ $arrow->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $arrow->end_date ?? '' }}
                            </td>
                            <td>
                                @can('arrow_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('arrow.show', $arrow->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('arrow_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('arrow.edit', $arrow->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('arrow_delete')
                                    <form action="{{ route('arrow.destroy', $arrow->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{-- <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}"> --}}
                                        <button name="submit">{{ trans('global.delete') }}</button>
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('arrow_delete')
  let deleteButtonTrans = ' <i class="fas fa-trash"></i> '
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('arrow.massDestroy') }}",
    className: 'btn btn-xs text-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-arrow:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection