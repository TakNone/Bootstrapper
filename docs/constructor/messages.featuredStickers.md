# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 211

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : -7271642759167982449,
	count : 62,
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 25,
				id : 6886989181446784289,
				access_hash : -8378180948123165410,
				title : 'u3C7M6IipsPZrcey',
				short_name : 'pf6t9DkMmWquFQzZ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 39,
				thumb_version : 27,
				thumb_document_id : -8980082092810050586,
				count : 83,
				hash : 28,
			),
			cover : $client->documentEmpty(
				id : -6326212681793446403,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 92,
				id : 4503656213395138029,
				access_hash : -2126033751136441912,
				title : 'v2IDibk8PqY6rKJy',
				short_name : '8D7UtZLrR2P9wAkJ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 72,
				thumb_version : 87,
				thumb_document_id : -7067754726049343450,
				count : 86,
				hash : 51,
			),
			covers : array(
				$client->documentEmpty(
					id : 8509929348628711328,
				),
				$client->document(
					id : 978928815673856769,
					access_hash : 5934701352752657753,
					file_reference : '?
??=LiveProtoP???',
					date : 83,
					mime_type : 'aFmw2xrN5yXUGthB',
					size : 1250444002483734559,
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
					dc_id : 51,
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
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 33,
				id : 8675268007629844549,
				access_hash : -3971662855854053890,
				title : 'RysIcVGPn871rdLv',
				short_name : 'xnMIUaYv4mR2qeD7',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 48,
				thumb_version : 41,
				thumb_document_id : -5759030795399109463,
				count : 83,
				hash : 60,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'XY2rIaCb4TK9wANp',
					documents : array(-4447439074608002172),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 801040236965412181,
					keyword : array('nz1Zsju9Ugwp5QAF'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5012981028236284785,
				),
				$client->document(
					id : 4069146014873515356,
					access_hash : -7575998226007540260,
					file_reference : '?\'i"LiveProto?q0?,',
					date : 10,
					mime_type : 'V07DBk3iG9Yl2HM8',
					size : -7049011933002297528,
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
					dc_id : 66,
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
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 74,
				id : -1662199658257516743,
				access_hash : 3147436441437284533,
				title : 'JmaURrpWTLES5gPo',
				short_name : 'd0HRa6slemWMKVSN',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 35,
				thumb_version : 10,
				thumb_document_id : -3718620993773417928,
				count : 79,
				hash : 63,
			),
		),
	),
	unread : array(4272685540963047689),
);
```