<template>
     <!-- modal view -->
     <Transition v-if="show">
<div>
    <div class="mfp-bg my-mfp-zoom-in mfp-ready" ></div>
<div  class="mfp-wrap mfp-close-btn-in mfp-auto-cursor my-mfp-zoom-in mfp-ready" tabindex="-1" style="overflow: hidden auto;">
    <div class="mfp-container mfp-inline-holder">
        <div class="mfp-content modal_mine">

    <div id="modal-view" class="zoom-anim-dialog modal modal--view ">
	<div class="reviews__autor">
		<img class="reviews__avatar" :src="'/assets/admin/img/user.svg'" alt="">
		<span class="reviews__name">{{reviewview.title}}</span>
		<span class="reviews__time">{{ format_date(reviewview.created_at)}} by {{reviewview.user.name}}</span>

		<span class="reviews__rating">{{reviewview.rating}}</span>
	</div>
	<p class="reviews__text">{{reviewview.body}}</p>
    <div class="modal__btns btn_mine">
		<button class="btn_close modal__btn modal__btn--apply" type="button" @click="$emit('close')">Close</button>

	</div>


</div>
    </div>
    </div>
    </div>

<!-- end modal view -->
  </div>
  </Transition>
</template>
<script>
 import moment from 'moment'

export default {
    name:'ModalviewrviewComponent',
    props:['reviewview','show'],
     methods: {
      format_date(value){
         if (value) {
           return moment(String(value)).format('YYYY-MM-DD')
          }
      },
     }
}
</script>

<style scoped>
/* .modal_mine{

transform: scale(1);
transition: opacity 0.2s ease;
}
.modal_content{

    transform: scale(1.1);
 transition: all 0.3s ease;} */
.v-enter-active,
.v-leave-active {
  transition: opacity 0.4s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
.btn_mine{
    display: flex;
    justify-content: right;
    align-items: center;
}
.btn_close{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30px;
  margin: 10px;
  width: 60px;
  border-radius: 4px;
  opacity: 0.85;
  font-size: 14px;
  color: #fff;

}
.reviews__text{
    line-height: 31px !important;
    word-wrap: anywhere !important;
}

</style>


