{*
* 2018 Singleton software
*
*  @author Singleton software <info@singleton-software.com>
*  @copyright 2018 Singleton software
*}
<div class="variants-product">
	{if $productVariants|@count gt 0}
	  	<select
          class="combinationsTogether customSelect productCombinations"
          name="productCombinations">
			{foreach from=$productVariants key=id_attribute_group item=group}
				 <option value="{$id_attribute_group|escape:'htmlall':'UTF-8'}" title="{$group.name|escape:'htmlall':'UTF-8'}"{if $group.default_on == 1} selected="selected"{/if}>{$group.name|escape:'htmlall':'UTF-8'}{if $combinationsInCatalogConfigData['show_price_for_combination'] == 1} ({$group.price|escape:'htmlall':'UTF-8'}){/if}</option>
			{/foreach}
		</select>
	{/if}
</div>