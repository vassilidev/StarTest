<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/Pagination.vue";
import Accordion from "@/Components/Accordion.vue";
import StarCard from "@/Components/StarCard.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
  stars: Object,
  can: Object,
});
</script>

<template>
  <AppLayout title="Stars Index">
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      <Link v-if="can.create" :href="route('stars.create')" class="btn btn-green">
        Create a new Star ⭐
      </Link>

      <div class="mt-6 bg-white shadow-sm rounded-lg">
        <Accordion v-for="star in stars.data" :key="star.id" :title="star.full_name + ' ✨'">
          <StarCard :star="star"/>
        </Accordion>

        <Pagination :links="stars.links"/>
      </div>
    </div>
  </AppLayout>
</template>