# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 214

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
	count : 21,
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
				installed_date : 60,
				id : -8334402219371478235,
				access_hash : -6691637995831346200,
				title : '48W9P0TBjRXuE5zG',
				short_name : 'zkPei17SdXGZf5Es',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 12,
				thumb_version : 10,
				thumb_document_id : 4185876536090176960,
				count : 96,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -1244631705428360784,
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
				installed_date : 82,
				id : -3464402620105980708,
				access_hash : 7483935863429053530,
				title : 'yXIAz9Oc2lbRv4WL',
				short_name : 'B7hXfRUF2k3aCHEc',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 4,
				thumb_version : 52,
				thumb_document_id : -4510846350387858490,
				count : 44,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -3670423226759492419,
				),
				$client->document(
					id : 4582704806841129155,
					access_hash : -3054469595182114991,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 59,
					mime_type : 'Jpv9l14jMbqAX6gB',
					size : 722943196672030765,
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
					dc_id : 78,
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
				installed_date : 76,
				id : 5969098992793613349,
				access_hash : -4965577446917506878,
				title : 'nuiCUBKJ7DrwXNfY',
				short_name : 'lATb7vnrzhsxMUBw',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 10,
				thumb_version : 93,
				thumb_document_id : 4955983033319318604,
				count : 64,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'mlRZiFT27KNnpz1A',
					documents : array(-4734813246526522307),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -1663018639417464089,
					keyword : array('ft3Xl0GiTJLck8vO'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5235140461347577347,
				),
				$client->document(
					id : -2911025072726390372,
					access_hash : 9076471156831337138,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 81,
					mime_type : 'UsXqjMRiSJkpygDA',
					size : 2524788003621251623,
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
				installed_date : 10,
				id : 7774974714665034457,
				access_hash : -5696429096215172462,
				title : 'kegT54LzpVhs6mix',
				short_name : 'BYHU7FlCGc2JTkIz',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 45,
				thumb_version : 66,
				thumb_document_id : 5721880388184780965,
				count : 49,
				hash : 0,
			),
		),
	),
);
```