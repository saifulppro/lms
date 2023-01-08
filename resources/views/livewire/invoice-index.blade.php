<div>
<div>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="border px-4 py-2">Id</th>
                <th class="border px-4 py-2">User</th>
                <th class="border px-4 py-2">Due Date</th>
                <th class="border px-4 py-2">Amount</th>
                <th class="border px-4 py-2">Paid</th>
                <th class="border px-4 py-2">Due</th>
                <th class="border px-4 py-2 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
            <tr>
                <!-- <td class="border px-4 py-2">Rasel Ahmed</td>
                <td class="border px-4 py-2">raselahmed7@gmail.com</td>
                <td class="border px-4 py-2">01712345678</td>
                <td class="border px-4 py-2">31 December 2022</td>
                <td class="border px-4 py-2">Row 1, Column 3</td> -->
                <td class="border px-4 py-2">{{$invoice->id}}</td>
                <td class="border px-4 py-2">{{$invoice->user->email}}</td>
                <td class="border px-4 py-2 text-center">{{date('j - F - Y', strtotime($invoice->due_date))}}</td>
                <td class="border px-4 py-2">${{$invoice->amount()['total']}}</td>
                <td class="border px-4 py-2">${{$invoice->amount()['paid']}}</td>
                <td class="border px-4 py-2">${{$invoice->amount()['due']}}</td>
                <td class="border px-4 py-2 text-center">
                    <div class="flex items-center justify-center">
                        <a class="px-2" href="">@include('components/icons/editicon')</a>
                        <a class="px-2" href="{{route('invoice-show', $invoice->id)}}">@include('components/icons/eyeshow')</a>
                        <form onsubmit="return confirm('Are you sure to delete');" wire:submit.prevent="invoiceDelete({{$invoice->id}})" class="px-2">
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
    <div class="mt-4">
    </div>
</div>
</div>
