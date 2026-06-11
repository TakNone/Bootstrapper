# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 227

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
	count : 49,
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
				installed_date : 42,
				id : 7069665029985734303,
				access_hash : -7487367638136206183,
				title : 'S3n4IyXOfBA5iQa1',
				short_name : 'mkX8hHp2BiZ7lNYP',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'aphdXQ8Y3RVDxPlE',
					),
					$client->photoSize(
						type : 'kyAcvBgeDu9FJO0H',
						w : 65,
						h : 98,
						size : 85,
					),
					$client->photoCachedSize(
						type : 'v4RMoAPyHYnfmx79',
						w : 35,
						h : 96,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tW9gz4skqfcpedR6',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'HOQmGJpFYXkvLegi',
						w : 4,
						h : 59,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : 'Gt6ObX5FlEnVafCY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 52,
				thumb_version : 85,
				thumb_document_id : 3059464793081349868,
				count : 64,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -7427661263025939913,
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
				installed_date : 31,
				id : -8365658740899358304,
				access_hash : -3549442187357308981,
				title : 'fj9kuJClxrXvzYnI',
				short_name : 'O6S8aH2no7ZzdAhp',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '5V2ZbxQDIAu1cha0',
					),
					$client->photoSize(
						type : 'iLEFqVdOwuQGnM6b',
						w : 13,
						h : 51,
						size : 69,
					),
					$client->photoCachedSize(
						type : 'cNLmD4GxwnM6oBUE',
						w : 87,
						h : 88,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ClAmYTybwU5N2sJz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'uMohAWEzbsJyLUlx',
						w : 96,
						h : 5,
						sizes : array(100),
					),
					$client->photoPathSize(
						type : 'zpyZPeXFmGo3BMLh',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 68,
				thumb_version : 82,
				thumb_document_id : 8603875237042074536,
				count : 3,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7817093499162123139,
				),
				$client->document(
					id : -1645883178190532616,
					access_hash : 595338786209166191,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 23,
					mime_type : 'rczdCaXpskZvTGfn',
					size : -4050418273734634562,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'YDOzeNjb538KV1ZH',
						),
						$client->photoSize(
							type : '1qpC7iNZeAd5joUy',
							w : 26,
							h : 81,
							size : 6,
						),
						$client->photoCachedSize(
							type : 'C3UYyBkuKoVjN7rg',
							w : 83,
							h : 25,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'osvfNjJUF9kgZdnC',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '6dH5BUC9oSaEznXT',
							w : 96,
							h : 16,
							sizes : array(26),
						),
						$client->photoPathSize(
							type : 'aidkvmP0xEhJHITf',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'JKFOtuwrnexv6Q3a',
							w : 76,
							h : 68,
							size : 83,
							video_start_ts : 1763159.6787109375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2143311567762148467,
							background_colors : array(23),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8125979121231120521,
							background_colors : array(36),
						),
					),
					dc_id : 25,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 53,
							h : 15,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'soAurizQbHO3yVFR',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1045213.8955078125,
							w : 63,
							h : 25,
							preload_prefix_size : 91,
							video_start_ts : 1718476.865234375,
							video_codec : 'DuKsAtr9UzTvgHcO',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 86,
							title : 'ijQogrEqVbKc65ts',
							performer : 'UB4PhRMfuqmLHbgX',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'dLD4qRwTEPyhgIxS',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'tYEe5h1ga24zmlnP',
							stickerset : $client->inputStickerSetEmpty(...),
						),
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
				installed_date : 16,
				id : -7079283660403872020,
				access_hash : 5288216689601829047,
				title : 'mG4t3yMQ0EeXuRxC',
				short_name : 'Jba1PZ2ckQGvMgij',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'fJTuZbRvWB96YacM',
					),
					$client->photoSize(
						type : 'DZS3oruCU2WtdkYO',
						w : 54,
						h : 30,
						size : 6,
					),
					$client->photoCachedSize(
						type : 'DLWrFuhAvCjSM8yx',
						w : 24,
						h : 59,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'e185m4Ba72Wkdw6X',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'QH7c4Pb1OuVMiDgJ',
						w : 49,
						h : 13,
						sizes : array(66),
					),
					$client->photoPathSize(
						type : 'gwaT5Q6MClLxmcpR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 34,
				thumb_version : 89,
				thumb_document_id : 6004517168548633948,
				count : 77,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'UEqJzoDCGyTbkQvp',
					documents : array(7902273137421415614),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8010174049295253867,
					keyword : array('k9FQgmuB4pUaM8XG'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -1753567832483098143,
				),
				$client->document(
					id : 2504951453192391150,
					access_hash : -4980682459623086756,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 75,
					mime_type : 'cA1kJPxemE4nuw9F',
					size : -1959626664569173805,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '0leZLKH2fGMwCO4D',
						),
						$client->photoSize(
							type : 'tN5epnMSgJvZLF0o',
							w : 3,
							h : 87,
							size : 4,
						),
						$client->photoCachedSize(
							type : 'E6mj8zRQiKpAkJ3P',
							w : 57,
							h : 32,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'EW3Rh2LKnzQwXdue',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'P3qEyTmve5jxXgUW',
							w : 23,
							h : 0,
							sizes : array(5),
						),
						$client->photoPathSize(
							type : 'qZsIlRT8b9BGHnwD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'bvjBuqloASzh1ReI',
							w : 36,
							h : 62,
							size : 67,
							video_start_ts : 139858.740234375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 50176449941820693,
							background_colors : array(85),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -987720034417532640,
							background_colors : array(23),
						),
					),
					dc_id : 69,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 60,
							h : 76,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'HRAUBDQ8SxYht0MC',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 74952.5078125,
							w : 70,
							h : 54,
							preload_prefix_size : 47,
							video_start_ts : 1245854.4658203125,
							video_codec : 'lvaj1GLOKDnTpQeE',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 99,
							title : 'fwLYp79r5nqiOou1',
							performer : '52yO7IArukFGNgKR',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'NcslhMvaEw23CA5z',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'BYCZl1bAkgqzw0my',
							stickerset : $client->inputStickerSetEmpty(...),
						),
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
				installed_date : 3,
				id : -813314709228127886,
				access_hash : -8237276882906909881,
				title : 'ELh98v7ZBwaTyIme',
				short_name : 'zlgiHO6YZR0yI73r',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'gpf2njBDacsNW9Am',
					),
					$client->photoSize(
						type : 'It8ZXFeDUR4m1o5A',
						w : 70,
						h : 67,
						size : 39,
					),
					$client->photoCachedSize(
						type : 'keFzcgdhsKEL63Pm',
						w : 17,
						h : 96,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'BPOJbwG57Laf38dl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'o1jybpvfNRWXAK0r',
						w : 10,
						h : 8,
						sizes : array(73),
					),
					$client->photoPathSize(
						type : 'x3vLSknuqt9UNKJC',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 3,
				thumb_version : 1,
				thumb_document_id : 4780070911314135017,
				count : 6,
				hash : 0,
			),
		),
	),
);
```