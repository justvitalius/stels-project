                {foreach from=$aBanners item=oBanner}
                        <a style="font-size:15px;display:block;" href="{router page='banneroid'}redirect/{$oBanner->getBannerId()}/1/"><img src="{$sBannersPath}{$oBanner->getBannerImage()}" /></a>
                {/foreach}
	