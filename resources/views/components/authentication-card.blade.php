<style>
    .min-h-screen.flex.flex-col.sm\:justify-center.items-center.pt-6.sm\:pt-0.bg-gray-100 {
        position: relative;
        background-image: url(https://wallpapers.com/images/hd/focus-photography-f1-racing-car-ehbm7h99lpnwot43.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: black;

    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity here */
        z-index: 1;
    }
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="overlay"></div>
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style=" z-index: 10;">
        {{ $slot }}
    </div>
</div>
