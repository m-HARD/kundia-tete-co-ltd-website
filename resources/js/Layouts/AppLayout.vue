<template>
  <div
    class="min-h-screen transition-colors duration-300"
    :class="dark ? 'bg-gray-900 text-gray-100' : 'bg-white text-gray-900'"
  >
    <header
      class="sticky top-0 z-50 border-b transition-colors duration-300"
      :class="
        dark
          ? 'border-gray-700 bg-gray-900/95 backdrop-blur'
          : 'border-gray-200 bg-white/95 backdrop-blur'
      "
    >
      <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <Link href="/" class="flex items-center gap-2">
          <LogoPlaceholder />
          <span class="text-lg font-semibold">كنديا تيتي المحدودة</span>
        </Link>

        <nav class="hidden gap-6 md:flex" :dir="locale === 'ar' ? 'rtl' : 'ltr'">
          <Link
            v-for="item in navItems"
            :key="item.name"
            :href="item.href"
            class="text-sm font-medium transition hover:opacity-80"
            :class="
              ($page.url === item.href || ($page.url === '/' && item.href === '/'))
                ? (dark ? 'text-primary-400' : 'text-primary-600')
                : ''
            "
          >
            {{ item.label }}
          </Link>
        </nav>

        <div class="flex items-center gap-2">
          <button
            type="button"
            class="rounded-lg p-2 transition hover:bg-black/5 dark:hover:bg-white/10"
            :aria-label="locale === 'ar' ? (dark ? 'وضع فاتح' : 'وضع داكن') : (dark ? 'Light mode' : 'Dark mode')"
            @click="toggleDark"
          >
            <span v-if="dark" class="text-xl">☀️</span>
            <span v-else class="text-xl">🌙</span>
          </button>
          <Link
            href="/contact"
            class="rounded-lg bg-primary-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-primary-700"
          >
            {{ locale === 'ar' ? 'تواصل معنا' : 'Contact' }}
          </Link>
        </div>
      </div>
    </header>

    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
      <slot />
    </main>

    <footer
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
            {{ locale === 'ar' ? 'جميع الحقوق محفوظة' : 'All rights reserved' }} © {{ new Date().getFullYear() }}
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref, watch, onMounted } from 'vue';
import LogoPlaceholder from '@/Components/LogoPlaceholder.vue';

const page = usePage();
const locale = computed(() => page.props.locale ?? 'ar');
const dark = ref(false);
onMounted(() => {
  dark.value = localStorage.getItem('theme') === 'dark';
  document.documentElement.classList.toggle('dark', dark.value);
});

const navItems = computed(() => {
  const ar = [
    { name: 'home', href: '/', label: 'الرئيسية' },
    { name: 'about', href: '/about', label: 'من نحن' },
    { name: 'services', href: '/services', label: 'خدماتنا' },
    { name: 'projects', href: '/projects', label: 'مشاريعنا' },
    { name: 'contact', href: '/contact', label: 'تواصل معنا' },
  ];
  const en = [
    { name: 'home', href: '/', label: 'Home' },
    { name: 'about', href: '/about', label: 'About' },
    { name: 'services', href: '/services', label: 'Services' },
    { name: 'projects', href: '/projects', label: 'Projects' },
    { name: 'contact', href: '/contact', label: 'Contact' },
  ];
  return locale.value === 'ar' ? ar : en;
});

function toggleDark() {
  dark.value = !dark.value;
  if (typeof localStorage !== 'undefined') {
    localStorage.setItem('theme', dark.value ? 'dark' : 'light');
  }
  document.documentElement.classList.toggle('dark', dark.value);
}
watch(dark, (v) => document.documentElement.classList.toggle('dark', v), { immediate: true });
</script>
