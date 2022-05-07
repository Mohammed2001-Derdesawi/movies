<template>
<div class="sign section--bg" vi-bind:data-bg="url('../public/assets/admin/img/section/section.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sign__content">
					<!-- authorization form -->
					<form  class="sign__form" @submit.prevent="SendForgotEmail" @keydown="DeleteError">
						<a href="index.html" class="sign__logo">
							<img :src="'/assets/admin/img/logo.svg'" :alt="'Logo'">
						</a>
                        <div class="sign__group">
                         <span class="" :class="status==200 ? 'text-success':'text-danger'  " >{{message}}</span>
                        </div>


						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Email" name="email" v-model="user.email">
							  <div class="sign__group">
                    <span
                      v-if="errors && errors.email"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ errors.email[0] }}</span
                    >
                  </div>
                  <div class="sign__group">
                    <span
                      v-if="validateEmail"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ validateEmail }}</span
                    >
                  </div>
                        </div>



						<button class="sign__btn" type="submit" :disabled="isdisabled" :class="{ forgotpassworddisabled:isdisabled}">
                            Sign in    <div style=" color: #fff;font-size:18px;" v-if="isloading"> <i class="fa fa-spinner fa-spin" style="margin-left:10px;"></i></div>
                        </button>

						<span class="sign__text">We will send a password to your Email</span>
					</form>
					<!-- end authorization form -->
				</div>
			</div>
		</div>
	</div>
</div>
</template>


<script>
export default {
      name:'ForgetpasswordCompnent',

      data()
      {
          return {
              user:{
                email:'',
              },

          errors:{},
          message:'',
          status:0,
          isloading:false,

          }



      },
      computed:{
          isdisabled()
          {
              return this.user.email=='' || this.user.email.length<6 || this.user.email.length>256 || this.isloading;
          },
           validateEmail() {
      if (this.user.email.length < 6 && this.user.email != "")
        return "email is too short";
    },

      },
      methods:{
         async SendForgotEmail()
          {
              this.isloading=true;
                axios.post('/admin/forgot/password',this.user).then((response)=>{
                  this.user.email=''
                  this.status=response.data.status;
                    this.message=response.data.message;
                  if(this.status==200)
                     this.$Message.success(this.message);
                  else
                    this.$Message.error(this.message);



                  this.DeleteMessage()


              }).catch((error)=>{
                this.errors = error.response.data.errors;
                 this.$Message.error(this.errors.email[0]);

              }).finally(()=>{
                  this.isloading=false;
              })

          },
          DeleteError(event)
          {
              delete this.errors[event.target.name];
              this.message='';
          },
          DeleteMessage()
          {
              setTimeout(()=>{
                  return this.message='';
              },9000);
          }

      }



}
</script>
<style scoped>
.forgotpassworddisabled {
  background-image: linear-gradient(90deg, #343434 0%, #272727 100%);
  box-shadow: 0 0 0px 0 rgb(255 88 96 / 50%);
  transition: all 1s;
}
.text-success{
    color:rgb(14, 190, 14)
}
.text-danger{
    font-size: 17px;
    color: #ff55a5;
}
.loader {

  text-align: right;
  border: 10px solid #ff55a5; /* Light grey */
  border-top: 10px solid rgb(221, 221, 221); /* Blue */
  border-radius: 50%;
  width: 13px;
  height: 13px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

