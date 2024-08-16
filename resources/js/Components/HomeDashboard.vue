<template>
 <div class="p-14 flex sm:flex-row flex-col items-center justify-between md:gap-12 gap-6 border-b border-gray-100">

    <div class=" px-4 py-8 rounded-md shadow-lg space-y-4 bg-teal-500">
        <div class="flex md:flex-row flex-col gap-6 items-center">

        <i class=" text-white text-6xl bi bi-cart-fill"></i>
        <div class="space-y-6">
        <span class="text-2xl text-white font-bold">M20002.00</span> <br>
        <span class="text-white text-xl font-semibold">Total Sales</span>
        </div>
        </div>
        <div class="flex items-center gap-2 justify-center">
            <i class=" text-white text-xs bi bi-arrow-right"></i>
            <a href="" class="text-xs text-white font-bold">More Info</a>
        </div>
    </div>
    <div class=" px-4 py-8 rounded-md shadow-lg space-y-4 bg-green-500">
        <div class="flex md:flex-row flex-col gap-10 items-center">

        <i class="text-white text-6xl bi bi-people-fill"></i>
        <div class="space-y-6">
        <span class="text-2xl text-white font-bold">7</span> <br>
        <span class="text-white text-xl font-semibold">Total Staff</span>
        </div>
        </div>
        <div class="flex items-center gap-2 justify-center">
            <i class=" text-white text-xs bi bi-arrow-right"></i>
            <a href="" class="text-xs text-white font-bold">More Info</a>
        </div>
    </div>
    <div class=" px-4 py-8 rounded-md shadow-lg space-y-4 bg-indigo-500 text-white">
        <div class="flex md:flex-row flex-col gap-6 items-center">

       <i class="bi bi-bag-fill text-6xl text-white"></i>
        <div class="space-y-6">
        <span class="text-2xl text-white font-bold">44</span> <br>
        <span class="text-white text-xl font-semibold">Total Products</span>
        </div>
        </div>
        <div class="flex items-center gap-2  justify-center">
            <i class=" text-white text-xs bi bi-arrow-right"></i>
            <a href="" class="text-xs text-white font-bold">More Info</a>
        </div>
    </div>
 </div>

 <div class="p-14 w-full overflow-x-auto">
    <h1 class="text-gray-800 text-3xl font-bold ">Latest Products:</h1>
    <table class="mt-6 w-full ">
        <thead class="bg-green-500 rounded-t-lg">

            <tr class="">
                <th class="px-5 py-1 text-md text-white">Product Name</th>
                <th class="px-5 py-1 text-md text-white">Product code</th>
                <th class="px-5 py-1 text-md text-white">Product catergory</th>
                <th class="px-5 py-1 text-md text-white">Product quantity</th>
                <th class="px-5 py-1 text-md text-white">Product Price</th>
                <th class="px-5 py-1 text-md text-white">Expiry status</th>
            </tr>
        </thead>

        <tbody class="mt-6">
            <tr v-for="product in products" :key="product.id" class="border-b border-100 py-10">
                <td class="px-5 py-6">{{ product.Name }}</td>
                <td class="px-5 py-6">{{ product.code }}</td>
                <td class="px-5 py-6">{{ product.catergory }}</td>
                <td class="px-5 py-6">{{ product.quantity }}</td>
                <td class="px-5 py-6">M{{ product.price }}00</td>
                <td class="px-5 py-6">{{ product.status }}</td>
            </tr>

        </tbody>
    </table>
 </div>
</template>

<script setup>

const props = defineProps({
    products: Array
})
</script>

