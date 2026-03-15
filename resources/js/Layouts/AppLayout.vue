<template>
  <div
    class="min-h-screen transition-colors duration-300"
    :class="dark ? 'bg-gray-900 text-gray-100' : 'bg-white text-gray-900'"
  >
    <SiteHeader :dark="dark" @toggle-dark="toggleDark" />

    <main class="w-full py-8">
      <slot />
    </main>

    <SiteFooter :dark="dark" />
  </div>
</template>

<script setup>
import { ref, watch, onMounted } from 'vue';
import SiteHeader from '@/Layouts/SiteHeader.vue';
import SiteFooter from '@/Layouts/SiteFooter.vue';

const dark = ref(false);

onMounted(() => {
  dark.value = localStorage.getItem('theme') === 'dark';
  document.documentElement.classList.toggle('dark', dark.value);
});

function toggleDark() {
  dark.value = !dark.value;
  if (typeof localStorage !== 'undefined') {
    localStorage.setItem('theme', dark.value ? 'dark' : 'light');
  }
  document.documentElement.classList.toggle('dark', dark.value);
}

watch(dark, (v) => document.documentElement.classList.toggle('dark', v), {
  immediate: true,
});
</script>
