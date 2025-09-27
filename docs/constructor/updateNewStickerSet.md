# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 214

```tl
updateNewStickerSet#688a30aa stickerset:messages.StickerSet = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`messages.StickerSet`](type/messages.StickerSet) | The installed stickerset |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewStickerSet(
	stickerset : $client->messages->stickerSet(
		set : $client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 92,
			id : 3437765461571092391,
			access_hash : 4631082022258825591,
			title : 'i7nbqJ5NYFjcPhVr',
			short_name : '81zaCmKAwTjrPtne',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 1,
			thumb_version : 36,
			thumb_document_id : -6234318005290007621,
			count : 65,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'lT9hdn6y7iCcEtbY',
				documents : array(2438939226666859630),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -2229863630268244542,
				keyword : array('nSWZ8FAxBebL3NPE'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -6089504087475165061,
			),
			$client->document(
				id : -5465480583058700992,
				access_hash : 4729469276695034756,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 91,
				mime_type : 'ur4UiXLoxm91CEq6',
				size : 7184238781641910966,
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
);
```