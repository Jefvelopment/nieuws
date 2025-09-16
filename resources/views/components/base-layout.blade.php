
<div>
    <header class="bg-blue-900 text-white shadow-md">
<script src="https://cdn.tailwindcss.com"></script>        
<div class="container mx-auto flex items-center justify-between py-4 px-6">
            <h1 class="text-2xl font-bold tracking-wide">NieuwsSite</h1>
            <nav class="space-x-6">
                <a href="#" class="hover:text-blue-300 transition">Home</a>
                <a href="#" class="hover:text-blue-300 transition">Categorieën</a>
                <a href="#" class="hover:text-blue-300 transition">Over</a>
                <a href="#" class="hover:text-blue-300 transition">Contact</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto py-8 px-4 min-h-[60vh]">
        {{ $slot }}
    </main>
    <footer class="bg-blue-900 text-white mt-12">
        <div class="container mx-auto py-4 px-6 text-center text-sm">
            &copy; {{ date('Y') }} NieuwsSite. Alle rechten voorbehouden.
        </div>
    </footer>
</div>
