<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manual Deposit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Deposit Instructions</h3>
                        <p class="mb-4">{{ $settings->deposit_instructions ?? 'Please send your deposit to the address below and upload the proof of transaction.' }}</p>
                        
                        <div class="bg-gray-100 p-4 rounded mb-6">
                            <p class="font-mono">{{ $settings->deposit_address }}</p>
                        </div>
                    </div>

                    <form action="{{ route('user.deposits.manual.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                            <input type="number" name="amount" id="amount" step="0.01" min="1" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="transaction_proof" class="block text-sm font-medium text-gray-700">
                                Transaction Proof
                            </label>
                            <input type="file" name="transaction_proof" id="transaction_proof"
                                class="mt-1 block w-full"
                                accept="image/*"
                                required>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary">
                                Submit Deposit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>