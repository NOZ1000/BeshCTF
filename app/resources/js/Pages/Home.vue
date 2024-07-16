<template>
    <div className="flex flex-col min-h-screen overflow-hidden">

        <!-- Site header -->
        <Header />

        <!-- Page content -->
        <main class="grow">

        <!-- Page sections -->
        <HeroHome />
        <!-- <FeaturesBlocks /> -->
        <!-- <FeaturesHome /> -->
        <!-- <FeaturesHome02 /> -->
        <!-- <FeaturesHome03 /> -->
        <!-- <Cta /> -->
        <!-- <PricingSection /> -->

        </main>
        
        <!-- Site footer -->
        <Footer />    

    </div>
</template>

<script setup>
import Header from '@/partials/Header.vue'
import HeroHome from '@/partials/HeroHome.vue'
import FeaturesBlocks from '@/partials/FeaturesBlocks.vue'
import FeaturesHome from '@/partials/FeaturesHome.vue'
import FeaturesHome02 from '@/partials/FeaturesHome02.vue'
import FeaturesHome03 from '@/partials/FeaturesHome03.vue'
import Target from '@/partials/Target.vue'
import PricingSection from '@/partials/PricingSection.vue'
import Cta from '@/partials/Cta.vue'
import Footer from '@/partials/Footer.vue'


</script>