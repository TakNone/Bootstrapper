# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 216

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 23,
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
				installed_date : 51,
				id : 512923483498457337,
				access_hash : 3995295849668955786,
				title : 'VO9dY6ltvhu5qgLo',
				short_name : 'puxUG9Iw8Hbd2h4C',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 63,
				thumb_version : 16,
				thumb_document_id : 2923043463663674354,
				count : 75,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4285566404432852998,
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
				installed_date : 85,
				id : 9177501586018766203,
				access_hash : 9123725608271338381,
				title : 'XDluP7tFTgn6Yq3U',
				short_name : 'SvB8a2MjLixfzboq',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 61,
				thumb_version : 55,
				thumb_document_id : -3047989966694525475,
				count : 60,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 5381064606041050421,
				),
				$client->document(
					id : -8554674554992965474,
					access_hash : 2889732409038800510,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 28,
					mime_type : 'Ao0MNRXzmKVerjwB',
					size : -8312630420005885598,
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
					dc_id : 90,
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
				installed_date : 83,
				id : 6732630569529601537,
				access_hash : -1964222509489843516,
				title : 'PiF1eVdmgcJI8uM9',
				short_name : 'BTq1ces4PSpI0ZD3',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 52,
				thumb_version : 90,
				thumb_document_id : -2215292288458200937,
				count : 76,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'vr9BAdJpEiZlF2g0',
					documents : array(-2492493038045636447),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6156126937267887406,
					keyword : array('AOyNsXaFzZpvrVwT'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -779871634535417591,
				),
				$client->document(
					id : -3830723947083734669,
					access_hash : -3985618766906197145,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 4,
					mime_type : 'vMGOfzk7nLVc4rQq',
					size : -56198677652675475,
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
					dc_id : 64,
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
				installed_date : 66,
				id : -5271933966904129096,
				access_hash : -7628461316833191826,
				title : 'vgufLAlOyFeENItV',
				short_name : 'bHxSe1dmqOUDvazZ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 84,
				thumb_version : 87,
				thumb_document_id : -3997083610416309611,
				count : 15,
				hash : 0,
			),
		),
	),
);
```