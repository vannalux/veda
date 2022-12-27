<?php



$imSettings['blog'] = array(	'description' => '',
	'root' => 'https://veda.netxi.in/blog/',
	'home_posts_number' => 10,
	'card_type' => 'topcoverbottomcontents',
	'show_card_title' => true,
	'show_card_category' => true,
	'show_card_description' => true,
	'show_card_author' => false,
	'show_card_date' => false,
	'show_card_button' => true,
	'article_type' => 'titlecovercontents',
	'cover_adapted' => true,
	'cover_height' => 350,
	'amp_header' => "",
	'amp_css' => "\t\t\tbody { font: normal normal normal 12pt 'Arial'; color: rgba(0, 0, 0, 1); background-color: transparent; text-decoration: none; text-align: left; }\n\t\t\t.post-title { padding-top: 2px; padding-bottom: 2px; margin: 5px 0; font: normal normal normal 26pt 'PT Sans Narrow'; color: rgba(236, 17, 132, 1); background-color: transparent; text-decoration: none; text-align: left;  border-width: 1px; border-style: solid; border-color: transparent transparent transparent transparent; margin-left: 6px; margin-right: 6px; }\n\t\t\t.post-details { padding-top: 2px; padding-bottom: 2px; font: normal normal normal 11pt 'Arial'; color: rgba(12, 52, 61, 1); background-color: transparent; text-decoration: none; text-align: left;  border-width: 1px; border-style: solid; border-color: transparent transparent transparent transparent }\n\t\t\t.post-details a { color: rgba(12, 52, 61, 1); }\n\t\t\t.post-body { margin-bottom: 10px; }\n.imHeading1 {font: normal normal bold 24pt 'PT Sans Narrow'; color: rgba(241, 90, 49, 1); text-decoration: none; text-align: left;  line-height: 48px; margin: 15px 0px 15px 0px;}\n.imHeading2 {font: normal normal bold 20pt 'PT Sans Narrow'; color: rgba(241, 90, 49, 1); text-decoration: none; text-align: left;  line-height: 40px; margin: 0px 0px 5px 0px;}\n.imHeading3 {font: normal normal bold 13pt 'PT Sans Narrow'; color: rgba(241, 90, 49, 1); text-decoration: none; text-align: left;  line-height: 26px; margin: 13px 0px 13px 0px;}\n.imHeading4 {font: normal normal bold 11pt 'Arial'; color: rgba(0, 0, 0, 1); text-decoration: none; text-align: left;  line-height: 22px; margin: 15px 0px 15px 0px;}\n.imHeading5 {font: normal normal bold 9.17pt 'Arial'; color: rgba(54, 71, 79, 1); text-decoration: none; text-align: left;  line-height: 18,33333px; margin: 15px 0px 15px 0px;}\n.imHeading6 {font: normal normal bold 7.33pt 'Arial'; color: rgba(54, 71, 79, 1); text-decoration: none; text-align: left;  line-height: 14,66667px; margin: 17px 0px 17px 0px;}\n\t\t\t.canonical-post-button { display: block; text-decoration: none; text-align: center; cursor: pointer; font: inherit; padding: 10px 15px 10px 15px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1);  background-color: rgba(241, 90, 49, 1); color: rgba(255, 255, 255, 1); border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; box-sizing: content-box; }\n\t\t\tamp-carousel, amp-video, amp-audio, amp-youtube { margin: 10px auto; }\n@media (min-width: 1150.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(255, 255, 255, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(255, 255, 255, 1); max-width: 1150px; padding: 0px 5px 0px 5px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(255, 255, 255, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(255, 255, 255, 1); max-width: 720px; padding: 0px 5px 0px 5px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t\t\t\tbody { background-image: none; background-color: rgba(255, 255, 255, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(255, 255, 255, 1); max-width: 480px; padding: 0px 5px 0px 5px; margin: 0 auto 0 auto; }\n\t\n}\n@media (max-width: 479.9px)  {\n\t\t\t\tbody { background-image: none; background-color: rgba(255, 255, 255, 1); padding-top: 0px; padding-bottom: 0px; }\n\t\t\t\t.post-content { background-image: none; background-color: rgba(255, 255, 255, 1); padding: 0px 5px 0px 5px; margin: 0 auto 0 auto; }\n\t\n}\n",
	'amp_webfonts_links' => array("<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700,regular&display=swap\" />"),
	'file_prefix' => 'x5_',
	'comments_source' => 'wsx5',
	'email' => '',
	'moderate' => false,
	'sendmode' => 'file',
	'folder' => '',
	'comment_type' => 'both',
	'comments_order' => 'asc',
	'comments_on_multiple_columns' => true,
	'abuse' => false,
	'captcha' => false,
	'highlight_mode' => 'card',
	'highlighted_count' => 1,
	'highlighted_card_height' => 400,
	'addThis' => '<!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script src="//s7.addthis.com/js/300/addthis_widget.js#username="></script><!-- AddThis Button END --><script>(function waitForAddThis() {if (typeof addthis == "undefined" || typeof $ == "undefined") { setTimeout(waitForAddThis, 100); return; }addthis.addEventListener("addthis.ready", function (evt) { $("#imContent").change(); }) })()</script>',
	'categories' => Array('Design', 'Exposition'),
	'posts' => Array(),
	'posts_cat' => Array(),
	'posts_author' => Array(),
	'posts_month' => Array(),
	'posts_slug' => Array()
)
;

// Post titled "Qui ratione voluptatem sequi nesciunt"
$imSettings['blog']['posts']['000000009'] = array(
	'id' => '000000009',
	'rel_url' => '?qui-ratione-voluptatem-sequi-nesciunt',
	'title' => 'Qui ratione voluptatem sequi nesciunt',
	'tag_title' => 'Qui ratione voluptatem sequi nesciunt',
	'title_heading_tag' => 'h1',
	'slug' => 'qui-ratione-voluptatem-sequi-nesciunt',
	'author' => 'Алекс',
	'category' => 'Design',
	'cardCover' => 'blog/files/pixabay-1868502_thumb.webp',
	'cover' => 'blog/files/pixabay-1868502.webp',
	'summary' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
	'tag_description' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
	'body' => "<div id=\"imBlogPost_000000009\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTACenter\"><img class=\"image-5\" src=\"../images/pixabay-416060.webp\"  title=\"\" alt=\"\" width=\"880\" height=\"495\" /><br></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div><div data-line-height=\"1.5\" class=\"lh1-5\"><img class=\"image-6 fleft\" src=\"../images/pixabay-2181994.webp\"  title=\"\" alt=\"\" width=\"440\" height=\"293\" /><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\"><span class=\"fs12lh1-5\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</span><br></div></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div><div data-line-height=\"1.5\" class=\"lh1-5\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span class=\"fs12lh1-5\"> </span><span class=\"fs12lh1-5\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></div></div><div data-line-height=\"1.5\" class=\"lh1-5 imTARight\"><img class=\"image-8 fright\" src=\"../images/pixabay-1868502.webp\"  title=\"\" alt=\"\" width=\"440\" height=\"293\" /></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </span><span class=\"fs12lh1-5\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span><br></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span><span class=\"fs12lh1-5\">?</span><br></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'datePublished' => '2019-02-14T10:54:00',
			'dateModified' => '2019-02-14T10:54:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Алекс'
			),
			'headline' => 'Qui ratione voluptatem sequi nesciunt',
			'description' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
			'mainEntityOfPage' => 'https://veda.netxi.in/blog/?qui-ratione-voluptatem-sequi-nesciunt',
			'image' => array(
				'https://veda.netxi.in/images\\pixabay-416060.webp',
				'https://veda.netxi.in/images\\pixabay-2181994.webp',
				'https://veda.netxi.in/images\\pixabay-1868502.webp',
				'https://veda.netxi.in/images\\11ww.webp',
				'https://veda.netxi.in/images\\22ww.webp',
				'https://veda.netxi.in/images\\23.webp',
				'https://veda.netxi.in/images\\33ww.webp',
				'https://veda.netxi.in/images\\44ww.webp',
				'https://veda.netxi.in/blog\\files\\pixabay-1868502.webp'
			),
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'февраль 2019',
					'item' => 'https://veda.netxi.in/blog/?month=201902',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Qui ratione voluptatem sequi nesciunt',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Design',
					'item' => 'https://veda.netxi.in/blog/?category=Design',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Qui ratione voluptatem sequi nesciunt',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Алекс',
					'item' => 'https://veda.netxi.in/blog/?author=Алекс',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Qui ratione voluptatem sequi nesciunt',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000009\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTACenter\"><amp-img class=\"image-5\" src=\"../../images/pixabay-416060.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"880\" height=\"495\"></amp-img><br></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div><div data-line-height=\"1.5\" class=\"lh1-5\"><amp-img class=\"image-6 fleft\" src=\"../../images/pixabay-2181994.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"440\" height=\"293\"></amp-img><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\"><span class=\"fs12lh1-5\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</span><br></div></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div><div data-line-height=\"1.5\" class=\"lh1-5\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span class=\"fs12lh1-5\"> </span><span class=\"fs12lh1-5\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></div></div><div data-line-height=\"1.5\" class=\"lh1-5 imTARight\"><amp-img class=\"image-8 fright\" src=\"../../images/pixabay-1868502.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"440\" height=\"293\"></amp-img></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </span><span class=\"fs12lh1-5\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span><br></div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mb1\"><span class=\"fs12lh1-5\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span><span class=\"fs12lh1-5\">?</span><br></div></div>",
	'body_css' => "#imBlogPost_000000009 div { line-height: 24px; }\n#imBlogPost_000000009 .imHeading1 { line-height: 48px; }\n#imBlogPost_000000009 .imHeading2 { line-height: 40px; }\n#imBlogPost_000000009 .imHeading3 { line-height: 26px; }\n#imBlogPost_000000009 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000009 .imHeading5 { line-height: 18px; }\n#imBlogPost_000000009 .imHeading6 { line-height: 15px; }\n#imBlogPost_000000009 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000009 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000009 ul ul ul { list-style: circle; }\n#imBlogPost_000000009 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000009 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000009 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000009 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000009 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000009 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000009 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000009 p { margin: 0; padding: 0; }\n#imBlogPost_000000009 .inline-block { display: inline-block; }\n#imBlogPost_000000009 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000009 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000009 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000009 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000009 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000009 img.fleft { margin-right: 15px; }\n#imBlogPost_000000009 img.fright { margin-left: 15px; }\n#imBlogPost_000000009 .imTALeft { text-align: left; }\n#imBlogPost_000000009 .imTARight { text-align: right; }\n#imBlogPost_000000009 .imTACenter { text-align: center; }\n#imBlogPost_000000009 .imTAJustify { text-align: justify; }\n#imBlogPost_000000009 .imUl { text-decoration: underline; }\n#imBlogPost_000000009 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000009 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000009 .imVt { vertical-align: top; }\n#imBlogPost_000000009 .imVc { vertical-align: middle; }\n#imBlogPost_000000009 .imVb { vertical-align: bottom; }\n#imBlogPost_000000009 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000009 .lh1-5 { line-height: 1.5; }\n#imBlogPost_000000009 .mb1 { margin-bottom: 12px; }\n#imBlogPost_000000009 .mt1 { margin-top: 12px; }\n#imBlogPost_000000009 .fs12lh1-5 { vertical-align: baseline; font-size: 12pt; line-height: 24px; }\n@media (min-width: 1150.0px) {\n\t#imBlogPost_000000009 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t#imBlogPost_000000009 .image-6 { width: 100%; max-width: 440px; height: auto; }\n\t#imBlogPost_000000009 .image-8 { width: 100%; max-width: 440px; height: auto; }\n\t\n}\n\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t#imBlogPost_000000009 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t#imBlogPost_000000009 .image-6 { width: 100%; max-width: 440px; height: auto; }\n\t#imBlogPost_000000009 .image-8 { width: 100%; max-width: 440px; height: auto; }\n\t\n}\n\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t#imBlogPost_000000009 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t#imBlogPost_000000009 .image-6 { width: 100%; max-width: 440px; height: auto; }\n\t#imBlogPost_000000009 .image-8 { width: 100%; max-width: 440px; height: auto; }\n\t\n}\n\n@media (max-width: 479.9px)  {\n\t#imBlogPost_000000009 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t#imBlogPost_000000009 .image-6 { width: 100%; max-width: 440px; height: auto; }\n\t#imBlogPost_000000009 .image-8 { width: 100%; max-width: 440px; height: auto; }\n\t\n}\n\n",
	'timestamp' => '14/2/2019',
	'utc_time' => 1550141640,
	'month' => '201902',
	'comments' => true,
	'sources' => array(),
	'slideshow' => '<div style="margin: 5px auto;"><div id="ss_000000009" style="max-width: 880px; margin: 0 auto;"></div></div><script>function loadpostgallery000000009() {$(\'#ss_000000009\').empty().width(\'auto\');var settings = { target: \'#ss_000000009\', media: [{ url: \'../images/11ww.webp\', width: 880, height: 587, autoplayTime: 2000, effect: \'scramble\'},{ url: \'../images/22ww.webp\', width: 880, height: 587, autoplayTime: 2000, effect: \'scramble\'},{ url: \'../images/23.webp\', width: 880, height: 660, autoplayTime: 2000, effect: \'scramble\'},{ url: \'../images/33ww.webp\', width: 880, height: 587, autoplayTime: 2000, effect: \'scramble\'},{ url: \'../images/44ww.webp\', width: 880, height: 587, autoplayTime: 2000, effect: \'scramble\'}],width: 880,height: 660, backgroundColor: \'transparent\', resFolder: \'../res\', autoplay: true,slideshow: { active: true, buttonPrev: { url: x5engine.settings.currentPath + \'blog/files/b17_l.webp\', x: 4, y: 0 }, buttonNext: { url: x5engine.settings.currentPath + \'blog/files/b17_r.webp\', x: 4, y: 0 }, nextPrevMode: \'hover\'}};var currentBp = x5engine.responsive.getCurrentBreakPoint();if (currentBp.end == 1150) {settings.width = 880;settings.height = 800;}if (currentBp.end == 720) {settings.width = 450;settings.height = 409;}if (currentBp.end == 480) {settings.width = 470;settings.height = 427;}if (currentBp.end == 0) {settings.width = Math.min(880, $(\'#ss_000000009\').width());settings.height = settings.width / 880 * 660;}x5engine.gallery(settings);$(\'#imContent\').off(\'breakpointChangedOrFluid\', loadpostgallery000000009).on(\'breakpointChangedOrFluid\', loadpostgallery000000009);}x5engine.boot.push(loadpostgallery000000009);</script>',
	'slideshow_amp' => '<amp-carousel layout="fixed-height" height="800" type="slides" autoplay loop><amp-img src="../../images/11ww.webp" layout="responsive" width="1200" height="800"></amp-img><amp-img src="../../images/22ww.webp" layout="responsive" width="1200" height="800"></amp-img><amp-img src="../../images/23.webp" layout="responsive" width="1066" height="800"></amp-img><amp-img src="../../images/33ww.webp" layout="responsive" width="1200" height="800"></amp-img><amp-img src="../../images/44ww.webp" layout="responsive" width="1200" height="800"></amp-img></amp-carousel>',
	'tag' => array(),
	'opengraph' => array(
		'url' => 'https://veda.netxi.in/blog/?qui-ratione-voluptatem-sequi-nesciunt',
		'type' => 'article',
		'title' => 'Qui ratione voluptatem sequi nesciunt',
		'description' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
		'keywords' => '',
		'updated_time' => '1550141640',
		'images' => array('https://veda.netxi.in/blog/files/pixabay-1868502_thumb.webp','https://veda.netxi.in/blog/files/pixabay-1868502.webp','https://veda.netxi.in/images/pixabay-416060.webp','https://veda.netxi.in/images/pixabay-2181994.webp','https://veda.netxi.in/images/pixabay-1868502.webp'),
		'postimage' => 'images/pixabay-416060.webp'
	)
);$imSettings['blog']['posts_slug']['qui-ratione-voluptatem-sequi-nesciunt'] = '000000009';

// Post titled "At vero eos et accusamus et iusto"
$imSettings['blog']['posts']['000000008'] = array(
	'id' => '000000008',
	'rel_url' => '?at-vero-eos-et-accusamus-et-iusto',
	'title' => 'At vero eos et accusamus et iusto',
	'tag_title' => 'At vero eos et accusamus et iusto',
	'title_heading_tag' => 'h1',
	'slug' => 'at-vero-eos-et-accusamus-et-iusto',
	'author' => '',
	'category' => 'Exposition',
	'cardCover' => 'blog/files/pixabay-1834784_thumb.webp',
	'cover' => 'blog/files/pixabay-1834784.webp',
	'summary' => '<b>45MIN - VEGETARIAN</b><br />Et harum quidem rerum facilis est et expedita distinctio.<br />',
	'tag_description' => '<b>45MIN - VEGETARIAN</b>
Et harum quidem rerum facilis est et expedita distinctio.
',
	'body' => "<div id=\"imBlogPost_000000008\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </div><div data-line-height=\"1.5\" class=\"lh1-5\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1\"><a href=\"https://www.youtube.com/watch?v=qRz4rZq1tkc\" onclick=\"return x5engine.imShowBox({ media:[{type: 'youtube', url: 'https://www.youtube.com/watch?v=qRz4rZq1tkc', width: 1920, height: 1080, text: '', 'showVideoControls': true }]}, 0, this);\" class=\"imCssLink inline-block\"><img class=\"image-5\" src=\"../images/pixabay-447484.webp\"  title=\"\" alt=\"\" width=\"880\" height=\"586\" /></a><br></div></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'datePublished' => '2019-02-13T14:50:00',
			'dateModified' => '2019-02-13T14:50:00',
			'author' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'headline' => 'At vero eos et accusamus et iusto',
			'description' => '<b>45MIN - VEGETARIAN</b>
Et harum quidem rerum facilis est et expedita distinctio.
',
			'mainEntityOfPage' => 'https://veda.netxi.in/blog/?at-vero-eos-et-accusamus-et-iusto',
			'image' => array(
				'https://veda.netxi.in/images\\pixabay-447484.webp',
				'https://veda.netxi.in/blog\\files\\pixabay-1834784.webp'
			),
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'февраль 2019',
					'item' => 'https://veda.netxi.in/blog/?month=201902',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'At vero eos et accusamus et iusto',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Exposition',
					'item' => 'https://veda.netxi.in/blog/?category=Exposition',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'At vero eos et accusamus et iusto',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000008\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </div><div data-line-height=\"1.5\" class=\"lh1-5\"><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1 mb1\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</div><div data-line-height=\"1.5\" class=\"lh1-5 imTAJustify mt1\"><a href=\"https://www.youtube.com/watch?v=qRz4rZq1tkc\" class=\"imCssLink\"><amp-img class=\"image-5\" src=\"../../images/pixabay-447484.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"880\" height=\"586\"></amp-img></a><br></div></div></div>",
	'body_css' => "#imBlogPost_000000008 div { line-height: 24px; }\n#imBlogPost_000000008 .imHeading1 { line-height: 48px; }\n#imBlogPost_000000008 .imHeading2 { line-height: 40px; }\n#imBlogPost_000000008 .imHeading3 { line-height: 26px; }\n#imBlogPost_000000008 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000008 .imHeading5 { line-height: 18px; }\n#imBlogPost_000000008 .imHeading6 { line-height: 15px; }\n#imBlogPost_000000008 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000008 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000008 ul ul ul { list-style: circle; }\n#imBlogPost_000000008 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000008 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000008 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000008 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000008 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000008 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000008 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000008 p { margin: 0; padding: 0; }\n#imBlogPost_000000008 .inline-block { display: inline-block; }\n#imBlogPost_000000008 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000008 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000008 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000008 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000008 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000008 img.fleft { margin-right: 15px; }\n#imBlogPost_000000008 img.fright { margin-left: 15px; }\n#imBlogPost_000000008 .imTALeft { text-align: left; }\n#imBlogPost_000000008 .imTARight { text-align: right; }\n#imBlogPost_000000008 .imTACenter { text-align: center; }\n#imBlogPost_000000008 .imTAJustify { text-align: justify; }\n#imBlogPost_000000008 .imUl { text-decoration: underline; }\n#imBlogPost_000000008 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000008 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000008 .imVt { vertical-align: top; }\n#imBlogPost_000000008 .imVc { vertical-align: middle; }\n#imBlogPost_000000008 .imVb { vertical-align: bottom; }\n#imBlogPost_000000008 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000008 .lh1-5 { line-height: 1.5; }\n#imBlogPost_000000008 .mt1 { margin-top: 12px; }\n#imBlogPost_000000008 .mb1 { margin-bottom: 12px; }\n@media (min-width: 1150.0px) {\n\t#imBlogPost_000000008 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t\n}\n\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t#imBlogPost_000000008 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t\n}\n\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t#imBlogPost_000000008 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t\n}\n\n@media (max-width: 479.9px)  {\n\t#imBlogPost_000000008 .image-5 { width: 100%; max-width: 880px; height: auto; }\n\t\n}\n\n",
	'timestamp' => '13/2/2019',
	'utc_time' => 1550069400,
	'month' => '201902',
	'comments' => true,
	'sources' => array(),
	'tag' => array(),
	'opengraph' => array(
		'url' => 'https://veda.netxi.in/blog/?at-vero-eos-et-accusamus-et-iusto',
		'type' => 'article',
		'title' => 'At vero eos et accusamus et iusto',
		'description' => '<b>45MIN - VEGETARIAN</b> Et harum quidem rerum facilis est et expedita distinctio. ',
		'keywords' => '',
		'updated_time' => '1550069400',
		'images' => array('https://veda.netxi.in/blog/files/pixabay-1834784_thumb.webp','https://veda.netxi.in/blog/files/pixabay-1834784.webp','https://veda.netxi.in/images/pixabay-447484.webp'),
		'postimage' => 'images/pixabay-447484.webp'
	)
);$imSettings['blog']['posts_slug']['at-vero-eos-et-accusamus-et-iusto'] = '000000008';

// Post titled "Ullamco laboris nisi ut aliquip"
$imSettings['blog']['posts']['000000007'] = array(
	'id' => '000000007',
	'rel_url' => '?ullamco-laboris-nisi-ut-aliquip',
	'title' => 'Ullamco laboris nisi ut aliquip',
	'tag_title' => 'Ullamco laboris nisi ut aliquip',
	'title_heading_tag' => 'h1',
	'slug' => 'ullamco-laboris-nisi-ut-aliquip',
	'author' => '',
	'category' => 'Exposition',
	'cardCover' => 'blog/files/pixabay-1835923_thumb.webp',
	'cover' => 'blog/files/pixabay-1835923.webp',
	'summary' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
	'tag_description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
	'body' => "<div id=\"imBlogPost_000000007\"><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <span class=\"fs12lh1-5\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div><div><br></div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <div><br></div><div><div class=\"imTARight\"><img class=\"image-3\" src=\"../images/pixabay-1483479.webp\"  title=\"\" alt=\"\" width=\"879\" height=\"586\" /><br></div><div><br></div><div>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </div><div><br></div><div class=\"imTACenter\"><img class=\"image-4\" src=\"../images/pixabay-1853552.webp\"  title=\"\" alt=\"\" width=\"878\" height=\"583\" /><br></div><div><br></div><div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'datePublished' => '2019-02-13T14:46:00',
			'dateModified' => '2019-02-13T14:46:00',
			'author' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'headline' => 'Ullamco laboris nisi ut aliquip',
			'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
			'mainEntityOfPage' => 'https://veda.netxi.in/blog/?ullamco-laboris-nisi-ut-aliquip',
			'image' => array(
				'https://veda.netxi.in/images\\pixabay-1483479.webp',
				'https://veda.netxi.in/images\\pixabay-1853552.webp',
				'https://veda.netxi.in/blog\\files\\pixabay-1835923.webp'
			),
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'февраль 2019',
					'item' => 'https://veda.netxi.in/blog/?month=201902',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Ullamco laboris nisi ut aliquip',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Exposition',
					'item' => 'https://veda.netxi.in/blog/?category=Exposition',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Ullamco laboris nisi ut aliquip',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000007\"><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <span class=\"fs12lh1-5\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div><div><br></div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <div><br></div><div><div class=\"imTARight\"><amp-img class=\"image-3\" src=\"../../images/pixabay-1483479.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"879\" height=\"586\"></amp-img><br></div><div><br></div><div>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </div><div><br></div><div class=\"imTACenter\"><amp-img class=\"image-4\" src=\"../../images/pixabay-1853552.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"878\" height=\"583\"></amp-img><br></div><div><br></div><div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div></div></div>",
	'body_css' => "#imBlogPost_000000007 div { line-height: 24px; }\n#imBlogPost_000000007 .imHeading1 { line-height: 48px; }\n#imBlogPost_000000007 .imHeading2 { line-height: 40px; }\n#imBlogPost_000000007 .imHeading3 { line-height: 26px; }\n#imBlogPost_000000007 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000007 .imHeading5 { line-height: 18px; }\n#imBlogPost_000000007 .imHeading6 { line-height: 15px; }\n#imBlogPost_000000007 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000007 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000007 ul ul ul { list-style: circle; }\n#imBlogPost_000000007 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000007 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000007 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000007 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000007 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000007 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000007 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000007 p { margin: 0; padding: 0; }\n#imBlogPost_000000007 .inline-block { display: inline-block; }\n#imBlogPost_000000007 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000007 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000007 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000007 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000007 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000007 img.fleft { margin-right: 15px; }\n#imBlogPost_000000007 img.fright { margin-left: 15px; }\n#imBlogPost_000000007 .imTALeft { text-align: left; }\n#imBlogPost_000000007 .imTARight { text-align: right; }\n#imBlogPost_000000007 .imTACenter { text-align: center; }\n#imBlogPost_000000007 .imTAJustify { text-align: justify; }\n#imBlogPost_000000007 .imUl { text-decoration: underline; }\n#imBlogPost_000000007 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000007 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000007 .imVt { vertical-align: top; }\n#imBlogPost_000000007 .imVc { vertical-align: middle; }\n#imBlogPost_000000007 .imVb { vertical-align: bottom; }\n#imBlogPost_000000007 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000007 .fs12lh1-5 { vertical-align: baseline; font-size: 12pt; line-height: 24px; }\n@media (min-width: 1150.0px) {\n\t#imBlogPost_000000007 .image-3 { width: 100%; max-width: 879px; height: auto; }\n\t#imBlogPost_000000007 .image-4 { width: 100%; max-width: 878px; height: auto; }\n\t\n}\n\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t#imBlogPost_000000007 .image-3 { width: 100%; max-width: 879px; height: auto; }\n\t#imBlogPost_000000007 .image-4 { width: 100%; max-width: 878px; height: auto; }\n\t\n}\n\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t#imBlogPost_000000007 .image-3 { width: 100%; max-width: 879px; height: auto; }\n\t#imBlogPost_000000007 .image-4 { width: 100%; max-width: 878px; height: auto; }\n\t\n}\n\n@media (max-width: 479.9px)  {\n\t#imBlogPost_000000007 .image-3 { width: 100%; max-width: 879px; height: auto; }\n\t#imBlogPost_000000007 .image-4 { width: 100%; max-width: 878px; height: auto; }\n\t\n}\n\n",
	'timestamp' => '13/2/2019',
	'utc_time' => 1550069160,
	'month' => '201902',
	'comments' => true,
	'sources' => array(),
	'tag' => array(),
	'opengraph' => array(
		'url' => 'https://veda.netxi.in/blog/?ullamco-laboris-nisi-ut-aliquip',
		'type' => 'article',
		'title' => 'Ullamco laboris nisi ut aliquip',
		'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
		'keywords' => '',
		'updated_time' => '1550069160',
		'images' => array('https://veda.netxi.in/blog/files/pixabay-1835923_thumb.webp','https://veda.netxi.in/blog/files/pixabay-1835923.webp','https://veda.netxi.in/images/pixabay-1483479.webp','https://veda.netxi.in/images/pixabay-1853552.webp'),
		'postimage' => 'images/pixabay-1483479.webp'
	)
);$imSettings['blog']['posts_slug']['ullamco-laboris-nisi-ut-aliquip'] = '000000007';

// Post titled "Lorem Ipsum Dolor"
$imSettings['blog']['posts']['000000006'] = array(
	'id' => '000000006',
	'rel_url' => '?lorem-ipsum-dolor',
	'title' => 'Lorem Ipsum Dolor',
	'tag_title' => 'Lorem Ipsum Dolor',
	'title_heading_tag' => 'h1',
	'slug' => 'lorem-ipsum-dolor',
	'author' => '',
	'category' => 'Design',
	'cardCover' => 'blog/files/pixabay-1840011_thumb.webp',
	'cover' => 'blog/files/pixabay-1840011.webp',
	'summary' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
	'tag_description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
	'body' => "<div id=\"imBlogPost_000000006\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<div><div><br><div><img class=\"image-3 fleft\" src=\"../images/pixabay-508272.webp\"  title=\"\" alt=\"\" width=\"262\" height=\"395\" /></div><div><span class=\"fs12lh1-5\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </span><span class=\"fs12lh1-5\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span></div></div></div><div><span class=\"fs12lh1-5\"><br></span></div><div><span class=\"fs12lh1-5\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. &nbsp;</span><span class=\"fs12lh1-5\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</span></div><div><br></div><div><span class=\"fs12lh1-5\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'datePublished' => '2019-02-13T14:44:00',
			'dateModified' => '2019-02-13T14:44:00',
			'author' => array(
				'@type' => 'Organization',
				'name' => 'Articles'
			),
			'headline' => 'Lorem Ipsum Dolor',
			'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
			'mainEntityOfPage' => 'https://veda.netxi.in/blog/?lorem-ipsum-dolor',
			'image' => array(
				'https://veda.netxi.in/images\\pixabay-508272.webp',
				'https://veda.netxi.in/blog\\files\\pixabay-1840011.webp'
			),
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'февраль 2019',
					'item' => 'https://veda.netxi.in/blog/?month=201902',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Lorem Ipsum Dolor',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'Articles',
					'item' => 'https://veda.netxi.in/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Design',
					'item' => 'https://veda.netxi.in/blog/?category=Design',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Lorem Ipsum Dolor',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'body_amp' => "<div id=\"imBlogPost_000000006\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<div><div><br><div><amp-img class=\"image-3 fleft\" src=\"../../images/pixabay-508272.webp\"  title=\"\" alt=\"\" layout=\"responsive\" width=\"262\" height=\"395\"></amp-img></div><div><span class=\"fs12lh1-5\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </span><span class=\"fs12lh1-5\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span></div></div></div><div><span class=\"fs12lh1-5\"><br></span></div><div><span class=\"fs12lh1-5\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. &nbsp;</span><span class=\"fs12lh1-5\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</span></div><div><br></div><div><span class=\"fs12lh1-5\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span></div></div>",
	'body_css' => "#imBlogPost_000000006 div { line-height: 24px; }\n#imBlogPost_000000006 .imHeading1 { line-height: 48px; }\n#imBlogPost_000000006 .imHeading2 { line-height: 40px; }\n#imBlogPost_000000006 .imHeading3 { line-height: 26px; }\n#imBlogPost_000000006 .imHeading4 { line-height: 22px; }\n#imBlogPost_000000006 .imHeading5 { line-height: 18px; }\n#imBlogPost_000000006 .imHeading6 { line-height: 15px; }\n#imBlogPost_000000006 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }\n#imBlogPost_000000006 ul ul { list-style: square; padding: 0 0 0 20px; }\n#imBlogPost_000000006 ul ul ul { list-style: circle; }\n#imBlogPost_000000006 ul li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000006 ol { list-style: decimal; margin: 0; padding: 0; }\n#imBlogPost_000000006 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }\n#imBlogPost_000000006 ol li { margin: 0 0 0 40px; padding: 0px; }\n#imBlogPost_000000006 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }\n#imBlogPost_000000006 table { border: none; padding: 0; border-collapse: collapse; }\n#imBlogPost_000000006 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }\n#imBlogPost_000000006 p { margin: 0; padding: 0; }\n#imBlogPost_000000006 .inline-block { display: inline-block; }\n#imBlogPost_000000006 sup { vertical-align: super; font-size: smaller; }\n#imBlogPost_000000006 sub { vertical-align: sub; font-size: smaller; }\n#imBlogPost_000000006 img { border: none; margin: 0; vertical-align: text-bottom;}\n#imBlogPost_000000006 .fleft { float: left; vertical-align: baseline;}\n#imBlogPost_000000006 .fright { float: right; vertical-align: baseline;}\n#imBlogPost_000000006 img.fleft { margin-right: 15px; }\n#imBlogPost_000000006 img.fright { margin-left: 15px; }\n#imBlogPost_000000006 .imTALeft { text-align: left; }\n#imBlogPost_000000006 .imTARight { text-align: right; }\n#imBlogPost_000000006 .imTACenter { text-align: center; }\n#imBlogPost_000000006 .imTAJustify { text-align: justify; }\n#imBlogPost_000000006 .imUl { text-decoration: underline; }\n#imBlogPost_000000006 .imStrike { text-decoration: line-through; }\n#imBlogPost_000000006 .imUlStrike { text-decoration: underline line-through; }\n#imBlogPost_000000006 .imVt { vertical-align: top; }\n#imBlogPost_000000006 .imVc { vertical-align: middle; }\n#imBlogPost_000000006 .imVb { vertical-align: bottom; }\n#imBlogPost_000000006 hr { border-width: 1px 0 0 0; border-style: solid; }\n#imBlogPost_000000006 .fs12lh1-5 { vertical-align: baseline; font-size: 12pt; line-height: 24px; }\n@media (min-width: 1150.0px) {\n\t#imBlogPost_000000006 .image-3 { width: 100%; max-width: 262px; height: auto; }\n\t\n}\n\n@media (max-width: 1149.9px) and (min-width: 720.0px) {\n\t#imBlogPost_000000006 .image-3 { width: 100%; max-width: 262px; height: auto; }\n\t\n}\n\n@media (max-width: 719.9px) and (min-width: 480.0px) {\n\t#imBlogPost_000000006 .image-3 { width: 100%; max-width: 262px; height: auto; }\n\t\n}\n\n@media (max-width: 479.9px)  {\n\t#imBlogPost_000000006 .image-3 { width: 100%; max-width: 262px; height: auto; }\n\t\n}\n\n",
	'timestamp' => '13/2/2019',
	'utc_time' => 1550069040,
	'month' => '201902',
	'comments' => true,
	'sources' => array(),
	'tag' => array(),
	'opengraph' => array(
		'url' => 'https://veda.netxi.in/blog/?lorem-ipsum-dolor',
		'type' => 'article',
		'title' => 'Lorem Ipsum Dolor',
		'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
		'keywords' => '',
		'updated_time' => '1550069041',
		'images' => array('https://veda.netxi.in/blog/files/pixabay-1840011_thumb.webp','https://veda.netxi.in/blog/files/pixabay-1840011.webp','https://veda.netxi.in/images/pixabay-508272.webp'),
		'postimage' => 'images/pixabay-508272.webp'
	)
);$imSettings['blog']['posts_slug']['lorem-ipsum-dolor'] = '000000006';
$imSettings['blog']['posts_cat'] = array(
	'Design' => array(
		'000000009',
		'000000006'
	),
	'Exposition' => array(
		'000000008',
		'000000007'
	)
);
$imSettings['blog']['posts_author'] = array(
	'Алекс' => array(
		'000000009'
	)
);
$imSettings['blog']['posts_month'] = array(
	'201902' => array(
		'000000009',
		'000000008',
		'000000007',
		'000000006'
	)
);
$imSettings['blog']['posts_tag'] = array();

// End of file blog.inc.php