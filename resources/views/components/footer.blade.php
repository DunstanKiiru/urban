<footer class="bg-gray-900 text-white">
    <div class="mx-auto max-w-7xl px-6 py-12">

        <div class="grid gap-10 md:grid-cols-4">

            <div>
                <h2 class="text-xl font-bold">
                    Urban Roads SACCO
                </h2>

                <p class="mt-4 text-sm leading-6 text-gray-400">
                    Empowering members through savings,
                    affordable credit and sustainable financial solutions.
                </p>
            </div>

            <div>
                <h3 class="font-semibold">Quick Links</h3>

                <div class="mt-4 space-y-2 text-sm text-gray-400">
                    <a href="{{ route('home') }}" class="block hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('about') }}" class="block hover:text-white">
                        About Us
                    </a>

                    <a href="#" class="block hover:text-white">
                        Membership
                    </a>

                    <a href="#" class="block hover:text-white">
                        Loans
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold">Services</h3>

                <div class="mt-4 space-y-2 text-sm text-gray-400">
                    <p>Savings</p>
                    <p>Loan Products</p>
                    <p>Member Services</p>
                    <p>Financial Education</p>
                </div>
            </div>

            <div>
                <h3 class="font-semibold">Contact</h3>

                <div class="mt-4 space-y-2 text-sm text-gray-400">
                    <p>Urban Roads SACCO</p>
                    <p>Nairobi, Kenya</p>
                    <p>Phone: +254 XXX XXX XXX</p>
                    <p>Email: info@urbanroadssacco.co.ke</p>
                </div>
            </div>

        </div>

        <div class="mt-10 border-t border-gray-800 pt-6 text-sm text-gray-500">
            © {{ date('Y') }} Urban Roads SACCO. All rights reserved.
        </div>

    </div>
</footer>
