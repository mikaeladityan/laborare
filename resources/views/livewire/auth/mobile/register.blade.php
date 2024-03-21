<div
    class="bg-[url('https://img.freepik.com/free-photo/volcano-sunset_1150-18320.jpg?t=st=1710941486~exp=1710945086~hmac=78f87d468bddd4496f9d34fb857dd99d4390cdccde2126e8c3edc1bcb02bb4ec&w=826')] w-full h-screen relative bg-cover bg-center bg-no-repeat">
    <div
        class="absolute top-0 left-0 z-10 flex items-end justify-center w-full h-full px-3 pb-5 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent">
        <div>
            <h1 class="text-3xl font-bold capitalize text-slate-200">
                Daftarkan <br> diri anda sekarang!
            </h1>
            <p class="mt-3 text-sm font-medium text-slate-300">
                Dapatkan penawaran terbaik dengan mendaftarkan diri anda sebagai bagian dari kami
            </p>
            <form action="" method="POST">
                @csrf
                <div class="pt-5 pb-4">
                    <label for="email" class="block font-medium uppercase text-slate-200">Email</label>
                    <x-auth-input type="email" name="email" id="email" placeholder="mail@laborare.com"
                        autocomplete="email" autofocus />
                </div>

                <div class="pb-4">
                    <div class="flex items-center justify-center w-full gap-4">
                        <div class="w-6/12">
                            <label for="password"
                                class="block text-sm font-medium uppercase text-slate-200">Password</label>
                            <x-auth-input type="password" name="password" id="password" placeholder="********" />
                        </div>
                        <div class="w-6/12">
                            <label for="confirmation_password"
                                class="block text-sm font-medium uppercase text-slate-200">Konfirmasi</label>
                            <x-auth-input type="password" name="confirmation_password" id="confirmation_password"
                                placeholder="********" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center w-5/12 pt-2">
                    <button
                        class="w-full py-2 text-sm font-medium uppercase bg-blue-800 rounded-xl text-slate-200">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
