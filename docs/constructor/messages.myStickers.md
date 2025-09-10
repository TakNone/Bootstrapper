# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 214

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 57,
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
				installed_date : 36,
				id : 7334087598372459729,
				access_hash : 4635823974075027329,
				title : 'kcSvfstjC9EGxJPg',
				short_name : 'BKeOCmYhPoIZck8N',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 76,
				thumb_version : 95,
				thumb_document_id : -718634344164957432,
				count : 12,
				hash : 70,
			),
			cover : $client->documentEmpty(
				id : 3779441266468501783,
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
				installed_date : 60,
				id : -2887156408770061602,
				access_hash : 2250375294944322683,
				title : 'bR3YJ9io4mVFqIs8',
				short_name : 'qA9CtXGOczEhBvWp',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 28,
				thumb_version : 91,
				thumb_document_id : 9091190194233343960,
				count : 61,
				hash : 67,
			),
			covers : array(
				$client->documentEmpty(
					id : -5166026701993868103,
				),
				$client->document(
					id : 5916667133045400264,
					access_hash : 3155502921199271498,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 79,
					mime_type : '19E2VTn5XbS3MU4L',
					size : -601386674688473959,
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
					dc_id : 6,
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
				installed_date : 93,
				id : -332710930807279540,
				access_hash : 7303016581806920944,
				title : 'ecCTmLxlsdFAInf7',
				short_name : 'hi0zIsaMfdXF8LcY',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 55,
				thumb_version : 9,
				thumb_document_id : 4236452617772385253,
				count : 9,
				hash : 67,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'ydAruhHJ9l18sPOF',
					documents : array(4074120598101868822),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -9178708594330306670,
					keyword : array('T7O9Swfk5gBqjuZa'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3451929395699014738,
				),
				$client->document(
					id : 4607537951797802982,
					access_hash : 1146907965135094314,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 6,
					mime_type : 'eizRBTHYDadFX58N',
					size : 6579691349583289896,
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
					dc_id : 34,
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
				installed_date : 95,
				id : 4981684642843310843,
				access_hash : -5770643806176677181,
				title : 'wL8l17dmAXNvgrhi',
				short_name : 'evgxPrylCtcROkVU',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 98,
				thumb_version : 71,
				thumb_document_id : 8597434728636593437,
				count : 34,
				hash : 14,
			),
		),
	),
);
```