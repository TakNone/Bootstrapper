# messages.myStickers

**Description** : *The list of stickersets owned by the current account »*

**Layer** : 211

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
	count : 53,
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
				installed_date : 13,
				id : -2447811746979649871,
				access_hash : -2513709171224206751,
				title : '2GauLhenx9o786kU',
				short_name : 'kMhAiXftbRsVwnxC',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 81,
				thumb_version : 94,
				thumb_document_id : -7865230285225174620,
				count : 14,
				hash : 3,
			),
			cover : $client->documentEmpty(
				id : -6377882918962929909,
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
				installed_date : 25,
				id : -6947324145011402841,
				access_hash : -7833249637350979890,
				title : '35PGMLmEpedVrAg8',
				short_name : 'dXJsOV5UIjPevKEp',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 79,
				thumb_version : 2,
				thumb_document_id : 4768044532031454214,
				count : 4,
				hash : 93,
			),
			covers : array(
				$client->documentEmpty(
					id : -7903518576068137156,
				),
				$client->document(
					id : 26172465459381454,
					access_hash : -7918199066197494652,
					file_reference : 'A???SLiveProtoh?
2?',
					date : 51,
					mime_type : 'Iub19lAYc5GQnfge',
					size : -8918967629121962158,
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
					dc_id : 58,
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
				installed_date : 69,
				id : 3073625629914982554,
				access_hash : -3340036562077173528,
				title : 'RYLxj19A43f6D0NX',
				short_name : 'KIDuJHbYk2pQG0ea',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 38,
				thumb_version : 15,
				thumb_document_id : 8330937585803637684,
				count : 48,
				hash : 21,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'NkMjKeq6YoSEgHsW',
					documents : array(-504382085369460559),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6854109867039629797,
					keyword : array('tuR1FUD9QJf0gLbq'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2755161665681032752,
				),
				$client->document(
					id : 4437112862223199604,
					access_hash : 4843033797259286925,
					file_reference : '|???LiveProto?z?',
					date : 78,
					mime_type : 'R09ByiVANOEjgubx',
					size : 3335775303230100932,
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
					dc_id : 72,
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
				installed_date : 52,
				id : 2394038612732175105,
				access_hash : 5044736134411536000,
				title : 'F6lvE4KnhxbzuqQj',
				short_name : 'R4oPETs7Kfr3abgJ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 64,
				thumb_version : 11,
				thumb_document_id : -6422659168342637341,
				count : 75,
				hash : 61,
			),
		),
	),
);
```