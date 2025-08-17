# webPage

**Description** : *Webpage preview*

**Layer** : 211

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
	id : 258097368640480941,
	url : 'https://docs.liveproto.dev',
	display_url : 'https://docs.liveproto.dev',
	hash : 63,
	type : 'Q2sRBafJUCiEDKyq',
	site_name : 'yn96IKV2mU3QXpgR',
	title : 'rAMD3mhPZdJg9pYK',
	description : '8GeSCE5RaH0PXm6B',
	photo : $client->photoEmpty(
		id : -6037089309794228878,
	),
	embed_url : 'https://docs.liveproto.dev',
	embed_type : 'El4eJI8CPWFukyGY',
	embed_width : 12,
	embed_height : 38,
	duration : 72,
	author : '14HTiLkPcZ0qymJ3',
	document : $client->documentEmpty(
		id : 7851849627218368279,
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
				published_date : 63,
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
				language : 'iYsA3mE7IZwSaNCt',
			),
			$client->pageBlockFooter(
				text : $client->textEmpty(...),
			),
			$client->pageBlockDivider(),
			$client->pageBlockAnchor(
				name : 'vIX8w7FpsgfrMOSV',
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
				photo_id : -6024100181494298465,
				caption : $client->pageCaption(...),
				url : 'https://docs.liveproto.dev',
				webpage_id : 8234773679892178055,
			),
			$client->pageBlockVideo(
				autoplay : true,
				loop : true,
				video_id : -7787544861312190716,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockCover(
				cover : $client->pageBlockUnsupported(...),
			),
			$client->pageBlockEmbed(
				full_width : true,
				allow_scrolling : true,
				url : 'https://docs.liveproto.dev',
				html : 'AJduylgPwfcQkEKp',
				poster_photo_id : 6560372556557009820,
				w : 100,
				h : 32,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockEmbedPost(
				url : 'https://docs.liveproto.dev',
				webpage_id : 5530276052653183482,
				author_photo_id : -3100818813324679366,
				author : 'b8JqZOYl41x7vRKn',
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
				audio_id : -5321615436095599204,
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
				zoom : 58,
				w : 55,
				h : 74,
				caption : $client->pageCaption(...),
			),
		),
		photos : array(
			$client->photoEmpty(
				id : -4779995227693240155,
			),
			$client->photo(
				has_stickers : true,
				id : 4729477340470392044,
				access_hash : -4018919386306718162,
				file_reference : ')ڬ?^LiveProtol??\\?',
				date : 29,
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
				dc_id : 87,
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -6419514921810759017,
			),
			$client->document(
				id : -5136241031594686199,
				access_hash : 1568208738597285456,
				file_reference : '???P?LiveProto' . "\0" . '&2??',
				date : 76,
				mime_type : 'f2ahGQ0NFWyE579Y',
				size : 3949405178080725498,
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
				dc_id : 47,
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
		views : 38,
	),
	attributes : array(
		$client->webPageAttributeTheme(
			documents : array(
				$client->documentEmpty(
					id : 8120648317699098125,
				),
				$client->document(
					id : 9125885673530078202,
					access_hash : 4263874770423009596,
					file_reference : '8M9?~LiveProto?]??',
					date : 53,
					mime_type : 'XgOh5AsdljubtDf0',
					size : -2619312725722092733,
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
					dc_id : 39,
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
				accent_color : 86,
				outbox_accent_color : 70,
				message_colors : array(49),
				wallpaper : $client->wallPaper(...),
			),
		),
		$client->webPageAttributeStory(
			peer : $client->peerUser(
				user_id : 5693557093596544018,
			),
			id : 12,
			story : $client->storyItemDeleted(
				id : 91,
			),
		),
		$client->webPageAttributeStickerSet(
			emojis : true,
			text_color : true,
			stickers : array(
				$client->documentEmpty(
					id : 6602790702639749800,
				),
				$client->document(
					id : 5296203118581262609,
					access_hash : 8976605107193739644,
					file_reference : 'R??+?LiveProtoȎʷ?',
					date : 17,
					mime_type : 'yFGpR8W1oerzhdOs',
					size : -4984616976820924653,
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
					dc_id : 78,
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
				require_premium : true,
				limited_per_user : true,
				id : -5019655826314173141,
				sticker : $client->documentEmpty(...),
				stars : -3881983917301360777,
				availability_remains : 15,
				availability_total : 95,
				availability_resale : 7266447157178825048,
				convert_stars : -630879304093569562,
				first_sale_date : 43,
				last_sale_date : 24,
				upgrade_stars : -5635215188895886833,
				resell_min_stars : 7614692217126722214,
				title : 'koTOMr2xu7j4iYh1',
				released_by : $client->peerUser(...),
				per_user_total : 99,
				per_user_remains : 7,
			),
		),
		$client->webPageAttributeStarGiftCollection(
			icons : array(
				$client->documentEmpty(
					id : -4420015881803508000,
				),
				$client->document(
					id : -125758350676465591,
					access_hash : -437125522623960841,
					file_reference : 'd?;|LiveProto?T?',
					date : 61,
					mime_type : 'mjrBSpacAHk8Mlz6',
					size : 3806753333343443364,
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
					dc_id : 92,
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