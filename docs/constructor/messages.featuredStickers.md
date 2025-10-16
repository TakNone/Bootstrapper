# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 216

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
	hash : 0,
	count : 61,
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
				installed_date : 30,
				id : 9019802385486116229,
				access_hash : 7951915721370109142,
				title : 'SWmZp3r7tOeaVND2',
				short_name : 'Ay5JYDkWEPLrcz4Z',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 53,
				thumb_version : 52,
				thumb_document_id : 8885938042787666203,
				count : 20,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 2040527709418838490,
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
				installed_date : 75,
				id : -5543036654455509537,
				access_hash : 6090196761670575397,
				title : 'tuwPNZgdmjDnO1IL',
				short_name : 'ObAfuEjeN1Z0MxoV',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 28,
				thumb_version : 3,
				thumb_document_id : 2068005367872783777,
				count : 90,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 5273870585079017699,
				),
				$client->document(
					id : 7810530898750080137,
					access_hash : -6346300049451890783,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 50,
					mime_type : '8GvP0idMeljmR6S1',
					size : 5874743702883974340,
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
					dc_id : 68,
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
				installed_date : 94,
				id : -3790465369235739460,
				access_hash : -4878078987974937135,
				title : 'gfh0LoOtVGUie1s8',
				short_name : 'hu3zZJmVWwNK5Qgy',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 6,
				thumb_version : 28,
				thumb_document_id : 7082982398934951514,
				count : 96,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'vBo3sNng7E5VZkA9',
					documents : array(-604765165042340319),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 1511823724448269394,
					keyword : array('8Q25GJXCWTumqnFi'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -4199118810658517865,
				),
				$client->document(
					id : 6387630750275096386,
					access_hash : 2164976639168130801,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 51,
					mime_type : 'B8MjfSZEDneuPv5d',
					size : 4908900892125067485,
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
					dc_id : 98,
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
				installed_date : 63,
				id : 6978596179530037154,
				access_hash : -4147358969407514494,
				title : 'V63tbz9cZvMY8Ies',
				short_name : '6uQl1xJpwFiWBXO5',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 35,
				thumb_version : 44,
				thumb_document_id : -7195168569680272303,
				count : 94,
				hash : 0,
			),
		),
	),
	unread : array(5710875017500351809),
);
```