<template>
  <footer
    dir="rtl"
    class="mt-auto border-t transition-colors duration-300"
    :class="
      dark
        ? 'border-gray-700 bg-gray-900'
        : 'border-gray-200 bg-gray-50'
    "
  >
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="flex items-center gap-2">
          <LogoPlaceholder />
          <span class="font-medium">كنديا تيتي المحدودة</span>
        </div>
        <p class="text-sm opacity-80">
          جميع الحقوق محفوظة © {{ currentYear }}
        </p>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue';
import LogoPlaceholder from '@/Components/LogoPlaceholder.vue';

defineProps({
  dark: { type: Boolean, required: true },
});

const currentYear = computed(() => new Date().getFullYear());
</script>
