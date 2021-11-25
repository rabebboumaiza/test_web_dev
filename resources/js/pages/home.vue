<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Home</div>
          </div>
        </div>
      </div>

      <div class="card-body"> 
        <form class="flex flex-col" @submit.prevent="submitForm">
          <div class="form-group">
                <textarea cols="7" rows="4" class="form-control border rounded p-3 py-2" v-model="strings" placeholder="Enter une liste de chaines sépare par des virgules">
                </textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info border rounded py-3" >envoyer données</button>
          </div>
                </form>
            </div>
    </div>
  </div>
 

</template>

<script>
export default {

  data(){
    return {
    strings:'',
    }
    },
  methods:{
   
    submitForm(){
      axios.post('/strings',{
        content:this.strings
      })
      console.log(this.strings);
      },
    },
  }
</script>