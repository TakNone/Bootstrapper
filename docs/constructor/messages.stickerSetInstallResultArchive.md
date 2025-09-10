# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 214

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
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
				installed_date : 88,
				id : 1282495391322074596,
				access_hash : 3086935207760469533,
				title : 'nCt67eBXJHuL4xh1',
				short_name : '48hOfVMbeDRWUHB6',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 8,
				thumb_version : 28,
				thumb_document_id : 7793013543679947684,
				count : 46,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 9069602995186831167,
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
				installed_date : 52,
				id : 8827867222319541462,
				access_hash : 5437096455550628852,
				title : 'pV12uRcl4IY0Ekog',
				short_name : 'loeXGyAh43BLwZNW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 53,
				thumb_version : 9,
				thumb_document_id : -5635674540280836078,
				count : 63,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 639897117291751427,
				),
				$client->document(
					id : -5246630440272609167,
					access_hash : 1244086256317462576,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 48,
					mime_type : 'zyMe6Swq78phTnl2',
					size : 1748821754859209531,
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
					dc_id : 1,
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
				installed_date : 67,
				id : -3751913999044932260,
				access_hash : -4955057423993909404,
				title : 'sweSQCgXqWUHaMzy',
				short_name : 'PiZGQnf46YBsC3TS',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 7,
				thumb_version : 60,
				thumb_document_id : 2851648172519594400,
				count : 55,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'jGzl9UBtSiFaKq4T',
					documents : array(-804138950665465626),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -2151996464616075847,
					keyword : array('R1nrFYT3DkWMolxe'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5591979443787635515,
				),
				$client->document(
					id : 6071105339906615246,
					access_hash : -7321754121652391769,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'HfDt7GRvi3kSdUI5',
					size : -6225674081279480239,
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
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 4,
				id : 5338199737245388971,
				access_hash : 1130647475106468026,
				title : 'hEDwQgAvVUFkRx7Z',
				short_name : 'sCofkyluIQ7XViFr',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 77,
				thumb_version : 65,
				thumb_document_id : -27943398803451981,
				count : 96,
				hash : 0,
			),
		),
	),
);
```