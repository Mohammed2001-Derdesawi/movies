<template>
<div class="sign section--bg" vi-bind:data-bg="url('../public/assets/admin/img/section/section.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sign__content">
					<!-- registration form -->
					<form action="#" class="sign__form"  @submit.prevent="formsubmit()"
                      @keydown="clearError">
						<a :href="'#'" class="sign__logo">
							<img :src="'/assets/admin/img/logo.svg'" :alt="'Logo'">
						</a>

						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Name" name="name" required v-model="admin.name">
							  <div class="sign__group">
                    <span
                      v-if="errors && errors.name"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ errors.name[0] }}</span
                    >
                  </div>
                   <div class="sign__group">
                    <span
                      v-if="validateName"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ validateName }}</span
                    >
                  </div>
                        </div>

						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Email" required name="email" v-model="admin.email">
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

						<div class="sign__group">
							<input type="password" class="sign__input" placeholder="Password" name="password" v-model="admin.password">
							  <div class="sign__group">
                    <span
                      v-if="errors && errors.password"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ errors.password[0] }}</span
                    >
                  </div>
                     <div class="sign__group">
                    <span
                      v-if="validatePassword"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ validatePassword }}</span
                    >
                  </div>
                        </div>
						<div class="sign__group">
							<input type="password" class="sign__input" placeholder="confirm password" name="password_confirmation" required v-model="admin.password_confirmation">
					  <div class="sign__group">
                    <span
                      v-if="validconfirmpasssword"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ validconfirmpasssword }}</span
                    >
                  </div>
                    	</div>




						<button class="sign__btn" type="submit"
                        :disabled="isdisabled || isdisabledvarbutton"
                        :class="{ signupdisabled: isdisabled ||isdisabledvarbutton }"
                        >Sign up</button>

						<span class="sign__text">Already have an account? <a :href="'/admin/signin'">Sign in!</a></span>
					</form>
					<!-- registration form -->
				</div>
			</div>
		</div>
	</div>
</div>
</template>


<script>
export default {
      name:'SignupCompnent',
      data()
      {
         return {
              admin:{
                name:'',
                email:'',
                password:'',
                password_confirmation:''

              },
            errors:{
              password:'',
            },

         }
      },
      computed:{
           gradiant() {
      return "signupdisabled";
    },
          validateEmail()
          {
              if(this.admin.email.length<6 && this.admin.email!='')
              {
                    return  'email is too short';
              }



          },
            validatePassword()
          {
              if(this.admin.password.length<5  && this.admin.password!='')
              {
                   return  'password is too short';

              }





              else if (this.admin.password.length>25  && this.admin.password!='')
              {
               return  'password is too long';

              }


          },
          validconfirmpasssword()
          {
              if((this.admin.password!='' && this.admin.password.length!=0) && this.admin.password !=this.admin.password_confirmation)
              {


                   return 'password confirmation mismatch'

              }

          },
          validateName()
          {
              if(this.admin.name.length<5 && this.admin.name!='')
              {
              return 'Name is too short '

              }
              else if (this.admin.name.length > 25)
              {
              return 'Name is too long '

              }

          },
          isdisabledvarbutton()
          {
              if(this.validateEmail==undefined && this.validatePassword==undefined && this.validconfirmpasssword==undefined && this.validateName==undefined)
              return false
              else return true
          },
           isdisabled() {
               return this.admin.email.length == 0 || this.admin.password.length == 0 || this.admin.name.length==  0 ||this.admin.password_confirmation.length ==0;
           },


      },
      methods:{

           async formsubmit(event){
                 axios.post('/admin/register',this.admin).then((response)=>{

               window.location.href = '/admin/signin';
                   this.admin={
                       name:'',
                        email:'',
                        password:'',
                        password_confirmation:'',
                    }



                })
                .catch((error)=>{
                if(error.response.status==422)
                {
 this.errors=error.response.data.errors;



                }

                  else
                  {
                 this.errors=error;
                  }


                })

            },
             clearError(event)
      {
          delete this.errors[event.target.name];

      }

      }


}
</script>
<style scoped>
.signupdisabled {
  background-image: linear-gradient(90deg, #343434 0%, #272727 100%);
  box-shadow: 0 0 0px 0 rgb(255 88 96 / 50%);
  transition: all 1s;
}
</style>
