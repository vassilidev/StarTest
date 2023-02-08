<script setup>
import InputText from "@/Components/InputText.vue";
import InputError from "@/Components/InputError.vue";

defineProps({
  form: Object,
});
</script>

<template>
  <div class="mt-4">
    <InputText v-model="form.name" placeholder="Prénom"/>
    <InputError :message="form.errors.name" class="mt-2"/>
  </div>

  <div class="mt-4">
    <InputText v-model="form.surname" placeholder="Nom"/>
    <InputError :message="form.errors.surname" class="mt-2"/>
  </div>

  <div class="mt-4">
    <InputText v-model="form.image_url" placeholder="Image URL"/>
    <InputError :message="form.errors.image_url" class="mt-2"/>
  </div>

  <div class="mt-4">
    <InputText v-model="form.description" placeholder="Description"/>
    <InputError :message="form.errors.description" class="mt-2"/>
  </div>
</template>
