<script setup>
import {router, Link} from "@inertiajs/vue3";

defineProps({
  star: Object,
});

const deleteStar = (starID) => {
  router.delete(route('stars.destroy', starID), {
    onBefore: () => confirm('Are you sure you want to delete this Super Star?'),
  });
}
</script>

<template>
  <div class="p-4">
    <img :src="star.image_url" :alt="star.full_name" class="rounded-full drop-shadow-2xl" width="250">
    {{ star.description }}
    <div class="m-4">
      <button v-if="star.can.delete" @click="deleteStar(star.id)" class="btn btn-red mx-2">🗑️</button>
      <Link v-if="star.can.edit" class="btn btn-blue mx-2" :href="route('stars.edit', star.id)">✏️</Link>
    </div>
  </div>
</template>