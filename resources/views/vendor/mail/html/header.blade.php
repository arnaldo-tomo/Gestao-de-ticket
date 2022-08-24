<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="http://arnaldotomo.epizy.com/brand.png" class="logo" alt="Laravel Logo">

            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
