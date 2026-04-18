@props(['label', 'name'])
<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1">
        <input type="password" name="{{ $name }}" id="{{ $name }}"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
    </div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
