<template>
    
   <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header ">
            <h3>LIST POST</h3>
          </div>
          <div class="card-body">
           <h5 style="text-align:center">ALL Information Post Today</h5> 
          <div class="add">
             <router-link :to="{name: 'add'}" >
                     <button type="submit" class="btn btn-success">Add</button>
             </router-link>
          </div>
           <br>
           <table class="table table-bordered">
               <thead>
                 <tr>
                     <th>ID</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Action</th>
                 </tr>
               </thead>
             <tbody>
                 <tr  v-for="post in posts" :key="post.p_id">
                     <td>{{post.p_id}}</td>   
                     <td>{{post.title}}</td>   
                     <td>{{post.description}}</td>    
                     <td> 
                        <router-link :to="{name: 'edit', params: { id: post.p_id }}" class="btn btn-warning text-white">Edit
                        </router-link>   
                        <button type="submit" class="btn btn-danger" @click="deletePost(post.p_id)">Delete</button>
                      </td>
                 </tr>
             </tbody>
           </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
            return {
                posts: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/post')
                .then(response => {
                    this.posts = response.data.data;
                    // console.log(response.data)
                })
                  .catch(error => console.log(error));
        },
          methods: {
            // deletePost(id) {
            //   // console.log(id, "delete")
            //     this.axios
            //         .delete(`/api/post/delete/${id}`)
            //         .then((response) => {
            //           this.$router.push({path: '/add'}),
            //             console.log(response)
            //         })
            //           .catch(error => console.log(error));
            // }
            deletePost: function($id) {
            axios.delete('/api/post/delete/'+ $id)
            .then((response) => {               
              console.log(response)
            },(error) => {
              console.log(error)
            });
       }
     
          }
}
</script>