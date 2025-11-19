# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 218

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 8,
		id : 6771127729163000120,
		access_hash : -2155959292815420602,
		title : 'VnBNfkbqxhSKzMEa',
		short_name : 'XaAhOz6dngerxoi5',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '0NZ8Bkejr2PKcRom',
			),
			$client->photoSize(
				type : 'p3MXxuyZbnRvUfzK',
				w : 62,
				h : 41,
				size : 91,
			),
			$client->photoCachedSize(
				type : 'XWmn94z3s5NGEfbC',
				w : 54,
				h : 22,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '6NbuLTQYP5eSr8w0',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'dLJzVARPQHZwsGcX',
				w : 87,
				h : 24,
				sizes : array(0),
			),
			$client->photoPathSize(
				type : '5gSzt2C3cUKkI708',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 92,
		thumb_version : 85,
		thumb_document_id : 4603287074408331157,
		count : 71,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 2891762222802801251,
		),
		$client->document(
			id : -3168976681413124755,
			access_hash : 3590367430467842257,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 45,
			mime_type : 'T65I91moPsZc3uGF',
			size : 8005850394134051507,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Fhu7RX6HMbletqIv',
				),
				$client->photoSize(
					type : 'BmkYgK9jntz4cUTC',
					w : 44,
					h : 40,
					size : 1,
				),
				$client->photoCachedSize(
					type : '4esy6W1HUmVolYv7',
					w : 3,
					h : 76,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'LKphyPY0sWSok3EU',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7QlSZgL3h4oBcbt8',
					w : 75,
					h : 5,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : '30ABNZJQtlMOwThj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Q8Xnrtl0pFCaqiJD',
					w : 7,
					h : 5,
					size : 83,
					video_start_ts : -2063127.89453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1595938764870545730,
					background_colors : array(74),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2606786096714438733,
					background_colors : array(91),
				),
			),
			dc_id : 40,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 12,
					h : 19,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'KhYq4WmXAxlNvUow',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 52,
						x : 625987.0673828125,
						y : -1837303.736328125,
						zoom : 2006053.46875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 717091.1025390625,
					w : 78,
					h : 8,
					preload_prefix_size : 51,
					video_start_ts : 1288991.4765625,
					video_codec : 'Vcq0J3stHjfXwKGL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : 'TN8nqtoi962AQchH',
					performer : 'mC530WLlKiQ9yS8P',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gPLufwJQsaFm6okq',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Iw19Li0t5mflNnhq',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```