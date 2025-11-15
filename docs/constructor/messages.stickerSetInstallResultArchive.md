# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 216

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
				installed_date : 53,
				id : -846373852942241596,
				access_hash : 4206260494141934400,
				title : '5LphQJxw6dRq7A9l',
				short_name : 'mG4CV1TYAxdq5Mgc',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 46,
				thumb_version : 10,
				thumb_document_id : -3180306785872712810,
				count : 2,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -3455885205712034052,
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
				installed_date : 21,
				id : -3602900181843871560,
				access_hash : -915810559269335420,
				title : '1k4wYc5XB6FI3Qtp',
				short_name : '0NguhWjJCGdOxUlT',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 45,
				thumb_version : 75,
				thumb_document_id : 6015713212639978013,
				count : 52,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -5011746935198245987,
				),
				$client->document(
					id : -4257627612349193817,
					access_hash : -2567808049709488769,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 42,
					mime_type : 'RfJxlpCM1hIGb7di',
					size : -6217087843818728681,
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
					dc_id : 96,
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
				installed_date : 29,
				id : 360931981017885560,
				access_hash : 3521427466648566955,
				title : 'x6TJCvb4Vptw7H0z',
				short_name : 'OxQBUwjo9HdcnSpz',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 45,
				thumb_version : 91,
				thumb_document_id : -2122714817228967494,
				count : 63,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '2JVPFtUOQl30MTYf',
					documents : array(2071279010715637145),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -5543844179917590223,
					keyword : array('ljryJYMnahLP3SEH'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -8505664724108864998,
				),
				$client->document(
					id : -465539487933612776,
					access_hash : 7103009089734312495,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 78,
					mime_type : 'NlHCgqETvuxBzscV',
					size : -5858333330432375177,
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
				installed_date : 46,
				id : -3213650600021755867,
				access_hash : -910656398194620417,
				title : '9xUtYLIC2q0gWX4K',
				short_name : 'SGMpyTOlQDKIokgx',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 46,
				thumb_version : 42,
				thumb_document_id : 6431194709624310716,
				count : 23,
				hash : 0,
			),
		),
	),
);
```