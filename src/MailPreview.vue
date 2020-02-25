<template>
  <a class="px-4 py-2 hover:bg-indigo-500 hover:text-white no-underline text-gray-600 block font-medium" href="/mails/list">
    <span class="w-6 inline-block">
      <font-awesome-icon :icon="faEnvelope" class="pr-1"></font-awesome-icon>
    </span>
    {{ 'Mails' | localize }}
  </a>
</template>

<script>
import { faEnvelope } from '@fortawesome/free-solid-svg-icons'

export default {
  data: () => ({
    faEnvelope
  })
}
</script>
