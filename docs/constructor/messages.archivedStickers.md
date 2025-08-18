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
	count : 47,
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
				installed_date : 38,
				id : -3074644736081553222,
				access_hash : -5886344950152676619,
				title : 'Xyz1KhaQCp32ekMN',
				short_name : 'DlJbvS4rYfpn5cIj',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 56,
				thumb_version : 26,
				thumb_document_id : 7897538106322536207,
				count : 95,
				hash : 42,
			),
			cover : $client->documentEmpty(
				id : -7200773120812585924,
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
				installed_date : 64,
				id : -7686286468615666076,
				access_hash : -4013193003659780868,
				title : 'GDbCjB3NexHgJYE0',
				short_name : 'YRpWCKHfIOd0rPDe',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 88,
				thumb_version : 5,
				thumb_document_id : -6714919567783309492,
				count : 30,
				hash : 52,
			),
			covers : array(
				$client->documentEmpty(
					id : 3227403142429673043,
				),
				$client->document(
					id : 2498411085867915195,
					access_hash : -7324560756680606247,
					file_reference : 'Ҩ^%?LiveProtoh???p',
					date : 17,
					mime_type : '1cf4AritQVs6ojvT',
					size : -30877337631445966,
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
					dc_id : 54,
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
				installed_date : 44,
				id : 5608525353362818662,
				access_hash : -7007270097943114585,
				title : 'PHRsph1dDF2qroNt',
				short_name : 'Hou25zUOe3CwAvfW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 99,
				thumb_version : 32,
				thumb_document_id : 2967609871071198447,
				count : 81,
				hash : 65,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'J2paYegrTXV8Pwoz',
					documents : array(-2025389597741428296),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -3542810262317922499,
					keyword : array('LJMXtT65CFYjpAH2'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4475458451685961870,
				),
				$client->document(
					id : 8096967259598601710,
					access_hash : 1581933549744415326,
					file_reference : 'e]???LiveProtoK?ı',
					date : 39,
					mime_type : 'SMohUq9HxcJEvPIR',
					size : -5253108296878561096,
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
					dc_id : 59,
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
				installed_date : 50,
				id : 7559587963197412885,
				access_hash : 5672224951255700991,
				title : '74EewcXMpxUITnfP',
				short_name : '1g96jaJmbKOA8rfk',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 43,
				thumb_version : 52,
				thumb_document_id : -2518069798738359302,
				count : 0,
				hash : 34,
			),
		),
	),
);
```