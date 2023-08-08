<td class="delete_user_column">
    <form {{ $attributes->merge([
    'action' => '#',
    'method' => 'POST',
]) }}>
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button class="delete_button" type="submit" title="Удалить">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </form>
</td>
