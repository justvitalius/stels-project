			<div class="block stream">
				<script type="text/javascript" src="{cfg name='path.root.web'}/plugins/company/templates/skin/default/js/block_loader.js"></script>
				<div class="tl"><div class="tr"></div></div>
				<div class="cl"><div class="cr">
					
					<h1>{$aLang.block_stream}</h1>
					
					<ul class="block-nav">						
						<li><strong></strong><a href="#" id="block_stream_topic" onclick="lsBlockStream.toggle(this,'topic_stream'); return false;">{$aLang.block_stream_topics}</a></li>
						<li class="active"><a href="#" id="block_stream_comment" onclick="lsBlockStream.toggle(this,'comment_stream'); return false;">{$aLang.block_stream_comments}</a><em></em></li>
						<li><a href="#" id="block_stream_feedback" onclick="lsBlockStream.toggle(this,'feedback_stream'); return false;">{$aLang.block_stream_feedbacks}</a><em></em></li>
					</ul>					
					
				<div class="block-content">
					{literal}
						<script language="JavaScript" type="text/javascript">
						var lsBlockStream;
						window.addEvent('domready', function() { 
							lsBlockStream=new lsBlockLoaderClass();
						});
						</script>
					{/literal}					
					
					{$sStreamComments}

					</div>
				</div></div>
				<div class="bl"><div class="br"></div></div>
			</div>

