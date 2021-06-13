{*
* 2018 Singleton software
*
*  @author Singleton software <info@singleton-software.com>
*  @copyright 2018 Singleton software
*}
<div class="addToCartFormWrapper" data-product-id="{$productID|escape:'htmlall':'UTF-8'}">
	<form action="#" method="post" class="addToCartForm">
		<div class="variantsProductWrapper">
		 	<div class="variants-product">
			  {if $combinationsInCatalogConfigData['combinations_display_type'] == 0}
				  {foreach from=$productVariants key=id_attribute_group item=group}
				  	{if $group.attributes|@count gt 0}
					    <div class="clearfix product-variants-item">
					    	{if $combinationsInCatalogConfigData['show_attributes_labels'] == 1}
					      		<span class="control-label">{$group.name|escape:'htmlall':'UTF-8'}</span>
					      	{/if}
					      {if $group.group_type == 'select'}
					        <select
					        	class="customSelect"
					          id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}"
					          data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}"
					          name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]">
					          {foreach from=$group.attributes key=id_attribute item=group_attribute}
					            <option class="noUniform" value="{$id_attribute|escape:'htmlall':'UTF-8'}" title="{$group_attribute.name|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name|escape:'htmlall':'UTF-8'}</option>
					          {/foreach}
					        </select>
					      {elseif $group.group_type == 'color'}
					      	{if $combinationsInCatalogConfigData['show_color_as_labels'] == 1}
					      		<select
					      			class="customSelect"
						          id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}"
						          data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}"
						          name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]">
						          {foreach from=$group.attributes key=id_attribute item=group_attribute}
						            <option class="noUniform" value="{$id_attribute|escape:'htmlall':'UTF-8'}" title="{$group_attribute.name|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name|escape:'htmlall':'UTF-8'}</option>
						          {/foreach}
					        	</select>
				      		{else}
				      			<ul id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}" class="combinationUl">
						          {foreach from=$group.attributes key=id_attribute item=group_attribute}
						          	{assign var='img_color_exists' value=file_exists($col_img_dir|cat:$id_attribute|cat:'.jpg')}
						            <li class="float-xs-left input-container colorLi"{if $group_attribute.selected} style="border: 1px solid black;"{/if}>
						               <label>
						               	<a class="color_pick" style="background: {if $img_color_exists}url({$img_col_dir|escape:'htmlall':'UTF-8'}{$id_attribute|escape:'htmlall':'UTF-8'}.jpg) center / 20px 20px{else}{$group_attribute.html_color_code|escape:'htmlall':'UTF-8'}{/if};">
											<input type="radio" data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}" name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]" value="{$id_attribute|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} checked="checked"{/if} />
										</a>
						              </label>
						            </li>
						          {/foreach}
						        </ul>	
					      	{/if}
					      {elseif $group.group_type == 'radio'}
					        <ul id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}" class="combinationUl">
					          {foreach from=$group.attributes key=id_attribute item=group_attribute}
					            <li class="combinationRadio input-container float-xs-left">
					              <label>
					                <input data-uniformed="true" type="radio" data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}" name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
					                <span class="radio-label">{$group_attribute.name|escape:'htmlall':'UTF-8'}</span>
					              </label>
					            </li>
					          {/foreach}
					        </ul>
					      {/if}
					    </div>
				    {/if}
				  {/foreach}
			  {else}
			  	<script type="text/javascript">
					//<![CDATA[
						if (typeof productsVariantsJson == "undefined") {
						   var productsVariantsJson = [];
						}
						productsVariantsJson[{$productID|escape:'htmlall':'UTF-8'}] = JSON.parse('{$productsVariantsJson|escape:"javascript":"UTF-8" nofilter}');
					//]]>
				</script>
		  		{if $productVariants|@count gt 0}
				  	<select
			          class="combinationsTogether customSelect productCombinations"
			          name="productCombinations">
						{foreach from=$productVariants key=id_attribute_group item=group}
							 <option value="{$id_attribute_group|escape:'htmlall':'UTF-8'}" title="{$group.name|escape:'htmlall':'UTF-8'}"{if $group.default_on == 1} selected="selected"{/if}>{$group.name|escape:'htmlall':'UTF-8'}{if $combinationsInCatalogConfigData['show_price_for_combination'] == 1} ({$group.price|escape:'htmlall':'UTF-8'}){/if}</option>
						{/foreach}
					</select>
				{/if}
			  {/if}
			</div>
		</div>
		<input id="addToCartToken_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonToken" name="token" value="{$staticToken|escape:'htmlall':'UTF-8'}" placeholder="" type="hidden" />
		<input id="addToCartIdProduct_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonIdProduct" name="id_product" value="{$productID|escape:'htmlall':'UTF-8'}" placeholder="" type="hidden" />
		<input id="addToCartIdCustomization_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonIdCustomization" name="id_customization" value="0" placeholder="" type="hidden" />
	</form>
</div>