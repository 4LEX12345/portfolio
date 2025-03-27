@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-slate-300
focus:border-primarybutton
dark:focus:ring-primarybutton
rounded-md shadow-sm']) }}>