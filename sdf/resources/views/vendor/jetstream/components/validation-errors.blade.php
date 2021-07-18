@if ($errors->any())
    <div class="mt-4">
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong><div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div></strong>
            <ul class="mt-4 ">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    </div>
@endif


