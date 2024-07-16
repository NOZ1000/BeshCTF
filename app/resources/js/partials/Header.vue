<script setup>
import { Link } from '@inertiajs/vue3'


</script>

<template>
  <header class="absolute w-full z-30 bg-slate-900">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16 md:h-20 ">

        <!-- Site branding -->
        <div class="shrink-0 mr-4">
          <!-- Logo -->
          <Link :href="route('home')" class="block text-blue-600 transition duration-150 ease-in-out" aria-label="Cruip">
            <img class="w-14" src="/besh-logo.png" alt="Cruip" />
          </Link>
        </div>

        <!-- Desktop navigation -->
        <nav class=" md:flex md:grow">

          <!-- Desktop menu links -->
          <ul class="flex grow justify-start flex-wrap items-center">
            <li>
              <Link :href="route('tasks')" class="font-medium text-slate-800 hover:text-blue-600 dark:text-slate-400 dark:hover:text-blue-600 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out">Tasks</Link>
            </li>
            <!-- 1st level: hover -->
            <!-- <Dropdown title="Resources">
              <li>
                <a to="/404" class="font-medium text-sm text-slate-600 hover:text-blue-600 flex py-2 px-5 leading-tight">404</a>
              </li>
              <li>
                <a to="/support" class="font-medium text-sm text-slate-600 hover:text-blue-600 flex py-2 px-5 leading-tight">Support center</a>
              </li>
            </Dropdown> -->
          </ul>

          <!-- Desktop sign in links -->
          <ul v-if="!$page.props.auth.user" class="flex grow justify-end flex-wrap items-center">
            <li>
              <Link :href="route('login')" class="font-medium text-slate-800 hover:text-blue-600 dark:text-slate-400 dark:hover:text-blue-600 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out">Sign in</Link>
            </li>
          </ul>
          <ul v-else class="flex grow justify-end flex-wrap items-center">
            <li>
              <Link :href="route('logout')" method="post" as="button" class="font-medium text-slate-800 hover:text-blue-600 dark:text-slate-400 dark:hover:text-blue-600 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out">Logout</Link>
            </li>
          </ul>

        </nav>

        

      </div>
    </div>
  </header>
</template>
