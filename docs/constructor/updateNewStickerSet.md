# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 216

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
			installed_date : 16,
			id : 5706515149898589190,
			access_hash : 2567469759501127944,
			title : 'GZQeKUlCWxPMLvIF',
			short_name : 'Fr3mAvnlwj1KS4Ep',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 72,
			thumb_version : 95,
			thumb_document_id : -8812992735464499284,
			count : 14,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'St78J6CxNv1PkIGD',
				documents : array(8109118839230548775),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 3416516823354906459,
				keyword : array('SRnKJ58Iq3XFfPm7'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 579736568187074075,
			),
			$client->document(
				id : -5784794557023923700,
				access_hash : -5556125828243111316,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 25,
				mime_type : '56ieIOJMaNh7jLxv',
				size : 61886879869106076,
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
				dc_id : 53,
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