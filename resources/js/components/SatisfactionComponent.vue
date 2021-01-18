<template>
  <div>
    <vue-feedback-reaction :labels="['Horrible', 'Bad', 'Meh', 'Happy', 'I love you']" v-model="feedback" />
  </div>
</template>

<script>
import { VueFeedbackReaction } from 'vue-feedback-reaction';

export default {
  name: 'demo',
  components: {
    VueFeedbackReaction
  },
  data: () => ({
    feedback: ''
  })
};
</script>