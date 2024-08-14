<template>
<Head title="| Staff-Management"/>
<AppLayout>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">

                    <div class="flex justify-end">

                    <Link :href="route('staff.create')" class="py-2 px-4 rounded-lg bg-green-500 text-white hover:bg-green-600 ">Add Staff</Link>
                    </div>
                 <div class=" mt-8 w-full overflow-x-auto">
                    <h1 class="text-gray-800 text-xl font-bold ">Manage Staff:</h1>
                    <table class="mt-6 w-full ">
                        <thead class="bg-green-500 rounded-t-lg">

                            <tr class="">
                                <th class="px-5 py-1 text-md text-white"> Name</th>
                                <th class="px-5 py-1 text-md text-white">Email</th>
                                <th class="px-5 py-1 text-md text-white">Phone</th>
                                <th class="px-5 py-1 text-md text-white">Adress</th>
                                <th class="px-5 py-1 text-md text-white">Department</th>
                                <th class="px-5 py-1 text-md text-white">Position</th>
                                <th class="px-5 py-1 text-md text-white">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="mt-6">
                            <tr class="border-b border-100 py-10">
                                <td>Eggs</td>
                                <td class="px-5 py-6">BVC12</td>
                                <td class="px-5 py-6">Perishable</td>
                                <td class="px-5 py-6">100</td>
                                <td class="px-5 py-6">M80.00</td>
                                <td class="px-5 py-6">Valid</td>
                                <td>
                                    <div class="flex space-x-3 items-center">
                                        <i class="bi bi-pencil-square rounded-md py-1 px-3 bg-green-500 text-white"></i>
                                        <i class="bi bi-trash3-fill rounded-md py-1 px-3 bg-red-500 text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-100 py-10">
                                <td>Eggs</td>
                                <td class="px-5 py-6">BVC12</td>
                                <td class="px-5 py-6">Perishable</td>
                                <td class="px-5 py-6">100</td>
                                <td class="px-5 py-6">M80.00</td>
                                <td class="px-5 py-6 w-28 text-green-700 text-center rounded-full ">Valid</td>
                                 <td>
                                    <div class="flex space-x-3 items-center">
                                        <i class="bi bi-pencil-square rounded-md py-1 px-3 bg-green-500 text-white"></i>
                                        <i class="bi bi-trash3-fill rounded-md py-1 px-3 bg-red-500 text-white"></i>
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

<script>
import AppLayout from '../../Layouts/AppLayout.vue'
export default {
    components:{AppLayout}
}

</script>

<style>

</style>
