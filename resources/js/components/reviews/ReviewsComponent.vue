<template>
<!-- main content -->
<div class="reviews">


<main class="main">
	<div class="container-fluid">
		<div class="row">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Reviews</h2>

					<span class="main__title-stat">{{count}} Total</span>

					<div class="main__title-wrap">
						<!-- filter sort -->
						<div class="filter" id="filter__sort">
							<span class="filter__item-label">Sort by:</span>

							<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Date created">
								<span></span>
							</div>

							<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
								<li @click="SortByDate">Date created</li>
								<li @click="SortByRating">Rating</li>
							</ul>
						</div>
						<!-- end filter sort -->

						<!-- search -->
						<form class="main__title-form">
							<input type="text" placeholder="Key word..." v-model="searchview">
							<button type="button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg>
							</button>
						</form>
						<!-- end search -->
					</div>
				</div>
			</div>
			<!-- end main title -->

			<!-- reviews -->
			<div class="col-12">
				<div class="main__table-wrap">
					<table class="main__table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>AUTHOR</th>
								<th>Movie/Serie</th>
								<th>body</th>
								<th>RATING</th>
								<th>CRAETED DATE</th>
								<th>ACTIONS</th>

							</tr>
						</thead>

						<tbody v-if="filterreview.length>0">
							<tr v-for="(review,index) in filterreview" :key="review.id"  >
								<td>
									<div class="main__table-text">{{++index+2}}</div>
								</td>
								<td>
									<div class="main__table-text">{{review.title}}</div>
								</td>
								<td>
									<div class="main__table-text">{{review.user.name}}</div>
								</td>
                                <td>
									<div class="main__table-text">{{review.part.partable.name}}</div>
								</td>
								<td>
									<div class="main__table-text">{{review.body.substr(0,15)}}...</div>
								</td>

								<td>
									<div class="main__table-text main__table-text--rate">{{review.rating}}</div>
								</td>

								<td>
									<div class="main__table-text">{{ format_date(review.created_at)}}</div>
								</td>
								<td>
									<div class="main__table-btns">
										<a  style="cursor:pointer" @click="modelview(review)"  class="main__table-btn main__table-btn--view ">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/></svg>
										</a>
										<a  style="cursor:pointer" @click="reviewdelete(review)" class="main__table-btn main__table-btn--delete ">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg>
										</a>
									</div>
								</td>
							</tr>




						</tbody>
                        <tbody v-else>
                         <td >
									<div class="main__table-text"><h1 style="color:ff55a5">Sorry...No Result Found</h1></div>
								</td>
                        </tbody>
					</table>
				</div>
			</div>
			<!-- end reviews -->

			<!-- paginator -->

   <paginationreview-component :pagination="reviewsData"
                     @paginate="getResult"
                     :offset="10" :count="count" :filterlenght="filterreview.length">
                     </paginationreview-component>
		<!-- end paginator -->
		</div>
	</div>
</main>
<!-- end main content -->

 <!-- modal view -->
<modalviewreview-component  :reviewview="reviewview" @close="showmodelview = false" :show="showmodelview"></modalviewreview-component>

<!-- <div id="modal-view" class="zoom-anim-dialog modal modal--view mfp-hide "  >
	<div class="reviews__autor">
		<img class="reviews__avatar" :src="'/assets/admin/img/user.svg'" alt="">
		<span class="reviews__name">{{reviewview.title}}</span>
		<span class="reviews__time">{{ format_date(reviewview.created_at)}} by {{reviewview.user.name}}</span>

		<span class="reviews__rating">{{reviewview.rating}}</span>
	</div>
	<p class="reviews__text">{{reviewview.body}}</p>
</div> -->
<!-- end modal view -->

<!-- modal delete -->
<modaldeletereview-component :review="reviewremoveobj" @close="showmodeldelete = false" :show="showmodeldelete" @deleteselectreview="deletereview"></modaldeletereview-component>

<!-- end modal delete -->
</div>
</template>
<script>
 import moment from 'moment'

export default {
    name:'ReviewsComponent',
    props:{
        reviews:Object,
        reviewtotal:Number,
        adminid:Number,
    },
     mounted(){
//   Pusher.logToConsole=true;
    //  this.getreviewsjson();
   Echo.private(`test.${this.adminid}`)
    .listen('TestBrodcastEvent', (e) => {
         console.log(e);
    })
    .error((error) => {
        console.error(error);
    });



  },

    computed:{
        filterreview(){
            var filtering=new RegExp(this.searchview,'i');

            return Object.values(this.reviewsData.data.filter(  (el)=>{

                if( el.title.match(filtering) || el.body.match(filtering) || el.user.name.match(filtering) || (this.format_date(el.created_at)).match(filtering) || el.rating.match(filtering) || el.part.partable.name.match(filtering))
                return el
            }))

        }

    },

    data(){
        return {
            showmodelview:false,
            showmodeldelete:false,
			filterby:'',
            reviewsData:this.reviews,
            ismodalhide:true,
            searchview:'',
            count:this.reviewtotal,
            reviewview:{
                title:'',
                created_at:'2022-04-11 22:21:24',
                rating:10,
                user:{
                    name:'',
                },
                body:'',


            },
            reviewremoveobj:{},



        }
    },


    methods: {
                comparerating( a, b ) {
                if ( a.rating < b.rating ){
                    return 1;
                }
                if ( a.rating < b.rating){
                    return -1;
         }
                return 0;
         },
            compareDates(  a,  b) {
                a=new Date(a.created_at);
                b=new Date(b.created_at);
                if ( a.getTime() < b.getTime() ){
                    return 1;
                }
                if ( a.getTime() < b.getTime()){
                    return -1;
         }
                return 0;
         },

         getreviewsjson()
         {
              axios.get('/dashboard/admin/get/reviews').then((response)=>{
                this.reviewsData=response.data.reviews;
                this.count=response.data.count;
                    //  setInterval(this.getreviewsjson(),3000);



            }).catch(() => {
                    console.log('handle server error from here');
                });
         },


        getResult(page=1)
        {
            axios.get('/api/dashboard/admin/reviews/get?page='+page).then((response)=>{
                this.reviewsData=response.data;
                this.count=response.data.data.length;


            }).catch(() => {
                    console.log('handle server error from here');
                });

        },
      format_date(value){
         if (value) {
           return moment(String(value)).format('YYYY-MM-DD')
          }
      },
	  SortByDate(event)
	  {

                    this.reviewsData.data=this.filterreview.sort(this.compareDates);



            // axios.get('/dashboard/admin/reviews/sortbydate/').then((response)=>{
            //       this.reviewsData=response.data



			// }).catch((error)=>console.log(error))

	  },
	    SortByRating(event)
	  {

          this.reviewsData.data=this.filterreview.sort(this.comparerating);

        //     axios.get('/dashboard/admin/reviews/sortbyrating/').then((response)=>{
		// this.reviewsData=response.data
		// 	}).catch((error)=>console.log(error))

	  },
      modelview(review){
          this.reviewview=review;
          this.showmodelview=true;
          this.showmodeldelete=false;



      },
      reviewdelete(review)
      {

          this.reviewremoveobj=review;
          this.showmodeldelete=true;
           this.showmodelview=false;
      },
      deletereview(){

          axios.post('/dashboard/admin/review/delete/',this.reviewremoveobj).then((response)=>{

              this.reviewsData=response.data.reviews
                  this.count=response.data.count
                 this.$Message.success('Reviews Deleted Successfull');
          }).catch((error)=>{

          }).finally(()=>{
              this.showmodeldelete=false;
          })
      },


   },
   watch:{
       searchview(){
         if(this.searchview=='')
         this.getResult(this.reviewsData.meta==undefined ? this.reviewsData.current_page:this.reviewsData.meta.current_page);

       }
   }

}


</script>





