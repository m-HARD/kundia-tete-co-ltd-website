<template>
  <footer
    dir="rtl"
    class="section-bg-transparent mt-auto w-full overflow-hidden border-t border-gray-200 bg-gray-50 transition-colors duration-300 dark:border-gray-600"
  >
    <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
    <div class="relative z-10 mx-auto max-w-7xl px-4 py-8 text-gray-900 dark:text-gray-100 sm:px-6 lg:px-8">
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
