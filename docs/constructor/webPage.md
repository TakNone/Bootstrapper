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
	id : -4585928669113716738,
	url : 'https://docs.liveproto.dev',
	display_url : 'https://docs.liveproto.dev',
	hash : 81,
	type : 'Z6m7LNrUn9TF0vcw',
	site_name : 'MOdLn02UmrTkaFVt',
	title : 'oK3MHWqCFgGwLhIs',
	description : 'vQtgPY62cmD9eWFL',
	photo : $client->photoEmpty(
		id : 8277007342165493164,
	),
	embed_url : 'https://docs.liveproto.dev',
	embed_type : 'BvfsKOGad1kSgQx6',
	embed_width : 72,
	embed_height : 30,
	duration : 0,
	author : 'nK53r4xSi1zeGoL7',
	document : $client->documentEmpty(
		id : -2616428486890995716,
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
				published_date : 70,
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
				language : '46mN2YOf8oGReuQA',
			),
			$client->pageBlockFooter(
				text : $client->textEmpty(...),
			),
			$client->pageBlockDivider(),
			$client->pageBlockAnchor(
				name : 'DweUFcZKBvWTLGj9',
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
				photo_id : -5002932513116709456,
				caption : $client->pageCaption(...),
				url : 'https://docs.liveproto.dev',
				webpage_id : -8832283104068175771,
			),
			$client->pageBlockVideo(
				autoplay : true,
				loop : true,
				video_id : -5076767738219717088,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockCover(
				cover : $client->pageBlockUnsupported(...),
			),
			$client->pageBlockEmbed(
				full_width : true,
				allow_scrolling : true,
				url : 'https://docs.liveproto.dev',
				html : '4RtpPUShk9ETOvlC',
				poster_photo_id : 149459560070835420,
				w : 13,
				h : 88,
				caption : $client->pageCaption(...),
			),
			$client->pageBlockEmbedPost(
				url : 'https://docs.liveproto.dev',
				webpage_id : -7477638422430114882,
				author_photo_id : -7188447959180074224,
				author : 'j239CMt7GIWx4Eiq',
				date : 14,
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
				audio_id : -2740127945710799849,
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
				w : 76,
				h : 97,
				caption : $client->pageCaption(...),
			),
		),
		photos : array(
			$client->photoEmpty(
				id : -1544925823872093230,
			),
			$client->photo(
				has_stickers : true,
				id : -4995634628420184106,
				access_hash : -2976256807302823033,
				file_reference : '?R?yLiveProto?3XlK',
				date : 76,
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
				dc_id : 98,
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -1999971473040388665,
			),
			$client->document(
				id : -932146145392550908,
				access_hash : -3431269111202798002,
				file_reference : 'o???LiveProto?????',
				date : 38,
				mime_type : 'Wvxdgp5Ef0SnJ4cr',
				size : -5712751308729639261,
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
				dc_id : 15,
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
		views : 20,
	),
	attributes : array(
		$client->webPageAttributeTheme(
			documents : array(
				$client->documentEmpty(
					id : 6363220265580880829,
				),
				$client->document(
					id : -256336590652463495,
					access_hash : 4953265162162158141,
					file_reference : '?(?hLiveProtoGm#?e',
					date : 21,
					mime_type : 'IleatWxQRzKouLZi',
					size : 5778919153593775737,
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
			settings : $client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 100,
				outbox_accent_color : 0,
				message_colors : array(26),
				wallpaper : $client->wallPaper(...),
			),
		),
		$client->webPageAttributeStory(
			peer : $client->peerUser(
				user_id : 398532304376791126,
			),
			id : 58,
			story : $client->storyItemDeleted(
				id : 37,
			),
		),
		$client->webPageAttributeStickerSet(
			emojis : true,
			text_color : true,
			stickers : array(
				$client->documentEmpty(
					id : -2415968829291882019,
				),
				$client->document(
					id : -1412972079628086770,
					access_hash : -6808252905591467710,
					file_reference : '????4LiveProto??l]',
					date : 15,
					mime_type : 'LBOEUVMxv3w8Q51p',
					size : -1512476273638974611,
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
					dc_id : 27,
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
				id : 8237982868048903540,
				sticker : $client->documentEmpty(...),
				stars : -8321450339744643705,
				availability_remains : 35,
				availability_total : 74,
				availability_resale : 828973754959607660,
				convert_stars : -8289266367499962242,
				first_sale_date : 61,
				last_sale_date : 48,
				upgrade_stars : 2318856180724665281,
				resell_min_stars : 7623220753358593021,
				title : '6GLWYyTx9M1psrHQ',
				released_by : $client->peerUser(...),
				per_user_total : 18,
				per_user_remains : 96,
			),
		),
		$client->webPageAttributeStarGiftCollection(
			icons : array(
				$client->documentEmpty(
					id : -1044464238679763444,
				),
				$client->document(
					id : -2944391561567228029,
					access_hash : 2800196022157705709,
					file_reference : '????LiveProto??S',
					date : 28,
					mime_type : '6iNOgR2C1F5bKQn0',
					size : 8747238861944628595,
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
					dc_id : 89,
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