<link rel="stylesheet" href="<?=base_url()?>assets/css/boardpageheader.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/home.css">


<div class="page-body">
	<div class="drag-container">
		<ul class="drag-list">
			<li class="drag-column drag-column-on-hold">
				<span class="drag-column-header">
					<h2>To Do</h2>
					<svg class="drag-header-more" data-target="options1" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
				</span>
					
				<div class="drag-options" id="options1"></div>
				
				<ul class="drag-inner-list" id="1">
					<li class="drag-item"></li>
					<li class="drag-item"></li>
				</ul>
				<button onclick="addItemToListAsStudent('1')">ADD ITEM</button>
			</li>
			<li class="drag-column drag-column-in-progress">
				<span class="drag-column-header">
					<h2>In Progress</h2>
					<svg class="drag-header-more" data-target="options2" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
				</span>
				<div class="drag-options" id="options2"></div>
				<ul class="drag-inner-list" id="2">
					<li class="drag-item"></li>
					<li class="drag-item"></li>
				</ul>
				<button onclick="addItemToListAsStudent('2')">ADD ITEM</button>
			</li>
			<li class="drag-column drag-column-needs-review">
				<span class="drag-column-header">
					<h2>For Review</h2>
					<svg data-target="options3" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
				</span>
				<div class="drag-options" id="options3"></div>
				<ul class="drag-inner-list" id="3">
					<li class="drag-item"></li>
					<li class="drag-item"></li>
				</ul>
				<button onclick="addItemToListAsStudent('3')">ADD ITEM</button>
			</li>
			<li class="drag-column drag-column-approved">
				<span class="drag-column-header">
					<h2>Checked</h2>
					<svg data-target="options4" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
				</span>
				<div class="drag-options" id="options4"></div>
				<ul class="drag-inner-list" id="4">
					<li class="drag-item"></li>
					<li class="drag-item"></li>
				</ul>
				<button onclick="addItemToListAsStudent('4')">ADD ITEM</button>
			</li>
		</ul>
	</div>
</div>
</body>

<script src='<?=base_url()?>assets/js/dragula.js'></script>
<script  src="<?=base_url()?>assets/js/home.js"></script>
<script src="<?=base_url()?>assets/js/additem.js"></script>
