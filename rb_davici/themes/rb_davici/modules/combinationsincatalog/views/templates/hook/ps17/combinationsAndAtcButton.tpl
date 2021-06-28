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
					          class="form-control form-control-select"
					          id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}"
					          data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}"
					          name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]">
					          {foreach from=$group.attributes key=id_attribute item=group_attribute}
					            <option value="{$id_attribute|escape:'htmlall':'UTF-8'}" title="{$group_attribute.name|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name|escape:'htmlall':'UTF-8'}</option>
					          {/foreach}
					        </select>
					      {elseif $group.group_type == 'color'}
					      	{if $combinationsInCatalogConfigData['show_color_as_labels'] == 1}
					      		<select
						          class="form-control form-control-select"
						          id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}"
						          data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}"
						          name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]">
						          {foreach from=$group.attributes key=id_attribute item=group_attribute}
						            <option value="{$id_attribute|escape:'htmlall':'UTF-8'}" title="{$group_attribute.name|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name|escape:'htmlall':'UTF-8'}</option>
						          {/foreach}
					        	</select>
				      		{else}
				      			<ul id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}" class="groupUl">
						          {foreach from=$group.attributes key=id_attribute item=group_attribute}
						            <li class="float-xs-left input-container">
						              <label>
						                <input class="input-color" type="radio" data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}" name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]" value="{$id_attribute|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} checked="checked"{/if}>
						                <span
						                  {if $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code|escape:'htmlall':'UTF-8'}" {/if}
						                  {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture|escape:'htmlall':'UTF-8'})" {/if}
						                ><span class="sr-only">{$group_attribute.name|escape:'htmlall':'UTF-8'}</span></span>
						              </label>
						            </li>
						          {/foreach}
						        </ul>	
					      	{/if}
					      {elseif $group.group_type == 'radio'}
					        <ul id="group_{$id_attribute_group|escape:'htmlall':'UTF-8'}" class="groupUl">
					          {foreach from=$group.attributes key=id_attribute item=group_attribute}
					            <li class="input-container float-xs-left groupLi">
					              <label>
					                <input class="input-radio" type="radio" data-product-attribute="{$id_attribute_group|escape:'htmlall':'UTF-8'}" name="group[{$id_attribute_group|escape:'htmlall':'UTF-8'}]" value="{$id_attribute|escape:'htmlall':'UTF-8'}"{if $group_attribute.selected} checked="checked"{/if}>
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
			          class="form-control form-control-select"
			          id="productCombinations"
			          name="productCombinations">
						{foreach from=$productVariants key=id_attribute_group item=group}
							 <option value="{$id_attribute_group|escape:'htmlall':'UTF-8'}" title="{$group.name|escape:'htmlall':'UTF-8'}"{if $group.default_on == 1} selected="selected"{/if}>{$group.name|escape:'htmlall':'UTF-8'}{if $combinationsInCatalogConfigData['show_price_for_combination'] == 1} ({$group.price|escape:'htmlall':'UTF-8'}){/if}</option>
						{/foreach}
					</select>
				{/if}
			  {/if}
			</div>
		</div>
		{if $combinationsInCatalogConfigData['display_add_to_cart'] == 1}
			<input
				{if $combinationsInCatalogConfigData['show_quantity'] == 0}style="display:none"{/if}
				id="addToCartNumber_{$productID|escape:'htmlall':'UTF-8'}"
				class="input-group form-control addToCartButtonNumber" 
				name="qty"
				placeholder=""
				type="number"
				value="{$quantityWanted|escape:'htmlall':'UTF-8'}" 
				min="{$minimalQuantity|escape:'htmlall':'UTF-8'}"
			/>
			<button 
				data-button-action="add-to-cart"
				class="btn btn-primary add-to-cart"
				style="width:{if $combinationsInCatalogConfigData['show_quantity'] == 1}75{else}100{/if}%; height: 2.75rem; padding:0;{if $combinationsInCatalogConfigData['show_quantity'] == 1}margin-left: 10px;{/if}"
				{if !$allowToShowButton} disabled{/if}
			>
	        {if !$allowToShowButton}{$combinationsInCatalogConfigData['button_out_of_stock'][$idLang]|escape:'htmlall':'UTF-8'}{else}<i class="material-icons shopping-cart">&#xE547;</i>{l s='Add to cart' d='Shop.Theme.Actions' mod='combinationsincatalog'}{/if}
			</button>
		{/if}
		<input id="addToCartToken_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonToken" name="token" value="{$staticToken|escape:'htmlall':'UTF-8'}" placeholder="" type="hidden" />
		<input id="addToCartIdProduct_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonIdProduct" name="id_product" value="{$productID|escape:'htmlall':'UTF-8'}" placeholder="" type="hidden" />
		<input id="addToCartIdCustomization_{$productID|escape:'htmlall':'UTF-8'}" class="addToCartButtonIdCustomization" name="id_customization" value="0" placeholder="" type="hidden" />
	</form>
</div>