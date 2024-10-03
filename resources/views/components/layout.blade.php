<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Vacancy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-open-sans pb-20">
    <div class="px-10 ">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <h3 class="font-semibold text-lg">jobvacancy.id</h3>
                </a>
            </div>
            <div class="hidden lg:block space-x-6 font-bold">
                <a href="/">Job</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('delete')

                        <button>Log out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold flex">
                    <a href="/login">Log in</a>

                    <a href="/register">Register</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-5xl mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
