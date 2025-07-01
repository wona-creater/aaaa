<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Course Information -->
            <div class="col-span-full lg:col-span-7 card">
                <div class="p-1.5">
                    <h6 class="card-title">Bank Details</h6>
                    <form action="{{ route('bank-accounts.store') }}" method="POST">
                        @csrf
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> UBA </label>
                                    <input id="courseTitle" class="form-input" name="bank_name"
                                        placeholder="Enter bank name" value="{{ old('bank_name') }}" required>
                                </div>
                                @error('bank_name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="coursePrice" class="form-label"> Account Number </label>
                                    <input type="number" id="coursePrice" class="form-input" name="account_number"
                                        placeholder="Enter account number" value="{{ old('account_number') }}" required>
                                </div>
                                @error('account_number')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseInstructor" class="form-label"> Account Name </label>
                                    <input type="text" id="courseInstructor" class="form-input" name="account_name"
                                        placeholder="Enter account name" value="{{ old('account_name') }}" required>
                                </div>
                                @error('account_name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                <br>
                                <div class="flex-start !justify-end">
                                    <button type="submit"
                                        class="btn b-solid btn-primary-solid  dk-theme-card-square">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-span-full lg:col-span-7 card">
                <div class="p-1.5">
                    <h6 class="card-title">Crypto Details</h6>
                    <form action="{{ route('crypto-wallets.store') }}" method="POST">
                        @csrf
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> Cryptocurrency </label>
                                    <input type="text" id="courseTitle" class="form-input" name="cryptocurrency"
                                        placeholder="Enter Crypto Name" value="{{ old('cryptocurrency') }}" required>
                                </div>
                                @error('cryptocurrency')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="coursePrice" class="form-label"> Wallet Address </label>
                                    <input type="text" id="coursePrice" class="form-input" name="wallet_address"
                                        placeholder="Enter wallet address" value="{{ old('wallet_address') }}"
                                        required>
                                </div>
                                @error('wallet_address')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror


                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseInstructor" class="form-label"> Network </label>
                                    <input type="text" id="courseInstructor" class="form-input" name="network"
                                        placeholder="Select network" value="{{ old('network') }}" required>
                                </div>
                                @error('network')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                <br>
                                <div class="flex-start !justify-end">
                                    <button type="submit"
                                        class="btn b-solid btn-primary-solid  dk-theme-card-square">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
    <!-- End Main Content -->
</x-app-layout>
