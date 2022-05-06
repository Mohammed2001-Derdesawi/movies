<template>
<div class="col-12" v-if="paginationdata.last_page!=1">
	<div class="paginator-wrap">
					<span>{{filterlenght}} From {{count}}</span>
    <ul class="paginator">
    <li v-if="paginationdata.current_page > 1" class="paginator__item paginator__item--prev">
        <a href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(paginationdata.current_page - 1)">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z"></path></svg>
            </a>
        </li>
    <li v-for="page in pages" class="paginator__item" :class="{'paginator__item--active': page == paginationdata.current_page}" :key="page">
        <a href="javascript:void(0)" v-on:click.prevent="changePage(page)">{{ page }}</a>
        </li>
    <li v-if="paginationdata.current_page < paginationdata.last_page" class="paginator__item paginator__item--next">
        <a href="javascript:void(0)" aria-label="Next" v-on:click.prevent="changePage(paginationdata.current_page + 1)">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z"></path></svg>
            </a>
        </li>
    </ul>
                </div>
</div>

</template>
<script>
  export default{
      name:'PaginationreviewComponent',
      props: {
      pagination: {
          type: Object,
          required: true
      },
      offset: {
          type: Number,
          default: 10
      },
      count:{
         type: Number,
      },
      filterlenght:{
          type:Number
      }
    },

    data(){
        return {
        pages:this.pagesNumbers(),
        paginationdata:this.pagination,
        }

    },


    methods : {

         pagesNumbers() {

     if (!this.pagination.to)

          return [];

        let from = this.pagination.current_page - this.offset;
        if (from < 1)
          from = 1;

        let to = from + (this.offset * 2);
        if (to >= this.pagination.last_page)
          to = this.pagination.last_page;

        var pagesArray = [];
        for (let page = from; page <= to; page++) {

          pagesArray.push(page)


        }

          return pagesArray
      },
      changePage(page) {
        this.paginationdata.current_page = page;
        this.$emit('paginate',page);
      }
    }
  }
</script>

<style scoped>
.paginator{
    width: auto !important;
}
</style>
