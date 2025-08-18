# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 211

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
			installed_date : 42,
			id : 7667765443198102027,
			access_hash : 7138725837020172583,
			title : 'frEP5DbI1p4d8lO2',
			short_name : '7zTvXI5KoYmbaBNU',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 20,
			thumb_version : 67,
			thumb_document_id : 5416050820950113719,
			count : 86,
			hash : 79,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'N9sbxmKkBYu3DIRe',
				documents : array(-3992650631962808078),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -7609956426116997105,
				keyword : array('4nyUtYTQNmEGzb2H'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -7236033834474862620,
			),
			$client->document(
				id : 8291201988291425927,
				access_hash : -7261391449484162487,
				file_reference : '?ij$?LiveProton/?,?',
				date : 11,
				mime_type : 'mLMYTKQBryEiwtoD',
				size : -2494375240589572485,
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
);
```