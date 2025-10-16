# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 216

```tl
messages.foundStickerSets#8af09dd2 hash:long sets:Vector<StickerSetCovered> = messages.FoundStickerSets;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Found stickersets |

---

## Type

[messages.FoundStickerSets](type/messages.FoundStickerSets)

---

## Example

```php
$messagesFoundStickerSets = $client->messages->foundStickerSets(
	hash : 0,
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
				installed_date : 68,
				id : 3014648309186354062,
				access_hash : 1342961253595753872,
				title : '10jYseVX684KFqHb',
				short_name : '5UnFpzaRh8NIJcyo',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 2,
				thumb_version : 30,
				thumb_document_id : -7782172284042414493,
				count : 34,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 974607905685210197,
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
				installed_date : 51,
				id : 2196911652846883536,
				access_hash : 7931843368446190000,
				title : 'jJgEyihGRvdbPVw0',
				short_name : 'SQ1xUbYN3rH0kGOT',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 12,
				thumb_version : 60,
				thumb_document_id : 393277905986116833,
				count : 23,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 4442167566617727954,
				),
				$client->document(
					id : 666373397783463718,
					access_hash : -5775931436358988109,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 53,
					mime_type : 'Dh6K01jweIMqRNSi',
					size : -602227654149771253,
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
					dc_id : 88,
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
				installed_date : 88,
				id : 7390301409621425409,
				access_hash : 3880303024445440976,
				title : 'aT0ZDVft5Qjsh9Mv',
				short_name : 'ycvTjXaQmGkphVnx',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 61,
				thumb_version : 40,
				thumb_document_id : 8969752283637885987,
				count : 8,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '2IUObo8EPTRtGYDi',
					documents : array(-7134362434787097393),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -322801450223025331,
					keyword : array('Qz3O5fuogKJes2rR'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2276477021875994700,
				),
				$client->document(
					id : -7409757625998030699,
					access_hash : 806982825184127845,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 96,
					mime_type : 'Y0gNyGXK3FrHAjbk',
					size : 1916703729772818975,
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
					dc_id : 38,
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
				installed_date : 78,
				id : 7353808109323788589,
				access_hash : -6280511606570123141,
				title : 'te9Huq7PfriyLnWT',
				short_name : '9tDAnlW5vKqYEiN1',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 87,
				thumb_version : 35,
				thumb_document_id : 6784778658340614895,
				count : 94,
				hash : 0,
			),
		),
	),
);
```