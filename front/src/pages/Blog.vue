<template>
  <q-page>
    <div class="row full-width q-pt-lg">
      <div class="fit row wrap justify-center items-start content-start">
        <div class="col-10">
          <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 q-pa-md">
              <single-post
                :blog="blog"
              ></single-post>
              <comments/>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 q-pa-md">
              <user-card></user-card>
            </div>
          </div>
        </div>
      </div>
    </div>
  </q-page>
</template>


<script>
import {mapActions, mapState} from 'vuex'
import {fetchBlog} from "src/store/blog-store/actions";

export default {
  data() {
    return {
      newComment: '',
      submitting: false,
    }
  },
  methods: {
    ...mapActions('blog', ['fetchBlog']),
  },
  mounted() {
    this.fetchBlog(this.$route.params.postId)
  },
  computed: {
    ...mapState('blog', ['blog'])
  },
  components: {
    'single-post': require('components/Blog/SinglePost.vue').default,
    'user-card': require('components/User/UserCard.vue').default,
    'comments': require('components/Comments/CommentsList.vue').default
  }
}
</script>

<style lang="scss" scoped>
#caption {
  background-color: rgba(0, 0, 0, 0.5);
}

.responsive {
  max-width: 100%;
  height: auto;
}
</style>
