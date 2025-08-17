# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 211

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 84,
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
				installed_date : 55,
				id : 8219178370306320537,
				access_hash : -8188713641384978973,
				title : 'h7W0RGCkmSTrHI3E',
				short_name : 'dDk5eYUZV30xqEsy',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 29,
				thumb_version : 7,
				thumb_document_id : 307586570818897364,
				count : 6,
				hash : 54,
			),
			cover : $client->documentEmpty(
				id : -3228316593873387147,
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
				installed_date : 70,
				id : -1965825233729978356,
				access_hash : -4381099877928931812,
				title : 'ZiP3kFURfoWqgxtp',
				short_name : 'FXqxadTHmP0B3C9p',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 67,
				thumb_version : 4,
				thumb_document_id : 8234038503138912847,
				count : 42,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 5919969465990702028,
				),
				$client->document(
					id : -2871330170905729275,
					access_hash : 2255247631031986214,
					file_reference : '?C?GLiveProto?ˬ (',
					date : 25,
					mime_type : 'HZBI4geLupm5nsJ1',
					size : -1895392816829168260,
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
					dc_id : 12,
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
				installed_date : 37,
				id : 5912131078193307014,
				access_hash : -4848588608119773503,
				title : 'sf1cTtA2iojS7OMK',
				short_name : 'PxVFSbHK7YGkMpcW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 19,
				thumb_version : 55,
				thumb_document_id : -3006828323131902170,
				count : 41,
				hash : 10,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'WFlr4b5hZLtqzkxY',
					documents : array(-5487342531599301935),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 4637913640749268105,
					keyword : array('N9HIqpQcGxzSgbBD'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -9036107242744001652,
				),
				$client->document(
					id : 963263557148101592,
					access_hash : 1122205585302855659,
					file_reference : '?? ??LiveProto?H]?|',
					date : 19,
					mime_type : 'zlbNauKdopnrUcCB',
					size : -3213666340058050666,
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
					dc_id : 4,
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
				installed_date : 99,
				id : 8942130949887438509,
				access_hash : 1348966906441832192,
				title : '9ZU74mPkzGSTb02s',
				short_name : '6DeC2TfHqmndUiB4',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 50,
				thumb_version : 3,
				thumb_document_id : 535182174885795078,
				count : 18,
				hash : 42,
			),
		),
	),
);
```