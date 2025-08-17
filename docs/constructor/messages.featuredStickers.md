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
	hash : 1154387455598141915,
	count : 68,
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
				installed_date : 64,
				id : -3153673080709839878,
				access_hash : 8196568068845853119,
				title : 'qvDK2ziTcZg9Nsb0',
				short_name : 'DhYQjaMyB0Fbo75p',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 10,
				thumb_version : 87,
				thumb_document_id : 2932883819377727406,
				count : 12,
				hash : 4,
			),
			cover : $client->documentEmpty(
				id : -8666988390973262278,
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
				installed_date : 71,
				id : 5069538986148381191,
				access_hash : -7639053368140135789,
				title : 'RmIMGzTDfYy6ZeAP',
				short_name : 'ZSBpvY7OcDzjk02E',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 42,
				thumb_version : 1,
				thumb_document_id : 2616760936877160192,
				count : 10,
				hash : 81,
			),
			covers : array(
				$client->documentEmpty(
					id : -4308972503424072028,
				),
				$client->document(
					id : -4092097516859551213,
					access_hash : 1694662909703973143,
					file_reference : 'X{???LiveProto\'?\\?',
					date : 97,
					mime_type : 'sL5gEYCd9Mvark6J',
					size : 2658288932680444029,
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
					dc_id : 22,
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
				installed_date : 43,
				id : -361479870076718317,
				access_hash : 4405533404447808751,
				title : 'IiGbCV5M0kf6B1Ap',
				short_name : 'sNYvyUeFRxT5iozp',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 27,
				thumb_version : 22,
				thumb_document_id : 3805972717350188909,
				count : 60,
				hash : 35,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'DhkMb580w4afr9pL',
					documents : array(4958654022959657438),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7127011766495996525,
					keyword : array('7aOBgwY8EmIuN92p'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -4083219923817642954,
				),
				$client->document(
					id : 4459646972265698626,
					access_hash : 300154183208983970,
					file_reference : 'T?A?LiveProtowL?k(',
					date : 24,
					mime_type : 'arhxVgqZu4jLmoD3',
					size : -6245393366975569878,
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
					dc_id : 43,
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
				installed_date : 72,
				id : 6080277070297916030,
				access_hash : -5386429449911592793,
				title : 'E4wynaJvjbFieNPV',
				short_name : 'AzX4bBWuhetxYgLO',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 49,
				thumb_version : 95,
				thumb_document_id : -1743006278722512589,
				count : 43,
				hash : 94,
			),
		),
	),
	unread : array(5173829951010681672),
);
```