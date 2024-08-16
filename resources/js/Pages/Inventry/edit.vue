<template>
  <AppLayout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">

            <form @submit.prevent="form.put(`/inventry/update/${props.product.id}`)">
                <h1 class="text-2xl text-gray-800 font-bold text-center">Edit product</h1>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                        <InputLabel for="name" value="Product Name" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.name"
                        autocomplete
                        />
                        <div class="text-red-500" v-if="form.errors.name">{{form.errors.name}}</div>
                    </div>

                    <div class=" w-full">
                        <InputLabel for="code" value="Product code" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.code"
                        autocomplete
                        />
                        <div class="text-red-500" v-if="form.errors.code">{{form.errors.code}}</div>

                    </div>
                </div>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                        <InputLabel for="catergory" value="Product Catergory" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.catergory"
                        autocomplete
                        />
                        <div class="text-red-500" v-if="form.errors.catergory">{{form.errors.catergory}}</div>

                    </div>

                    <div class=" w-full">
                        <InputLabel for="quantity" value="Quantity" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.quantity"
                        autocomplete
                        />
                        <div class="text-red-500" v-if="form.errors.quantity">{{form.errors.quantity}}</div>

                    </div>
                </div>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                        <InputLabel for="expiring_date" value="Expiry Date" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.expiring_date"
                        autocomplete
                        />
                        <div class="text-red-500" v-if="form.errors.expiring_date">{{form.errors.expiring_date}}</div>

                    </div>

                    <div class=" w-full">
                        <InputLabel for="price" value="Price" />
                        <TextInput
                        class="mt-1 block w-full"
                        type="text"
                        required
                        v-model="form.price"
                        autocomplete
                        />
                         <div class="text-red-500" v-if="form.errors.price">{{form.errors.price}}</div>

                    </div>
                </div>
                <PrimaryButton type="submit" class="flex justify-end mt-4" >Update</PrimaryButton>
            </form>

        </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "../../Components/InputLabel.vue"
import TextInput from "../../Components/TextInput.vue"
import PrimaryButton from "../../Components/PrimaryButton.vue"
import AppLayout from "../../Layouts/AppLayout.vue";

const props = defineProps({
    product: Object
})

const form = useForm({
    name: props.product.name,
    code: props.product.code,
    catergory:props.product.catergory,
    quantity: props.product.quantity,
    price: props.product.price,
    expiring_date: props.product.expiring_date,
});



</script>


