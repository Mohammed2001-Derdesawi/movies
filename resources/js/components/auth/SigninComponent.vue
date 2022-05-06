<template>
  <div>
    <div
      class="sign section--bg"
      vi-bind:data-bg="url('../public/assets/admin/img/section/section.jpg')"
      alt="Not Found"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sign__content">
              <!-- authorization form -->
              <form
                class="sign__form"
                @submit.prevent="formsubmit()"
                @keydown="clearError"
              >
                <a href="#" class="sign__logo">
                  <img :src="'/assets/admin/img/logo.svg'" :alt="'Logo'" />
                </a>

                <div class="sign__group">
                  <input
                    type="text"
                    class="sign__input is-invalid"
                    placeholder="Email"
                    v-model="admin.email"
                    name="email"
                  />
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
                  <input
                    type="password"
                    class="sign__input"
                    placeholder="Password"
                    v-model="admin.password"
                    name="password"
                  />
                  <div class="sign__group">
                    <span
                      v-if="password_invalid"
                      class="text-danger"
                      style="color: #ff55a5; margin-top: 20px"
                      >{{ password_invalid }}</span
                    >
                  </div>
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

                <div class="sign__group sign__group--checkbox">
                  <input
                    id="remember"
                    name="remember"
                    type="checkbox"
                    checked="checked"
                    v-model="admin.remember"
                  />
                  <label for="remember">Remember Me</label>
                </div>

                <button
                  class="sign__btn"
                  type="submit"
                  :disabled="isdisabled || isdisabledvarbutton"
                  :class="{ signindisabled: isdisabled || isdisabledvarbutton }"
                >
                  Sign in
                </button>

                <span class="sign__text"
                  >Don't have an account?
                  <a :href="'/admin/signup'">Sign up!</a></span
                >

                <span class="sign__text"
                  ><a :href="'/admin/forgot'">Forgot password?</a></span
                >
              </form>
              <!-- end authorization form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "SigninCompnent",



  data() {
    return {
      admin: {
        email: "",
        password: "",
        remember:true,
      },
      errors: {
        password: "",
      },
      password_invalid: "",
    };
  },
  computed: {
    gradiant() {
      return "signindisabled";
    },
    validateEmail() {
      if (this.admin.email.length < 6 && this.admin.email != "")
        return "email is too short";
    },
    validatePassword() {
      if (this.admin.password.length < 5 && this.admin.password != "")
        return "password is too short";
      else if (this.admin.password.length > 25 && this.admin.password != "")
        return "password is too long";
    },
    isdisabledvarbutton()
    {
     if(this.validateEmail==undefined && (this.validatePassword==undefined?(this.admin.password!=''?true :false) :false))
     return false
     else return true
    },
    isdisabled() {
         return this.admin.email.length == 0 || this.admin.password.length == 0
    },
  },
  methods: {
   async formsubmit(event) {
      axios
        .post("/admin/login", this.admin)
        .then((response) => {
          if (response.data.status == 422)
          {
           this.password_invalid = "password is invalid";
              this.$Message.error('Password is invalid');
          }


          else {
              window.location.href =response.data.next;
            this.$Message.success('You Login Successfull');



          }
        })
        .catch((error) => {
          if (error.response.status == 422) {
            this.errors = error.response.data.errors;
            this.password_invalid = "";
             if(this.errors && this.errors.email)
              this.$Message.error(this.errors.email[0]);
              elseif (this.errors &&this.errors.password)
               this.$Message.error(this.errors.password[0]);
          } else {
            this.errors = error;
            this.password_invalid = "";
          }
        });
    },
    clearError(event) {
      delete this.errors[event.target.name];
      if (event.target.name == "password") this.password_invalid = "";
    },
  },
};
</script>

<style scoped>
.signindisabled {
  background-image: linear-gradient(90deg, #343434 0%, #272727 100%);
  box-shadow: 0 0 0px 0 rgb(255 88 96 / 50%);
  transition: all 1s;
}
</style>
