<template>
    <div>
        <h3 class="text-center">Add Post</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Hello Add Post</h5>
                <form @submit.prevent="addPost">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="post.description">
                    </div>  
                    <div class="form-group">
                    <label>Select</label>
                    <select>
                        <!-- <option value="">Select Post</option>
                        <option v-for=" post in getPost " :key="post.id">
                            {{ post.title}}
                        </option> -->
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Post</button>
                  
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
// import axios from 'axios'
// import { mapGetters, mapMutations  } from 'vuex'
    export default {
        data() {
            return {
              post: {},
            }
        },
        methods: {
            addPost() {
                this.axios
                    .post('/api/post/add',this.post)
                    .then(response => (
                       this.$router.push({path: '/'}),
                       console.log(response)
                        //  this.$store.dispatch('addPost', this.post)
                    ))
                    .catch(error => console.log(error));
            }
        },
//            computed: {
//     ...mapGetters({
//         getPost: 'getPost'
//     }),
//     ...mapMutations([
//       'setPost'
//     ])
//   },
    }
</script>