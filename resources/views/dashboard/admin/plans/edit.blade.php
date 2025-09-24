<x-layouts.app>
    <x-layouts.app.breadcrum title="Edit Investment Plan" :breadcrums="['Admin', 'Plans', 'Edit']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">Edit Investment Plan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.plans.update', $plan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Plan Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $plan->title }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle/Description</label>
                            <textarea class="form-control" id="subtitle" name="subtitle" rows="3" required>{{ $plan->subtitle }}</textarea>
                            @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="daily_percentage" class="form-label">Daily ROI Percentage</label>
                            <input type="number" step="0.01" class="form-control" id="daily_percentage" name="daily_percentage" value="{{ $plan->daily_percentage }}" required>
                            @error('daily_percentage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="min_investment" class="form-label">Minimum Investment (USD)</label>
                            <input type="number" class="form-control" id="min_investment" name="min_investment" value="{{ $plan->min_investment }}" required>
                            @error('min_investment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="max_investment" class="form-label">Maximum Investment (USD)</label>
                            <input type="number" class="form-control" id="max_investment" name="max_investment" value="{{ $plan->max_investment }}" required>
                            @error('max_investment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Benefits (one per line)</label>
                            <textarea class="form-control" name="benefits[]" rows="5" required>{{ implode("\n", $plan->benefits) }}</textarea>
                            @error('benefits')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Plan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>