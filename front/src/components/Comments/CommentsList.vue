<template>
  <q-card
          flat
          class="q-mt-lg">
    <q-card-section>
      <div class="text-h5">
        Comments
      </div>
    </q-card-section>
    <q-card-section>
      <comment-form
        :type="'comment'"
      />
    </q-card-section>

    <q-separator/>

    <q-card-section>
      <comment-detail
        v-for="comment in comments"
        :key="comment.id"
        :comment="comment"/>
    </q-card-section>
  </q-card>

</template>

<script>
import { mapActions, mapGetters } from 'vuex'

export default {
  name: "CommentsList",
  methods: {
    ...mapActions('comments', ['fetchComments']),
  },
 mounted() {
     this.fetchComments(this.$route.params.postId)
  },
  computed: {
    ...mapGetters('comments', ['comments'])
  },
  components: {
    'comment-form': require('components/Comments/CommentsForm.vue').default,
    'comment-detail': require('components/Comments/CommentsDetail.vue').default
  }
}
</script>

<style scoped>

</style>
