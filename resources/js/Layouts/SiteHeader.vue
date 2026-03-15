<template>
  <header
    dir="rtl"
    class="sticky top-0 z-50 border-b transition-colors duration-300"
    :class="
      dark
        ? 'border-gray-700 bg-gray-900/95 backdrop-blur'
        : 'border-gray-200 bg-white/95 backdrop-blur'
    "
  >
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
      <!-- الشعار واسم الشركة -->
      <Link href="/" class="flex items-center gap-2">
        <LogoPlaceholder />
        <span class="text-lg font-semibold">كنديا تيتي المحدودة</span>
      </Link>

      <!-- القائمة الرئيسية -->
      <nav class="hidden gap-6 md:flex">
        <Link
          v-for="item in navItems"
          :key="item.name"
          :href="item.href"
          class="text-sm font-medium transition hover:opacity-80"
          :class="isActive(item.href) ? activeClass : ''"
        >
          {{ item.label }}
        </Link>
      </nav>

      <!-- أزرار الثيم والتواصل -->
      <div class="flex items-center gap-2">
        <button
          type="button"
          class="rounded-lg p-2 transition hover:bg-black/5 dark:hover:bg-white/10"
          :aria-label="dark ? 'التبديل إلى الوضع الفاتح' : 'التبديل إلى الوضع الداكن'"
          @click="$emit('toggleDark')"
        >
          <span v-if="dark" class="text-xl">☀️</span>
          <span v-else class="text-xl">🌙</span>
        </button>
        <Link
          href="/contact"
          class="rounded-lg bg-primary-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-primary-700"
        >
          تواصل معنا
        </Link>
      </div>
    </div>
  </header>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import LogoPlaceholder from '@/Components/LogoPlaceholder.vue';

defineEmits(['toggleDark']);

const props = defineProps({
  dark: { type: Boolean, required: true },
});

const page = usePage();

/** عناصر القائمة بالعربية */
const navItems = computed(() => [
  { name: 'home', href: '/', label: 'الرئيسية' },
  { name: 'about', href: '/about', label: 'من نحن' },
  { name: 'services', href: '/services', label: 'خدماتنا' },
  { name: 'projects', href: '/projects', label: 'مشاريعنا' },
  { name: 'contact', href: '/contact', label: 'تواصل معنا' },
]);

/** هل الرابط هو الصفحة الحالية */
function isActive(href) {
  const url = page.url;
  if (href === '/') return url === '/';
  return url.startsWith(href);
}

/** صنف الرابط النشط */
const activeClass = computed(() =>
  props.dark ? 'text-primary-400' : 'text-primary-600'
);
</script>
