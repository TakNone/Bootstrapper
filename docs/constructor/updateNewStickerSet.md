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
			installed_date : 26,
			id : 3575908897858028636,
			access_hash : -370430150266928912,
			title : '8Aw0NEH1b2zZiCdB',
			short_name : '2DwU6SXneaRsdvTb',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 29,
			thumb_version : 46,
			thumb_document_id : -2060631979719160606,
			count : 6,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : '8gt6MdHYyi3epR4P',
				documents : array(8762683992219283321),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -6040684538519488476,
				keyword : array('C9EnvQbJFesmxf8R'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -6845201250323672501,
			),
			$client->document(
				id : -7856032277500871378,
				access_hash : -6810642929352510241,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 90,
				mime_type : 'n8Ky4cAofmealS2V',
				size : 3917617212706653625,
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
				dc_id : 17,
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