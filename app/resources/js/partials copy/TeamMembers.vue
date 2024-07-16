<template>
  <section>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-12 md:py-20">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
          <h2 class="h2 font-playfair-display text-slate-800">What do we value? All sorts of things!</h2>
        </div>

        <!-- Team members -->
        <div class="relative max-w-sm mx-auto grid gap-y-12 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 lg:gap-y-20 items-start sm:max-w-xl lg:max-w-none" data-aos-id-team>

          <!-- 1st member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-01.jpg" width="120" height="120" alt="Member 01" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Mark Lamprecht</h4>
            <div class="font-medium text-blue-600">CEO & Co-founder</div>
          </div>

          <!-- 2nd member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="100">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-02.jpg" width="120" height="120" alt="Member 02" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Elisa Nguyen</h4>
            <div class="font-medium text-blue-600">Co-Founder, Lead Engineer</div>
          </div>

          <!-- 3rd member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="200">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-03.jpg" width="120" height="120" alt="Member 03" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Travis Stephens</h4>
            <div class="font-medium text-blue-600">Senior Software Engineer</div>
          </div>

          <!-- 4th member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="300">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-04.jpg" width="120" height="120" alt="Member 04" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Cameron Mckay</h4>
            <div class="font-medium text-blue-600">Senior UX/UI Designer</div>
          </div>

          <!-- 5th member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="400">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-05.jpg" width="120" height="120" alt="Member 05" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Patricia Curnock</h4>
            <div class="font-medium text-blue-600">Software Engineer</div>
          </div>

          <!-- 6th member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="500">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-06.jpg" width="120" height="120" alt="Member 06" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Amanda Danish</h4>
            <div class="font-medium text-blue-600">Business Development</div>
          </div>

          <!-- 7th member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="600">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-07.jpg" width="120" height="120" alt="Member 07" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Zoltan Jackson</h4>
            <div class="font-medium text-blue-600">Marketing Manager</div>
          </div>

          <!-- 8th member -->
          <div class="text-center" data-aos="fade-up" data-aos-anchor="[data-aos-id-team]" data-aos-delay="700">
            <div class="inline-flex mb-4">
              <img class="rounded-full" src="/images/team-member-08.jpg" width="120" height="120" alt="Member 08" />
            </div>
            <h4 class="h4 font-playfair-display text-slate-800 mb-2">Sara Tolinski</h4>
            <div class="font-medium text-blue-600">Community Manager</div>
          </div>

        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'TeamMembers',
}
</script>