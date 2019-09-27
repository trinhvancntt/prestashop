{* 
* @Module Name: Leo Product Search
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright Leotheme
*}

{function name="lps_categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
        {foreach from=$nodes item=node}         
            <a href="#" data-cate-id="{$node.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$node.name}" class="cate-item cate-level-{$node.level_depth}{if isset($selectedCate) && $node.id_category eq $selectedCate} active{/if}" >{if $node.level_depth > 1}{str_repeat('-', $node.level_depth)}{/if}{$node.name}</a>           
            {lps_categories nodes=$node.children depth=$depth+1}           
        {/foreach}
    {/if}
  {/strip}
{/function}

<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive{if $en_search_by_cat} search-by-category{/if}">
	<a id="show_search" href="javascript:void(0)" data-toggle="dropdown" class="float-xs-right popup-title">
	   <i class="icon-magnifier"></i>
	</a>
	<span class="close-overlay"><i class="material-icons">&#xE5CD;</i></span>
	<div class="over-layer"></div>
	<div class="block-form clearfix">
		<form method="get" action="{$link->getPageLink('productsearch', true)|escape:'html':'UTF-8'}" id="leosearchtopbox">
			<input type="hidden" name="fc" value="module" />
			<input type="hidden" name="module" value="leoproductsearch" />
			<input type="hidden" name="controller" value="productsearch" />
			{*
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			*}
			<div class="block_content clearfix">
				<div class="box-leoproductsearch-result">
					<div class="leoproductsearch-result container">
						<div class="leoproductsearch-loading cssload-container">
							<div class="cssload-speeding-wheel"></div>
						</div>
						<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" placeholder="{l s='Search our catalog' d='Shop.Theme.Global'}" />
						<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><i class="icon-magnifier"></i></button> 
					</div>
				</div>
				<div class="list-cate-wrapper"{if !$en_search_by_cat} style="display: none"{/if}>
					<input id="leosearchtop-cate-id" name="cate" value="{if isset($selectedCate)}{$selectedCate}{/if}" type="hidden">
					<a href="#" id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span>{if $selectedCateName != ''}{$selectedCateName}{else}{l s='Search By Category' d='Shop.Theme.Global'}{/if}</span>
					</a>
					<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
						<div class="container">
							<div class="row search-flex">
								<div class="col-lg-4 col-sp-12">
									<h4 class="title_block">{l s='Search By Category' d='Shop.Theme.Global'}</h4>
									<div class="box-cate">
										<a href="#" data-cate-id="" data-cate-name="{l s='All' d='Shop.Theme.Global'}" class="cate-item{if $selectedCate == ''} active{/if}" >{l s='All' d='Shop.Theme.Global'}</a>
										<a href="#" data-cate-id="{$cates.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$cates.name}" class="cate-item cate-level-{$cates.level_depth}{if isset($selectedCate) && $cates.id_category eq $selectedCate} active{/if}" >{if $cates.level_depth > 1}{str_repeat('-', $cates.level_depth)}{/if}{$cates.name}</a>
										{lps_categories nodes=$cates.children}
									</div>
								</div>
								<div class="col-lg-8 hidden-md-down">
									{hook h='displayApSC' sc_key=sc1543053378}
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->
