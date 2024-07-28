<div class="col-lg-6">
    <h1 class="text-white mb-3">Book Your Course now</h1>
    <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On the Courses</p>
    <form wire:submit.prevent="send"  method=""   >
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" wire:model="name"  name="name" class="form-control bg-white border-0"
                    id="name" placeholder="Your Name" value="{{ old('name') }}">
                <label for="name">Your Name</label>
            </div>
        </div>
   
        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" wire:model="phone"  name="phone" class="form-control bg-white border-0"
                    id="datetime" placeholder="Date & Time" data-target="#date3"
                    data-toggle="datetimepicker" value="{{ old('phone') }}" />
                <label for="datetime">phone number</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">

                <input type="text" wire:model="qualification" class="form-control bg-white border-0" id="datetime"
                    placeholder="qualification" data-target="#date3" data-toggle="datetimepicker"
                    name="qualification"  value="{{ old('qualification') }}" />
                <label for="select1">qualification</label>

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" wire:model="age" class="form-control bg-white border-0" id="datetime"
                    placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker"
                    name="age" value="{{ old('age') }}" />
                <label for="datetime">Age</label>
                <span id="datetime-error" class="text-danger"></span>
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" wire:model="country" class="form-control bg-white border-0" id="datetime"
                    name="country" placeholder="Date & Time" data-target="#date3"
                    data-toggle="datetimepicker"  value="{{ old('country') }}"/>
                <label for="datetime">Country</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" wire:model="email" name="email" class="form-control bg-white border-0"
                    id="email" value="null" placeholder="Your Email" >
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
<div class="form-floating">
<select  wire:model="course"  name="course" class="form-select bg-white border-0" id="options" aria-label="Select Option">
<option value="" selected disabled>Choose an option</option>
<option value="">Choose</option>
<option value="ICDL">ICDL</option>
<option value="HR">HR</option>
<option value="English">English</option>
<option value="Leadership">Leadership</option>
<option value="Marketing">Marketing</option>
<option value="nursing">nursing</option>
<option value="full stack developer">full stack developer</option>
</select>
<label for="options">Select an option</label>
</div>

</div>


        <div class="col-12">
            <div class="form-floating">
                <input type="text" wire:model="message" class="form-control bg-white border-0" placeholder="Special Request" name="message" 
                    id="message"  value="null" style="height: 100px">
                <label for="message">For inquiries and to book the course</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary text-white w-100 py-3" type="submit">Book
                Now</button>
        </div>

    </div>
</form>
@if (session()->has('Success'))
    <div class="alert alert-success">
        {{ session('Success') }}
    </div>
@endif

</div>
</div>
