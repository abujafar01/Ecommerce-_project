<select>
    @while($new_loop['start'] < $new_loop['end'])
        <option>{{ $new_loop['start'] }}</option>
        @php $new_loop['start']++; @endphp
    @endwhile
</select>
