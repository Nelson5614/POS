<template>
<Head title="| Inventry-Management"/>
<AppLayout>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">

                    <p v-if="$page.props.flash.message" class="p-4 bg-green-200">{{$page.props.flash.message}}</p>

                    <div class="flex justify-end mt-4">
                        <Link :href="route('inventry.create')" class="py-2 px-4 rounded-lg bg-green-500 text-white hover:bg-green-600 ">Add Stock</Link>
                    </div>
                 <div class=" mt-8 w-full overflow-x-auto">
                    <h1 class="text-gray-800 text-xl font-bold ">Manage Inventry:</h1>
                    <table class="mt-6 w-full ">
                        <thead class="bg-green-500 rounded-t-lg">

                           <tr class="">
                                <th class="px-5 py-1 text-left text-md text-white">Product Name</th>
                                <th class="px-5 py-1 text-left text-md text-white">Product code</th>
                                <th class="px-5 py-1 text-left text-md text-white">Product catergory</th>
                                <th class="px-5 py-1 text-left text-md text-white">Product quantity</th>
                                <th class="px-5 py-1 text-left text-md text-white">Product Price</th>
                                <th class="px-5 py-1 text-left text-md text-white">Expiry status</th>
                                <th class="px-5 py-1 text-left text-md text-white">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="mt-6">

                            <tr v-for="product in products" :key="product.id" class="border-b border-100 py-10">

                                <td class="px-5 py-6 pl-4">{{ product.Name }}</td>
                                <td class="px-5 py-6 pl-4">{{ product.code }}</td>
                                <td class="px-5 py-6 pl-4">{{ product.catergory }}</td>
                                <td class="px-5 py-6 pl-4">{{ product.quantity }}</td>
                                <td class="px-5 py-6 pl-4">M{{ product.price }}.00</td>
                                <td class="px-5 py-6 pl-4">{{ product.status }}</td>
                                <td>
                                    <div class="flex space-x-3 items-center">
                                        <Link :href="route('inventry.edit', product.id)" class="bi bi-pencil-square rounded-md py-1 px-3 bg-green-500 text-white"></Link>

                                        <button type="submit" class="bi bi-trash3-fill rounded-md py-1 px-3 bg-red-500 text-white"></button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
</AppLayout>
</template>

<script setup>
import AppLayout from '../../Layouts/AppLayout.vue'
 const props = defineProps({
    products: Array
 })

</script>

