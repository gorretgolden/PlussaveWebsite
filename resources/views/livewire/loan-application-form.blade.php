<div>
    <h2 class="text-2xl font-bold mb-4 text-center">Loan Application Form</h2>


<div class="max-w-4xl mx-auto flex items-center justify-center mt-8">

    <div class=" md:block md:w-1/3 lg:w-1/2">
        <img src="https://img.freepik.com/free-vector/manage-money-concept-illustration_114360-8079.jpg?t=st=1719949535~exp=1719953135~hmac=d2183baaf59ee521bd52c8ed271109d25b45888ac22a02d10de5a194583d16e6&w=1380" alt="Image" class="w-full h-auto">
    </div>
    <div class="w-full md:w-2/3 lg:w-1/2 px-4">
        <div class="bg-white shadow-md rounded px-8 py-6  mb-4">
            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-600 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('message') }}</span>
                </div>
            @endif


            <form wire:submit.prevent="submit">


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="loanAmount">
                        Loan Amount
                    </label>
                    <input   min="10000" type="number" wire:model="loanAmount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="loanAmount" type="text" placeholder="Loan Amount">
                    @error('loanAmount') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
                    @error('name') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email Address">
                    @error('email') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                        Phone
                    </label>
                    <input wire:model="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Phone Number">
                    @error('phone') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="loanType">
                        Loan Type
                    </label>
                    <select wire:model="loanType" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="loanType">
                        <option value="">Select Loan Type</option>
                        <option value="Business Loans">Business Loans</option>
                        <option value="Personal Loans">Personal Loans</option>
                        <option value="School Loans">School Loans</option>
                        <!-- Add more options as needed -->
                    </select>
                    @error('loanType') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="businessLocation">
                        Business Location
                    </label>
                    <input wire:model="businessLocation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="businessLocation" type="text" placeholder="Business Location">
                    @error('businessLocation') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="loanPurpose">
                        Loan Purpose
                    </label>
                    <input wire:model="loanPurpose" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="loanPurpose" type="text" placeholder="Loan Purpose">
                    @error('loanPurpose') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="residence">
                        Residence
                    </label>
                    <input wire:model="residence" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="residence" type="text" placeholder="Residence">
                    @error('residence') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="businessNature">
                        Business Nature
                    </label>
                    <select wire:model.lazy="businessNature" id="businessNature" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500">
                        <option value="">Select Business Nature</option>
                        @foreach ($businessCategories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                    @error('businessNature') <p class="text-red-500 text-xs ">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" wire:loading.attr="disabled" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full relative">
                        <span wire:loading wire:target="submit">
                            <svg class="animate-spin h-5 w-5 mr-3 absolute left-0 inset-y-0 m-auto pl-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V2.5a.5.5 0 011 0V4a8 8 0 01-8 8z"></path>
                            </svg>
                            Submitting...
                        </span>
                        <span wire:loading.remove>Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>

</div>

{{-- <script>
    $(document).ready(function() {
        $('#businessNature').select2({
            placeholder: "Select Business Nature",
            allowClear: true
        });
    });
</script> --}}
