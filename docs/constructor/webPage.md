# webPage

**Description** : *Webpage preview*

**Layer** : 214

```tl
webPage#e89c45b2 flags:# has_large_media:flags.13?true video_cover_photo:flags.14?true id:long url:string display_url:string hash:int type:flags.0?string site_name:flags.1?string title:flags.2?string description:flags.3?string photo:flags.4?Photo embed_url:flags.5?string embed_type:flags.5?string embed_width:flags.6?int embed_height:flags.6?int duration:flags.7?int author:flags.8?string document:flags.9?Document cached_page:flags.10?Page attributes:flags.12?Vector<WebPageAttribute> = WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_large_media** | [`flags.13?true`](type/true) | Whether the size of the media in the preview can be changed |
| **video_cover_photo** | [`flags.14?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | Preview ID |
| <mark>url</mark> | [`string`](type/string) | URL of previewed webpage |
| <mark>display_url</mark> | [`string`](type/string) | Webpage URL to be displayed to the user |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| **type** | [`flags.0?string`](type/string) | Type of the web page. One of the following: - video- gif- photo- document- profile- telegram_background- telegram_theme- telegram_story- telegram_channel- telegram_channel_request- telegram_megagroup- telegram_chat- telegram_megagroup_request- telegram_chat_request- telegram_album- telegram_message- telegram_bot- telegram_voicechat- telegram_livestream- telegram_user- telegram_botapp- telegram_channel_boost- telegram_group_boost- telegram_giftcode- telegram_stickerset |
| **site_name** | [`flags.1?string`](type/string) | Short name of the site (e.g., Google Docs, App Store) |
| **title** | [`flags.2?string`](type/string) | Title of the content |
| **description** | [`flags.3?string`](type/string) | Content description |
| **photo** | [`flags.4?Photo`](type/Photo) | Image representing the content |
| **embed_url** | [`flags.5?string`](type/string) | URL to show in the embedded preview |
| **embed_type** | [`flags.5?string`](type/string) | MIME type of the embedded preview, (e.g., text/html or video/mp4) |
| **embed_width** | [`flags.6?int`](type/int) | Width of the embedded preview |
| **embed_height** | [`flags.6?int`](type/int) | Height of the embedded preview |
| **duration** | [`flags.7?int`](type/int) | Duration of the content, in seconds |
| **author** | [`flags.8?string`](type/string) | Author of the content |
| **document** | [`flags.9?Document`](type/Document) | Preview of the content as a media file |
| **cached_page** | [`flags.10?Page`](type/Page) | Page contents in instant view format |
| **attributes** | [`flags.12?Vector<WebPageAttribute>`](type/WebPageAttribute) | Webpage attributes |

---

## Type

[WebPage](type/WebPage)

---

## Example

```php
$webPage = $client->webPage(
	has_large_media : true,
	video_cover_photo : true,
	id : 3304265044533333746,
	url : 'https://docs.liveproto.dev',
	display_url : 'https://docs.liveproto.dev',
	hash : 24,
	type : 'mulEaY1iQ4p7Xcrx',
	site_name : 'ES1rFHRqmeK6xXh2',
	title : 'aboNMLKDTVzxw2Wj',
	description : 'HSl7iOxDNv1bnMcs',
	photo : $client->photoEmpty(
		id : 2688857910328681784,
	),
	embed_url : 'https://docs.liveproto.dev',
	embed_type : 'JXNic1vj0wQdbEkI',
	embed_width : 62,
	embed_height : 34,
	duration : 22,
	author : 'hviOryKUB1tb9FcE',
	document : $client->documentEmpty(
		id : 5863144976568239272,
	),
	cached_page : $client->page(
		part : true,
		rtl : true,
		v2 : true,
		url : 'https://docs.liveproto.dev',
		blocks : array(
			$client->pageBlockUnsupported(),
			$client->pageBlockTitle(
				text : $client->textEmpty(...),
			),
			$client->pageBlockSubtitle(
				text : $client->textEmpty(...),
			),
			$client->pageBlockAuthorDate(
				author : $client->textEmpty(...),
				published_date : 75,
			),
			$client->pageBlockHeader(
				text : $client->textEmpty(...),
			),
			$client->pageBlockSubheader(
				text : $client->textEmpty(...),
			),
			$client->pageBlockParagraph(
				text : $client->textEmpty(...),
			),
			$client->pageBlockPreformatted(
				text : $client->textEmpty(...),
				language : 'zhFLYNwfSyMc2XeP',
			),
			$client->pageBlockFooter(
				text : $client->textEmpty(...),
			),
			$client->pageBlockDivider(),
			$client->pageBlockAnchor(
				name : 'ymEULvoP2tQwNgCs',
			),
			$client->pageBlockList(
				items : array(
					$client->pageListItemText(...),
					$client->pageListItemBlocks(...),
				),
			),
			$client->pageBlockBlockquote(
				text : $client->textEmpty(...),
				caption : $client->textEmpty(...),
			),
			$client->pageBlockPullquote(
				text : $client->textEmpty(...),
				caption : $client->textEmpty(...),
			),
			$client->pageBlockPhoto(
				photo_id : 761179675802586750,
				caption : $client->pageCaption(...),
				url : 'https://docs.liveproto.dev',
				webpage_id : -2368889292216540924,
			),
			$client->pageBlockVideo(
				autoplay : true,
				loop : true,
				video_id : -6756762949786168912,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockCover(
				cover : $client->pageBlockUnsupported(...),
			),
			$client->pageBlockEmbed(
				full_width : true,
				allow_scrolling : true,
				url : 'https://docs.liveproto.dev',
				html : 'jOo4YQMETtGzi0AB',
				poster_photo_id : 4216735592361009733,
				w : 43,
				h : 77,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockEmbedPost(
				url : 'https://docs.liveproto.dev',
				webpage_id : -4061136198032364233,
				author_photo_id : 6812620992045174910,
				author : 'bB1kcdThvz05Nr9q',
				date : 35,
				blocks : array(
					$client->pageBlockUnsupported(...),
					$client->pageBlockTitle(...),
					$client->pageBlockSubtitle(...),
					$client->pageBlockAuthorDate(...),
					$client->pageBlockHeader(...),
					$client->pageBlockSubheader(...),
					$client->pageBlockParagraph(...),
					$client->pageBlockPreformatted(...),
					$client->pageBlockFooter(...),
					$client->pageBlockDivider(...),
					$client->pageBlockAnchor(...),
					$client->pageBlockList(...),
					$client->pageBlockBlockquote(...),
					$client->pageBlockPullquote(...),
					$client->pageBlockPhoto(...),
					$client->pageBlockVideo(...),
					$client->pageBlockCover(...),
					$client->pageBlockEmbed(...),
					$client->pageBlockEmbedPost(...),
					$client->pageBlockCollage(...),
					$client->pageBlockSlideshow(...),
					$client->pageBlockChannel(...),
					$client->pageBlockAudio(...),
					$client->pageBlockKicker(...),
					$client->pageBlockTable(...),
					$client->pageBlockOrderedList(...),
					$client->pageBlockDetails(...),
					$client->pageBlockRelatedArticles(...),
					$client->pageBlockMap(...),
				),
				caption : $client->pageCaption(...),
			),
			$client->pageBlockCollage(
				items : array(
					$client->pageBlockUnsupported(...),
					$client->pageBlockTitle(...),
					$client->pageBlockSubtitle(...),
					$client->pageBlockAuthorDate(...),
					$client->pageBlockHeader(...),
					$client->pageBlockSubheader(...),
					$client->pageBlockParagraph(...),
					$client->pageBlockPreformatted(...),
					$client->pageBlockFooter(...),
					$client->pageBlockDivider(...),
					$client->pageBlockAnchor(...),
					$client->pageBlockList(...),
					$client->pageBlockBlockquote(...),
					$client->pageBlockPullquote(...),
					$client->pageBlockPhoto(...),
					$client->pageBlockVideo(...),
					$client->pageBlockCover(...),
					$client->pageBlockEmbed(...),
					$client->pageBlockEmbedPost(...),
					$client->pageBlockCollage(...),
					$client->pageBlockSlideshow(...),
					$client->pageBlockChannel(...),
					$client->pageBlockAudio(...),
					$client->pageBlockKicker(...),
					$client->pageBlockTable(...),
					$client->pageBlockOrderedList(...),
					$client->pageBlockDetails(...),
					$client->pageBlockRelatedArticles(...),
					$client->pageBlockMap(...),
				),
				caption : $client->pageCaption(...),
			),
			$client->pageBlockSlideshow(
				items : array(
					$client->pageBlockUnsupported(...),
					$client->pageBlockTitle(...),
					$client->pageBlockSubtitle(...),
					$client->pageBlockAuthorDate(...),
					$client->pageBlockHeader(...),
					$client->pageBlockSubheader(...),
					$client->pageBlockParagraph(...),
					$client->pageBlockPreformatted(...),
					$client->pageBlockFooter(...),
					$client->pageBlockDivider(...),
					$client->pageBlockAnchor(...),
					$client->pageBlockList(...),
					$client->pageBlockBlockquote(...),
					$client->pageBlockPullquote(...),
					$client->pageBlockPhoto(...),
					$client->pageBlockVideo(...),
					$client->pageBlockCover(...),
					$client->pageBlockEmbed(...),
					$client->pageBlockEmbedPost(...),
					$client->pageBlockCollage(...),
					$client->pageBlockSlideshow(...),
					$client->pageBlockChannel(...),
					$client->pageBlockAudio(...),
					$client->pageBlockKicker(...),
					$client->pageBlockTable(...),
					$client->pageBlockOrderedList(...),
					$client->pageBlockDetails(...),
					$client->pageBlockRelatedArticles(...),
					$client->pageBlockMap(...),
				),
				caption : $client->pageCaption(...),
			),
			$client->pageBlockChannel(
				channel : $client->chatEmpty(...),
			),
			$client->pageBlockAudio(
				audio_id : -4602723539817730314,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockKicker(
				text : $client->textEmpty(...),
			),
			$client->pageBlockTable(
				bordered : true,
				striped : true,
				title : $client->textEmpty(...),
				rows : array(
					$client->pageTableRow(...),
				),
			),
			$client->pageBlockOrderedList(
				items : array(
					$client->pageListOrderedItemText(...),
					$client->pageListOrderedItemBlocks(...),
				),
			),
			$client->pageBlockDetails(
				open : true,
				blocks : array(
					$client->pageBlockUnsupported(...),
					$client->pageBlockTitle(...),
					$client->pageBlockSubtitle(...),
					$client->pageBlockAuthorDate(...),
					$client->pageBlockHeader(...),
					$client->pageBlockSubheader(...),
					$client->pageBlockParagraph(...),
					$client->pageBlockPreformatted(...),
					$client->pageBlockFooter(...),
					$client->pageBlockDivider(...),
					$client->pageBlockAnchor(...),
					$client->pageBlockList(...),
					$client->pageBlockBlockquote(...),
					$client->pageBlockPullquote(...),
					$client->pageBlockPhoto(...),
					$client->pageBlockVideo(...),
					$client->pageBlockCover(...),
					$client->pageBlockEmbed(...),
					$client->pageBlockEmbedPost(...),
					$client->pageBlockCollage(...),
					$client->pageBlockSlideshow(...),
					$client->pageBlockChannel(...),
					$client->pageBlockAudio(...),
					$client->pageBlockKicker(...),
					$client->pageBlockTable(...),
					$client->pageBlockOrderedList(...),
					$client->pageBlockDetails(...),
					$client->pageBlockRelatedArticles(...),
					$client->pageBlockMap(...),
				),
				title : $client->textEmpty(...),
			),
			$client->pageBlockRelatedArticles(
				title : $client->textEmpty(...),
				articles : array(
					$client->pageRelatedArticle(...),
				),
			),
			$client->pageBlockMap(
				geo : $client->geoPointEmpty(...),
				zoom : 13,
				w : 69,
				h : 68,
				caption : $client->pageCaption(...),
			),
		),
		photos : array(
			$client->photoEmpty(
				id : -518426803521804888,
			),
			$client->photo(
				has_stickers : true,
				id : -3191489425705084796,
				access_hash : 6048450070072103225,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 100,
				sizes : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				video_sizes : array(
					$client->videoSize(...),
					$client->videoSizeEmojiMarkup(...),
					$client->videoSizeStickerMarkup(...),
				),
				dc_id : 91,
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 5199685255801917299,
			),
			$client->document(
				id : 2776432574820589450,
				access_hash : 4356745361193191150,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 65,
				mime_type : 'v2Ltdf9ANYzPUTIZ',
				size : -755288334395308987,
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				video_thumbs : array(
					$client->videoSize(...),
					$client->videoSizeEmojiMarkup(...),
					$client->videoSizeStickerMarkup(...),
				),
				dc_id : 56,
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
		),
		views : 74,
	),
	attributes : array(
		$client->webPageAttributeTheme(
			documents : array(
				$client->documentEmpty(
					id : -7050111818604635814,
				),
				$client->document(
					id : 6663953440801411429,
					access_hash : -4313369729695139013,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 51,
					mime_type : 'G0M4IoLN1dUA82Zq',
					size : 8336176150429967291,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 30,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
			settings : $client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 27,
				outbox_accent_color : 51,
				message_colors : array(59),
				wallpaper : $client->wallPaper(...),
			),
		),
		$client->webPageAttributeStory(
			peer : $client->peerUser(
				user_id : -2122845661402834955,
			),
			id : 40,
			story : $client->storyItemDeleted(
				id : 78,
			),
		),
		$client->webPageAttributeStickerSet(
			emojis : true,
			text_color : true,
			stickers : array(
				$client->documentEmpty(
					id : -4391694410460402921,
				),
				$client->document(
					id : 3874808148944835100,
					access_hash : 6683492675953105715,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 86,
					mime_type : 'zdCZa7g8Jn0r6OcD',
					size : 3208429537749805635,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 77,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
		),
		$client->webPageAttributeUniqueStarGift(
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				can_upgrade : true,
				require_premium : true,
				limited_per_user : true,
				id : -4999547934575119849,
				sticker : $client->documentEmpty(...),
				stars : -1217166107958788143,
				availability_remains : 68,
				availability_total : 68,
				availability_resale : -7234732915880140206,
				convert_stars : 6618706578212981265,
				first_sale_date : 57,
				last_sale_date : 63,
				upgrade_stars : 1007866237665938629,
				resell_min_stars : 7650864615192341778,
				title : 'A2en4jBIwrfuYS6b',
				released_by : $client->peerUser(...),
				per_user_total : 100,
				per_user_remains : 44,
				locked_until_date : 99,
			),
		),
		$client->webPageAttributeStarGiftCollection(
			icons : array(
				$client->documentEmpty(
					id : -6173371139262800352,
				),
				$client->document(
					id : 3456478500214248597,
					access_hash : -7723026857903141880,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 34,
					mime_type : 'jM4fxAdhDnZlKskm',
					size : 6022464670568972038,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 10,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
		),
	),
);
```