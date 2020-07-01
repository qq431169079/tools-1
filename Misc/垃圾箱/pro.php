
<div class="bg-white py-5">
    <div class="container">
    
      {pboot:sort scode=5}
      	<div class="text-center fs-26 fs-sm-28 text-success wow fadeInDown">[sort:name]</div>
      	<div class="text-center fs-14 fs-sm-16 mb-4 text-secondary wow fadeInUp" data-wow-delay="1s">- [sort:subname] -</div>
      {/pboot:sort}
      
      <div class="row">
       {pboot:list scode=5 num=4 order=date}
        <div class="col-12 col-sm-6 col-lg-3 wow zoomIn" data-wow-delay="[list:i]00ms" data-wow-duration="1s">
              <div class="card">
                  <div class="card-img-150"><a href="[list:link]"><img class="card-img-top" src="[list:ico]" alt="[list:title]"></a></div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="[list:link]">[list:title lencn=12]</a></h5>
                    <p class="card-text">
	                    {pboot:if([list:istop]==1)}
	                		<span class="badge badge-danger">置顶</span>
	                	{/pboot:if}
	                	{pboot:if([list:isrecommend]==1)}
	                		<span class="badge badge-warning">推荐</span>
	                	{/pboot:if}
	                	{pboot:if([list:isheadline]==1)}
	                		<span class="badge badge-info">头条</span>
	                	{/pboot:if}
	                	[list:content drophtml=1 dropblank=1 len=50]
                	</p>
                  </div>
               </div>
         </div>
       
       sudo 
      </div>
	  {pboot:sort scode=5}
			<div class="text-center mt-4 wow fadeInDown" data-wow-delay="1s"><h4><a href="[sort:link]" class="text-secondary fs-14 fs-sm-16">查看更多</a></h4></div>
	  {/pboot:sort}
    </div>
</div>




<!-- 新闻动态 -->

<div class="bg-white py-5">
    <div class="container">
      {pboot:sort scode=2}
      	<div class="text-center fs-26 fs-sm-28 text-warning wow fadeInDown">[sort:name]</div>
      	<div class="text-center fs-14 fs-sm-16 mb-5 text-secondary wow fadeInUp" data-wow-delay="1s">- [sort:subname] -</div>
      {/pboot:sort}
      
      <div class="row">
      	{pboot:list scode=2 num=4 order=date}
            <div class="col-12 col-lg-6 mb-3 wow fadeInUp" data-wow-delay="500ms">
                <div class="media mb-3">
                  <div class="media-body">
                     <h5><a href="[list:link]" title="[list:title]">[list:title lencn=20]</a></h5>
                     <p><a href="[list:link]" class="text-secondary lh-2">[list:content drophtml=1 dropblank=1 lencn=60] [list:date style=Y-m-d]</a></p>
                  </div>
                </div>
            </div>
        {/pboot:list}
      </div>
	  {pboot:sort scode=2}
		<div class="text-center wow fadeInDown" data-wow-delay="1s"><h4><a href="[sort:link]" class="text-secondary fs-14 fs-sm-16">查看更多</a></h4></div>
	  {/pboot:sort}
    </div>
</div>
