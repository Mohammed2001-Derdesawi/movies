<template>
     <!-- modal view -->
     <Transition v-if="show">
<div  >
    <div class="mfp-bg my-mfp-zoom-in mfp-ready" ></div>
<div  class="mfp-wrap mfp-close-btn-in mfp-auto-cursor my-mfp-zoom-in mfp-ready" tabindex="-1" style="overflow: hidden auto;">
    <div class="mfp-container mfp-inline-holder">
        <div class="mfp-content modal_mine">

    <div id="modal-delete" class="zoom-anim-dialog   modal ">
	<h6 class="modal__title">Review delete</h6>

	<p class="modal__text">Are you sure to permanently delete this review?</p>

	<div class="modal__btns">
		<button class="modal__btn modal__btn--apply" type="button" @click="$emit('deleteselectreview')" >Delete</button>
		<button class="modal__btn modal__btn--dismiss" type="button" @click="$emit('close')">Dismiss</button>
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

export default {
    name:'ModaldeleterreviewComponent',
    props:['review','show'],

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

</style>


