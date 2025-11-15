# webPage

**Description** : *Webpage preview*

**Layer** : 216

```tl
webPage#e89c45b2 flags:# has_large_media:flags.13?true video_cover_photo:flags.14?true id:long url:string display_url:string hash:int type:flags.0?string site_name:flags.1?string title:flags.2?string description:flags.3?string photo:flags.4?Photo embed_url:flags.5?string embed_type:flags.5?string embed_width:flags.6?int embed_height:flags.6?int duration:flags.7?int author:flags.8?string document:flags.9?Document cached_page:flags.10?Page attributes:flags.12?Vector<WebPageAttribute> = WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_large_media** | [`flags.13?true`](type/true) | Whether the size of the media in the preview can be changed |
| **video_cover_photo** | [`flags.14?true`](type/true) | Represents a custom video cover |
| <mark>id</mark> | [`long`](type/long) | Preview ID |
| <mark>url</mark> | [`string`](type/string) | URL of previewed webpage |
| <mark>display_url</mark> | [`string`](type/string) | Webpage URL to be displayed to the user |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| **type** | [`flags.0?string`](type/string) | Type of the web page. One of the following: - app- article- document- gif- photo- profile- telegram_album- telegram_background- telegram_bot- telegram_botapp- telegram_call- telegram_channel- telegram_channel_boost- telegram_channel_direct- telegram_channel_request- telegram_chat- telegram_chat_request- telegram_chatlist- telegram_collection- telegram_community- telegram_giftcode- telegram_group_boost- telegram_livestream- telegram_megagroup- telegram_megagroup_request- telegram_message- telegram_nft- telegram_stickerset- telegram_story- telegram_story_album- telegram_theme- telegram_user- telegram_videochat- telegram_voicechat- video |
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
	id : -7933764150335404994,
	url : 'https://docs.liveproto.dev',
	display_url : 'https://docs.liveproto.dev',
	hash : 0,
	type : '6cahHws8uFEU3I2M',
	site_name : 'wmiy04FdKqRI5j2B',
	title : 'lPheEix5pzVQA4vT',
	description : 'T0mdq8rSM36KYflX',
	photo : $client->photoEmpty(
		id : 607512920430820460,
	),
	embed_url : 'https://docs.liveproto.dev',
	embed_type : 'uU2x6k3PcNe1GI7O',
	embed_width : 74,
	embed_height : 10,
	duration : 84,
	author : 'm8rhMwnyARG6Y14s',
	document : $client->documentEmpty(
		id : -4731178476422449731,
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
				published_date : 26,
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
				language : 'oipgPQmMV5E7btsN',
			),
			$client->pageBlockFooter(
				text : $client->textEmpty(...),
			),
			$client->pageBlockDivider(),
			$client->pageBlockAnchor(
				name : 'norlPD5dAyTpkwmZ',
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
				photo_id : -399187337978656633,
				caption : $client->pageCaption(...),
				url : 'https://docs.liveproto.dev',
				webpage_id : -9255788177871331,
			),
			$client->pageBlockVideo(
				autoplay : true,
				loop : true,
				video_id : -714416062162056927,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockCover(
				cover : $client->pageBlockUnsupported(...),
			),
			$client->pageBlockEmbed(
				full_width : true,
				allow_scrolling : true,
				url : 'https://docs.liveproto.dev',
				html : 'vzrGKq5jcXgRwPbM',
				poster_photo_id : -2629310768588516986,
				w : 0,
				h : 100,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockEmbedPost(
				url : 'https://docs.liveproto.dev',
				webpage_id : 2433418751874532824,
				author_photo_id : -7671862587853484365,
				author : 'HfnEbemvc9IMykqC',
				date : 7,
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
				audio_id : 2567000239139387301,
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
				zoom : 99,
				w : 13,
				h : 92,
				caption : $client->pageCaption(...),
			),
		),
		photos : array(
			$client->photoEmpty(
				id : 7028885706195155367,
			),
			$client->photo(
				has_stickers : true,
				id : -8209739449792316480,
				access_hash : 5748720201943948950,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 27,
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
				dc_id : 84,
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -7200372342448758432,
			),
			$client->document(
				id : -558828592279853889,
				access_hash : 7176500981782012958,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 17,
				mime_type : '9kb35rDdKpVJRoHq',
				size : 4143103296613745810,
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
				dc_id : 80,
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
		views : 10,
	),
	attributes : array(
		$client->webPageAttributeTheme(
			documents : array(
				$client->documentEmpty(
					id : -3224492668818283176,
				),
				$client->document(
					id : -414521480800805571,
					access_hash : -6697595413694621934,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 38,
					mime_type : 'g1UyCKmTHj4kJB9N',
					size : 2700210069764700964,
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
					dc_id : 1,
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
				accent_color : 34,
				outbox_accent_color : 23,
				message_colors : array(97),
				wallpaper : $client->wallPaper(...),
			),
		),
		$client->webPageAttributeStory(
			peer : $client->peerUser(
				user_id : -5624813799572064467,
			),
			id : 12,
			story : $client->storyItemDeleted(
				id : 12,
			),
		),
		$client->webPageAttributeStickerSet(
			emojis : true,
			text_color : true,
			stickers : array(
				$client->documentEmpty(
					id : 5821852323183986450,
				),
				$client->document(
					id : 7520247517816109536,
					access_hash : 7925995250224319707,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 48,
					mime_type : 'KbxvXu8l4qND91H3',
					size : 5026950104247680839,
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
					dc_id : 12,
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
				peer_color_available : true,
				id : -4820486184300434807,
				sticker : $client->documentEmpty(...),
				stars : -6077131612358169653,
				availability_remains : 93,
				availability_total : 80,
				availability_resale : -2983682741785434721,
				convert_stars : -565299921069783716,
				first_sale_date : 98,
				last_sale_date : 56,
				upgrade_stars : 2095935634471620413,
				resell_min_stars : -8639482267412052656,
				title : 'pz03AOoi1S9MrgnI',
				released_by : $client->peerUser(...),
				per_user_total : 54,
				per_user_remains : 47,
				locked_until_date : 83,
			),
		),
		$client->webPageAttributeStarGiftCollection(
			icons : array(
				$client->documentEmpty(
					id : 3057926820458863209,
				),
				$client->document(
					id : -4841470843442198029,
					access_hash : 3113960212082854374,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 49,
					mime_type : 'bfsRmIENX7UetS2H',
					size : -6430224937786342328,
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
					dc_id : 31,
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