<div>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Phone</th>
                <th class="border px-4 py-2 text-center">Registered</th>
                <th class="border px-4 py-2 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
            <tr>
                <!-- <td class="border px-4 py-2">Rasel Ahmed</td>
                <td class="border px-4 py-2">raselahmed7@gmail.com</td>
                <td class="border px-4 py-2">01712345678</td>
                <td class="border px-4 py-2">31 December 2022</td>
                <td class="border px-4 py-2">Row 1, Column 3</td> -->
                <td class="border px-4 py-2">{{$lead->name}}</td>
                <td class="border px-4 py-2">{{$lead->email}}</td>
                <td class="border px-4 py-2">{{$lead->phone}}</td>
                <td class="border px-4 py-2 text-center">{{date('j - F - Y', strtotime($lead->created_at))}}</td>
                <td class="border px-4 py-2 text-center">
                    <div class="flex items-center justify-center">
                        <a class="px-2" href="{{route('lead.edit', $lead->id)}}">@include('components/icons/editicon')</a>
                        <a class="px-2" href="{{route('lead.show', $lead->id)}}">@include('components/icons/eyeshow')</a>
                        <form onsubmit="return confirm('Are you sure to delete');" wire:submit.prevent="leadDelete({{$lead->id}})" class="px-2">
                            <button type="submit">
                                @include('components/icons/trashicon')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>