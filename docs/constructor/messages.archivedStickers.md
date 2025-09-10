# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 214

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 58,
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
				installed_date : 32,
				id : 2196730811556487473,
				access_hash : -8051894082718455562,
				title : 'wqmZx3Wsr2PIBKNJ',
				short_name : 'LR2KEktACD5eYm4p',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 4,
				thumb_version : 53,
				thumb_document_id : 549832544573911956,
				count : 28,
				hash : 60,
			),
			cover : $client->documentEmpty(
				id : 8048121244913059783,
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
				installed_date : 63,
				id : -7758328039844932651,
				access_hash : 7345457392326101002,
				title : 'cAXWwRm81SaJy7nN',
				short_name : 'fi68FxkqKdewAp21',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 64,
				thumb_version : 27,
				thumb_document_id : 7056820324651536804,
				count : 56,
				hash : 88,
			),
			covers : array(
				$client->documentEmpty(
					id : -1569135543792878722,
				),
				$client->document(
					id : 7114270497232725098,
					access_hash : -8655515517108058189,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 44,
					mime_type : '90ONkrtojhXBIP8U',
					size : 8424872026437877565,
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
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 44,
				id : 4189336763692282268,
				access_hash : -3585855709049173015,
				title : 'KsiRH0jS862QowUL',
				short_name : 'iYtnamOBgl0PfVyW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 2,
				thumb_version : 57,
				thumb_document_id : -4411527290069033279,
				count : 78,
				hash : 24,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'iQfzGXYMF98BZrRP',
					documents : array(2796434179791604942),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7861790045978149558,
					keyword : array('8DzHCbf5X9qr0TyI'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -7574153886293477639,
				),
				$client->document(
					id : 4383604083903290649,
					access_hash : 8947921270188160435,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 67,
					mime_type : 'RUTe4wmCQDSz9KvG',
					size : -8900931053765700474,
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
					dc_id : 26,
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
				installed_date : 18,
				id : 216112906332767770,
				access_hash : 9086202093774820945,
				title : 'WRlf3AQKLed6kgJs',
				short_name : 'SyEZi0waCDBAslP6',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 39,
				thumb_version : 26,
				thumb_document_id : 3806731919669331359,
				count : 11,
				hash : 29,
			),
		),
	),
);
```