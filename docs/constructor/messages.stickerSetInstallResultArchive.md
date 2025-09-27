# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 216

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
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
				installed_date : 64,
				id : 8245507447082694303,
				access_hash : -888235458981451498,
				title : 'EGP8vXKaYCrgy1Zo',
				short_name : 'v61twMiSBPUxeQKD',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 4,
				thumb_version : 41,
				thumb_document_id : 4904335035431175743,
				count : 25,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -6203103514724392180,
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
				installed_date : 54,
				id : -949083560493906246,
				access_hash : -9137954548856656685,
				title : 'LfS43TIlyXwPJDRj',
				short_name : 'RrD5mw9CsN1LShHO',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 91,
				thumb_version : 23,
				thumb_document_id : 3065650667676775494,
				count : 13,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 2424178114860670402,
				),
				$client->document(
					id : 8982097944146529708,
					access_hash : 5580931419782986318,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 20,
					mime_type : 'lP7aRtDZCrnJch0K',
					size : -8839564220776004622,
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
					dc_id : 60,
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
				installed_date : 28,
				id : 5818999536267253169,
				access_hash : -3293877504629744920,
				title : 'vL0T9saiEy2614VP',
				short_name : '8tkY4nFTRb1WmpiL',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 100,
				thumb_version : 91,
				thumb_document_id : 1919182359131641624,
				count : 81,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '0VJkmMZI72bWqNcn',
					documents : array(1923909002231703770),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 2623566360682784283,
					keyword : array('cP06fCYa4eQFpx18'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 7866808958502541347,
				),
				$client->document(
					id : 3051761250566042934,
					access_hash : 5897601887786242836,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 83,
					mime_type : 'ZQsV3pqKzDWMOg6A',
					size : -6133687908387472925,
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
					dc_id : 29,
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
				installed_date : 60,
				id : -6274763871490615262,
				access_hash : -3533967906062678000,
				title : 'jpMnq5236rBC7mdu',
				short_name : 'S2jlFZzCr60MvfoG',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 68,
				thumb_version : 98,
				thumb_document_id : 6193895574437952961,
				count : 93,
				hash : 0,
			),
		),
	),
);
```