# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 216

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
	count : 83,
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
				installed_date : 77,
				id : 4875520629476707673,
				access_hash : -8157540419915395901,
				title : '4ZILzQ5YShVu7Gcl',
				short_name : '5UDH1vWphLNrPKgj',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 61,
				thumb_version : 58,
				thumb_document_id : -7996078098302833494,
				count : 45,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 3035118957209764588,
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
				installed_date : 75,
				id : -5553556150266895212,
				access_hash : -3548151271280038649,
				title : 'ZzKCkc7hPyw45pTo',
				short_name : 'm3i5PjaTo4FY6dLC',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 45,
				thumb_version : 36,
				thumb_document_id : -1284032929200873164,
				count : 9,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -9150673612597488204,
				),
				$client->document(
					id : -6464567301124367238,
					access_hash : 3964671495253363221,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 70,
					mime_type : 'VoWKPxCGs1YbDkeZ',
					size : -9111131492106956050,
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
					dc_id : 25,
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
				installed_date : 43,
				id : -4437703015699764462,
				access_hash : 7642376886367576963,
				title : 'b4lhmdvFTG8iKLan',
				short_name : 'UpV80aDkvQ37lgFJ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 60,
				thumb_version : 61,
				thumb_document_id : 9057393019247378384,
				count : 31,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '5WqLFrbP2dnomkuK',
					documents : array(6258253679940926470),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 2322640255777506562,
					keyword : array('jhal4KHQRNqv29sW'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -4803296807943250293,
				),
				$client->document(
					id : -2890578624963612428,
					access_hash : 810153490075854819,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 97,
					mime_type : 'DvdGAy36NHPY5Oiq',
					size : -6608666890966603899,
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
					dc_id : 74,
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
				installed_date : 14,
				id : -3724113834520351642,
				access_hash : -4102101734952381013,
				title : 'EviAP3wJmBqMHeIk',
				short_name : 'qAnc1RCgtFPZ3ETX',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 77,
				thumb_version : 30,
				thumb_document_id : 2878676291445016140,
				count : 53,
				hash : 0,
			),
		),
	),
);
```