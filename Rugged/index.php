<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style>
    body {
        margin: 0;
        background: black;
    }
</style>
<div class='fixed text-white text-sm ml-2 mt-1 select-none' >
    <span>Score: </span><span id="scoreEl">0</span></div>

<div class="fixed inset-0 flex items-center justify-center" id="modalEl">
    <div class="bg-white max-w-md w-full p-6 text-center">
        <h1 class="text-4xl font-bold leading-none" id="bigscorel">0</h1>
        <p class="text-sm text-gray-700 mb-4">Points</p>
        <div>
            <button class="bg-blue-500 text-white w-full py-3 rounded-full text-sm" id="startGameBtn">Start Game</button>

        </div>
    </div>
</div>

<canvas></canvas>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js" integrity="sha512-2fk3Q4NXPYAqIha0glLZ2nluueK43aNoxvijPf53+DgL7UW9mkN+uXc1aEmnZdkkZVvtJZltpRt+JqTWc3TS3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./script.js"></script>
