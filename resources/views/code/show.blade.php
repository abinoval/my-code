<x-app-layout title="{{ $code->title }} | BagiSkrip" lang="{{ $code->lang->key }}">
    <div class="space-y-6">
        <div class="space-y-2">
            <h1 class="text-2xl font-bold text-gray-600">{{ $code->title }}</h1>
            <div class="flex items-center gap-4 sm:text-base text-sm">
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-time'></i>
                    <span>{{ $code->created_at->diffForHumans() }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-code-alt'></i>
                    <span>{{ $code->lang->name }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-purchase-tag'></i>
                    <span>{{ $code->visibility->name }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-show'></i>
                    <span>{{ $code->views }}</span>
                </div>
            </div>
        </div>
        <div class="sm:flex sm:justify-between grid gap-4">
            <button class="inline-block py-2 px-6 rounded-lg border border-indigo-600 text-indigo-600 font-medium hover:bg-indigo-100 focus:text-white focus:bg-indigo-600 transition-all duration-300 focus:outline-none sm:order-1 order-2" id="copyScript">
                Copy Code
            </button>
            <textarea class="sr-only" name="script" id="script">{{ $code->script }}</textarea>
            <div class="flex items-center gap-2 sm:order-2 order-1">
                <input class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300 sm:w-auto w-full" name="link" id="link" readonly value="{{ config('app.url') . '/' . $code->hash }}" type="text" />
                <button class="min-h-[2.5rem] min-w-[2.5rem] rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 ring ring-transparent focus:bg-indigo-700 focus:ring-indigo-200 transition-all duration-300 shadow-xl shadow-indigo-200 focus:shadow-transparent focus:outline-none grid place-items-center" id="copyLink">
                    <i class='bx bx-copy-alt'></i>
                </button>
            </div>
        </div>
        <pre class="rounded-xl overflow-hidden text-sm"><code class="!p-6 language-{{ $code->lang->key }}">{{ $code->script }}</code></pre>
    </div>
</x-app-layout>