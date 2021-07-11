<template>
    
   <!-- <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Comment Component </div>
            
          <div class="card-body">
             <h5>I am  comment</h5>
             <br>
            <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Body</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="comment in comments" :key="comment.id">
                                <td>{{comment.id}}</td>
                                <td>{{comment.body}}</td>
                            </tr>
                        </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
   <div>
        <h1>I am component Comments</h1>
        Current state counter is : {{$store.state.counter}}
    </div>
</template>

<script>

export default {
//   name:"Comment",
//    props:['comment'],
//   data(){
//             return {
//               comments: this.comment
//             }
//         },
//   mounted() {
//             console.log(this.comment)
//         }

 }
</script>