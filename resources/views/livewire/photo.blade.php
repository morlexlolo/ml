{{ Breadcrumbs::render('photo') }}
<div class=" contact-page container mx-auto px-32 py-6 ">
    <div class="grid grid-cols-4 gap-4">
        <div class=" col-start-1 col-span-2 relative">
            <img class="relative rounded-lg w-full object-cover object-center h-72" src="/images/qoute.png" alt="Test">
            <h4
                class="text-lg w-full h-20 text-center text-red-500 bg-transparent hover:visible font-bold absolute bottom-0">
                Picture title testing.
            </h4>
            <a class="absolute top-10 left-0" href="#click">
                <svg class="fill-current text-center text-red-500 h-16 w-16" viewBox="0 0 24 24">
                    {{-- <path d="M0 0h24v24H0V0z" fill="none"></path> --}}
                    <path
                        d="M11.5 9C10.12 9 9 10.12 9 11.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5S12.88 9 11.5 9zM20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-3.92 13.5l-2.2-2.2c-.9.58-2.03.84-3.22.62-1.88-.35-3.38-1.93-3.62-3.83-.38-3.01 2.18-5.52 5.21-5.04 1.88.3 3.39 1.84 3.7 3.71.19 1.16-.08 2.23-.64 3.12l2.2 2.19c.39.39.39 1.03 0 1.42-.4.4-1.04.4-1.43.01z">
                    </path>
                </svg>
            </a>
        </div>
        <div class=" col-start-3 col-span-2 ">
            <img class="rounded-lg w-full object-cover object-center h-72" src="/images/one.jpeg" alt="Test">
        </div>
        <div class=" col-start-1 col-span-2 ">
            <img class="rounded-lg w-full object-cover object-center h-72" src="/images/qoute.png" alt="Test">
        </div>
        <div class=" col-start-3 col-span-2 ">
            <img class="rounded-lg w-full object-cover object-center h-72" src="/images/one.jpeg" alt="Test">
        </div>
    </div>
</div>
