

<template>
<Head title="| Staff-Management"/>
<AppLayout>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">
                    <p v-if="$page.props.flash.message" class="p-4 bg-green-300">{{$page.props.flash.message}}</p>
                    <div class="flex justify-end mt-5">
                    <Link :href="route('staff.create')" class="py-2 px-4 rounded-lg bg-green-500 text-white hover:bg-green-600 ">Add Staff</Link>
                    </div>
                 <div class=" mt-8 w-full overflow-x-auto">
                    <h1 class="text-gray-800 text-xl font-bold ">Manage Staff:</h1>
                    <table class="mt-6 w-full ">
                        <thead class="bg-green-500 rounded-t-lg">

                            <tr class="">
                                <th class="px-5 py-1 text-left text-md text-white"> Name</th>
                                <th class="px-5 py-1 text-left text-md text-white">Email</th>
                                <th class="px-5 py-1 text-left text-md text-white">Phone</th>
                                <th class="px-5 py-1 text-left text-md text-white">Adress</th>
                                <th class="px-5 py-1 text-left text-md text-white">Department</th>
                                <th class="px-5 py-1 text-left text-md text-white">Position</th>
                                <th class="px-5 py-1 text-left text-md text-white">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="mt-6">

                            <tr v-for="employee in employees" :key="employee" class="border-b border-100 py-10">

                                <td class="px-5 py-6">{{ employee.name }}</td>
                                <td class="px-5 py-6">{{ employee.email }}</td>
                                <td class="px-5 py-6">{{ employee.phone }}</td>
                                <td class="px-5 py-6">{{ employee.address }}</td>
                                <td class="px-5 py-6">{{ employee.department }}</td>
                                <td class="px-5 py-6">{{ employee.position }}</td>

                                <td>
                                    <div class="flex space-x-3 items-center">
                                        <Link :href="route('staff.edit', employee.id)" class="bi bi-pencil-square rounded-md py-1 px-3 bg-green-500 text-white"></Link>

                                        <Link :href="`staff/delete/${employee.id}`" method="DELETE"
                                         class="bi bi-trash3-fill rounded-md py-1 px-3 bg-red-500 text-white"></Link>
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

defineProps({
    employees: Array,
})
</script>

