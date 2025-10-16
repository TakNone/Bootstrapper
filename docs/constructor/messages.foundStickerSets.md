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
				installed_date : 11,
				id : 4007716295295262804,
				access_hash : -2809041732212405853,
				title : '2dGZ7JEa1petgCnV',
				short_name : 'qIEoWgdXrK1TUReP',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 99,
				thumb_version : 26,
				thumb_document_id : 5674021281701559352,
				count : 16,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -2656227406272371859,
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
				installed_date : 99,
				id : -3153979620585320932,
				access_hash : -1164214166961199573,
				title : 'VA3KWujyfdinIort',
				short_name : '1cE2aYIoQCvyH0tU',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 86,
				thumb_version : 48,
				thumb_document_id : 9135239156133800269,
				count : 11,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -2223705609391488005,
				),
				$client->document(
					id : 4440411743699165808,
					access_hash : 150075895977713980,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 6,
					mime_type : 'qdZoBP6NstKaDeAG',
					size : -3653568728670063114,
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
					dc_id : 76,
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
				installed_date : 50,
				id : -1236032049583807348,
				access_hash : 7568700144166918010,
				title : 'nYHofQ6bdzWqD7FT',
				short_name : 'AwrjKYMHBtnClOXg',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 2,
				thumb_version : 71,
				thumb_document_id : -7469596606998564948,
				count : 91,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'n6J4Hw5UqXIDLvCi',
					documents : array(-7018511779155307028),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -3708609589111017093,
					keyword : array('Ku0q75CEeSJsUVrb'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5758814605900693089,
				),
				$client->document(
					id : 3580440183044789569,
					access_hash : -9216850887566771761,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 35,
					mime_type : 'luFPJRk24xIQWtAD',
					size : 2547380780283886957,
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
					dc_id : 86,
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
				installed_date : 55,
				id : 6035248794777828488,
				access_hash : -195755067218805738,
				title : 'tozPKQdNIDw7jLeg',
				short_name : 'SiOIbZoaljAtdkLT',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 0,
				thumb_version : 36,
				thumb_document_id : 2883968844812944043,
				count : 5,
				hash : 0,
			),
		),
	),
);
```