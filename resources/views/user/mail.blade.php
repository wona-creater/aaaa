<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">

        @if (session('success'))
            <div class="alert alert-success p-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger p-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('user.send') }}">
            @csrf
            <div class="grid grid-cols-12 gap-x-4">
                <!-- Start Course Information -->
                <div class="col-span-full lg:col-span-7 card">
                    <div class="p-1.5">
                        <h6 class="card-title">Send Mail</h6>
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label">Recipient Email</label>
                                    <input type="text" id="courseTitle" placeholder="User@gmail.com"
                                        class="form-input" name="recipient_email" value="{{ old('recipient_email') }}"
                                        required />

                                    @error('recipient_email')
                                        <p class="text-red-500 text-sm px-4">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="coursePrice" class="form-label">Quantity</label>
                                    <input id="coursePrice" class="form-input" name="quantity"
                                        placeholder="Enter quantity" type="number" value="{{ old('quantity') }}"
                                        required />

                                    @error('quantity')
                                        <p class="text-red-500 text-sm px-4">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-span-full xl:col-auto leading-none">
                                    <label class="form-label">Email Template</label>
                                    <select class="singleSelect" name="template" >
                                        <option selected disabled>Select Email Template</option>

                                        <option value="giveaway" {{ old('template') == 'giveaway' ? 'selected' : '' }}>
                                            Giveaway</option>
                                        <option value="airdrop" {{ old('template') == 'airdrop' ? 'selected' : '' }}>
                                            Airdrop</option>
                                        <option value="refund" {{ old('template') == 'refund' ? 'selected' : '' }}>
                                            Refund</option>
                                    </select>

                                    @error('template')
                                        <p class="text-red-500 text-sm px-4">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-span-full xl:col-auto leading-none">
                                    <label class="form-label">Crypto Type</label>

                                    <select name="crypto_type" class="singleSelect">
                                        @foreach (['BTC', 'USDT', 'ETH', 'BNB', 'XRP', 'ADA', 'SOL', 'DOGE', 'DOT', 'AVAX', 'SHIB', 'LINK'] as $crypto)
                                            <option value="{{ $crypto }}"
                                                {{ old('crypto_type') == $crypto ? 'selected' : '' }}>
                                                {{ $crypto }}</option>
                                        @endforeach
                                    </select>

                                    @error('crypto_type')
                                        <p class="text-red-500 text-sm px-4">{{ $message }}</p>
                                    @enderror
                                </div>





                                <div class="flex-start">
                                    <button type="submit"
                                        class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Information -->

            </div>
        </form>
    </div>
    <!-- End Main Content -->


</x-app-layout>
