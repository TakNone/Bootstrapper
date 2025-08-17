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
			installed_date : 87,
			id : 7690963866199619506,
			access_hash : 3905690277603087358,
			title : 'X32kUrAQ7hLMxvFR',
			short_name : 'LhXm3qRUNot7WdIG',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 1,
			thumb_version : 43,
			thumb_document_id : -3691598515125161307,
			count : 10,
			hash : 30,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'uVmdcDnt956heSgU',
				documents : array(4041724725412721115),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 4997331585858515839,
				keyword : array('RlbO83zFc501ABaq'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -4569945763211083496,
			),
			$client->document(
				id : 9201095431343626167,
				access_hash : -3646959002796528284,
				file_reference : '\'E?Y?LiveProto?2<?',
				date : 35,
				mime_type : 'hGk3JEqNCIw7UyzO',
				size : -6996235584466144483,
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
				dc_id : 47,
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