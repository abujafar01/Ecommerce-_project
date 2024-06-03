@for($i=0; $i<10;$i++)
    <p> output will be {{ $i }} </p>
@endfor

@if($newdata == 1)
    {{ "first condition matched".$newdata }}
@elseif($data == 2)
    {{ "second condition matched".$data }}
@else
    {{ "third condition matched".$data  }}
@endif

@foreach($arr as  $new_arr)
    {{ $new_arr }}
@endforeach

@isset($edit)
    {{ "data can be edited" }}
@endisset
{{ $username }}
{!! $username !!}

@switch($role)
    @case("Admin")

        {{ "admin logged in" }}

        @break

        @case("Supplier")

        {{ "Supplier logged in" }}

        @break

    @default
        {{ "Guest logged in" }}
@endswitch


