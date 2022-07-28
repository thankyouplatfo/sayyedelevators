@extends('admin.layouts.app')
@section('title', 'لوحة التحكم -تعيين الصلاحيات إلى الأدوار')
@section('page-name', 'لوحة التحكم -تعيين الصلاحيات إلى الأدوار')
@section('content')
    <form action="{{ route('role.permission_roles') }}" method="post">
        @csrf
        <p class="w3-col w3-right w3-right-align red">
            <label for="role_id" class="w3-large">أختر دورا</label>
            <select class="w3-input roles" name="role_id" id="role_id">
                <option value="" disabled selected>اختر دورا</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </p>
        @foreach ($permissions as $permission)
            <p class="w3-col w3-right w3-right-align l4">
                <input type="checkbox" name="permission[]" class="w3-check w3-xxxlarge" id="{{ $permission->name }}"
                    value="{{ $permission->id }}" {{ $permission->roles()->find(1) ? 'checked' : '' }}>
                <label for="{{ $permission->name }}">{{ $permission->desc }}</label>
            </p>
        @endforeach
        <p class="w3-col">
            <input type="submit" class="w3-button w3-blue w3-left w3-section">
        </p>
    </form>
@endsection
@section('script')
    <script>
        $('#role_id').on('change', function(event){
    var role_id = $(this).val();
      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "{{ route('permission_byRole') }}",
          type: 'post',
          data: {
            'id': role_id
          },
          success: function(data)
          {
            $('input[type=checkbox]').each(function () {
                var ThisVal =parseInt(this.value) ; 
                if(data.includes(ThisVal))
                  this.checked = true;
                else
                  this.checked = false;
            }); 
          }               
      })
  });
    </script>
@endsection
