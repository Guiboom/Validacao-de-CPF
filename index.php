<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de CPF Cabalístico</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-radial from-slate-950 via-purple-950 to-black min-h-screen flex items-center justify-center text-amber-100 font-serif antialiased selection:bg-amber-500 selection:text-black">

    <main class="relative w-full max-w-md p-8 mx-4 rounded-2xl bg-zinc-900/80 border border-amber-500/30 backdrop-blur-md shadow-[0_0_50px_rgba(168,85,247,0.2)] overflow-hidden before:absolute before:top-0 before:left-0 before:w-full before:h-1 before:bg-gradient-to-r before:from-transparent before:via-amber-500 before:to-transparent">
        
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <header class="text-center mb-8">
            <h2 class="text-3xl font-bold tracking-widest uppercase bg-gradient-to-b from-amber-200 via-amber-400 to-amber-600 bg-clip-text text-transparent drop-shadow-[0_2px_10px_rgba(245,158,11,0.3)]">
                CADASTRO DE CPF
            </h2>
            <div class="flex justify-center items-center gap-2 mt-4">
                <span class="h-[1px] w-12 bg-gradient-to-r from-transparent to-amber-500/50"></span>
                <span class="text-amber-500 text-xs">✦ ✡ ✦</span>
                <span class="h-[1px] w-12 bg-gradient-to-l from-transparent to-amber-500/50"></span>
            </div>
        </header>

        <form action="validador.php" method="POST" class="space-y-6">
            
            <div class="flex flex-col gap-2">
                <label for="cpf" class="text-xs font-semibold tracking-widest text-amber-400/80 uppercase pl-1 font-sans">
                    Insira o Registro Numérico (CPF)
                </label>
                <div class="relative group">
                    <input 
                        type="text" 
                        name="cpf" 
                        id="cpf" 
                        placeholder="000.000.000-00" 
                        required
                        class="w-full px-4 py-3 bg-black/60 border border-zinc-700 rounded-lg text-amber-100 placeholder-zinc-600 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-all duration-300 tracking-widest font-mono text-center text-lg shadow-inner"
                    >
                    <div class="absolute inset-0 rounded-lg bg-amber-500/5 opacity-0 group-focus-within:opacity-100 pointer-events-none transition-opacity duration-300"></div>
                </div>
            </div>

            <button 
                type="submit" 
                class="relative w-full py-3.5 bg-gradient-to-b from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-zinc-950 font-bold uppercase tracking-widest rounded-lg shadow-[0_4px_20px_rgba(245,158,11,0.2)] hover:shadow-[0_4px_25px_rgba(245,158,11,0.4)] active:scale-[0.98] transition-all duration-200 cursor-pointer text-sm"
            >
                Validar Alinhamento
            </button>
            
        </form>

        <footer class="mt-8 text-center">
            <p class="text-[10px] text-zinc-500 tracking-widest font-sans">
                "Os números governam o universo." — Pitágoras
            </p>
        </footer>

    </main>

</body>
</html>