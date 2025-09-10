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
			installed_date : 23,
			id : -4699503813593288937,
			access_hash : 779203805050647655,
			title : 'g1P9v0WIY3lCkdzx',
			short_name : 'gnVdu83JFhy67cUv',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 11,
			thumb_version : 16,
			thumb_document_id : -1444395548777197659,
			count : 17,
			hash : 38,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'PdiJ0lDapNXKAuE1',
				documents : array(4893816654757863249),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 6047196077543631448,
				keyword : array('G3BoEXkIRzKJZ6nO'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -1189576611699099433,
			),
			$client->document(
				id : -1220834854623193483,
				access_hash : -883625041671495746,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 70,
				mime_type : 'N5FgPa1079SJfoK8',
				size : -4174470263970138807,
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
				dc_id : 39,
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