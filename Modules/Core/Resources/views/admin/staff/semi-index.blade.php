<tbody>
@foreach($staff as $staffmember)
  <tr>
    <td align="center">
      @if ($staffmember->canBeDisabled())
        {!! Form::checkbox('chkStaff[]', $staffmember->id) !!}
      @endif
    </td>
    <td><img src="{{ Gravatar::get($staffmember->email , 'tiny') }}" class="staff-image" alt="Staff Image"/></td>
    <td>{!! link_to_route('admin.staff.show', $staffmember->username, [$staffmember->id], []) !!}</td>
    <td>{!! link_to_route('admin.staff.show', $staffmember->full_name, [$staffmember->id], []) !!}</td>
    <td>{{ $staffmember->roles->count() }}</td>
    <td>{{ $staffmember->email }}</td>
    <td>{{ $staffmember->auth_type }}</td>
    <td>
      <a href="{!! route('admin.staff.edit', $staffmember->id) !!}" title="{{ trans('core::general.button.edit') }}"><i
          class="fa fa-pencil-square-o"></i></a>

      @if ($staffmember->canBeDisabled())
        @if ( $staffmember->enabled )
          <a href="{!! route('admin.staff.disable', $staffmember->id) !!}"
             title="{{ trans('core::general.button.disable') }}"><i class="fa fa-check-circle-o enabled"></i></a>
        @else
          <a href="{!! route('admin.staff.enable', $staffmember->id) !!}"
             title="{{ trans('core::general.button.enable') }}"><i class="fa fa-ban disabled"></i></a>
        @endif
      @else
        <i class="fa fa-ban text-muted" title="{{ trans('core::admin/staff/general.error.cant-be-disabled') }}"></i>
      @endif

      @if ( $staffmember->isDeletable() )
        <a href="{!! route('admin.staff.confirm-delete', $staffmember->id) !!}" data-toggle="modal"
           data-target="#modal_dialog" title="{{ trans('core::general.button.delete') }}"><i
            class="fa fa-trash-o deletable"></i></a>
      @else
        <i class="fa fa-trash-o text-muted" title="{{ trans('core::admin/staff/general.error.cant-be-deleted') }}"></i>
      @endif
    </td>
  </tr>
@endforeach
</tbody>