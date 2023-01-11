<form wire:submit.prevent="formSubmit">
    <div class="mb-6">
        @include('components.form',[

        'name' => 'name',

        'label' => 'Name',
        'type' => 'text',
        'placeholder' => 'Enter Name',
        'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form',[

        'name' => 'description',

        'label' => 'Description',
        'type' => 'textarea',
        'placeholder' => 'Enter Course Description',
        'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form',[

        'name' => 'Price',

        'label' => 'Price',
        'type' => 'number',
        'placeholder' => 'Add Price',
        'required' => 'required',
        ])
    </div>
    <div class="flex">
        <div class="w-full mr-4">
            <div class="mb-6">
                <label for="days" class="pb-4 block">Days</label>
                <div class="flex flex-wrap -mx-4">
                    @foreach($days as $day)
                    <div class="min-w-max flex items-center px-4">
                        <input wire:model.lazy="selectedDays" class="mr-2" type="checkbox" name="{{$day}}" id="{{$day}}" value="{{$day}}">
                        <label for="{{$day}}">{{ucfirst($day)}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="min-w-max">
            @include('components.form',[

            'name' => 'time',

            'label' => 'Time',
            'type' => 'time',
            'placeholder' => 'Add Time',
            'required' => 'required',
            ])
        </div>
    </div>
    
    <div class="min-w-max">
            @include('components.form',[

            'name' => 'end_Date',

            'label' => 'End Date',
            'type' => 'date',
            'placeholder' => 'End Date',
            'required' => 'required',
            ])
        </div>

    <button type="submit" class="button">Course Submit</button>

</form>