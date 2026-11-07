# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 233

```tl
account.savedRingtones#c1e92cc5 hash:long ringtones:Vector<Document> = account.SavedRingtones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>ringtones</mark> | [`Vector<Document>`](type/Document) | Saved notification sounds |

---

## Type

[account.SavedRingtones](type/account.SavedRingtones)

---

## Example

```php
$accountSavedRingtones = $client->account->savedRingtones(
	hash : 0,
	ringtones : array(
		$client->documentEmpty(
			id : 8812946118884145722,
		),
		$client->document(
			id : 1564973497511925098,
			access_hash : -3034836635203338580,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			mime_type : 'tZMSaCULeJpo1Vs0',
			size : -2906927564505887339,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5ktKNpCrLhv8bnBl',
				),
				$client->photoSize(
					type : '3Si80jXkYGMQzExl',
					w : 8,
					h : 77,
					size : 73,
				),
				$client->photoCachedSize(
					type : 'sA9XfCGPanyuNQUB',
					w : 68,
					h : 98,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'NjQ8y6FoXzZKdtUO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'VBb4Mi2kEsNhDjGv',
					w : 23,
					h : 1,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : '0MgJdR9zZqSj4pmh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fVox6h8uPEKINRCs',
					w : 2,
					h : 91,
					size : 58,
					video_start_ts : 1595750.763671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3830663827928106112,
					background_colors : array(74),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3649256513720325134,
					background_colors : array(15),
				),
			),
			dc_id : 85,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 11,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'SMvu9NlKk2exiHW7',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 8,
						x : 1463487.1533203125,
						y : -2067881.8935546875,
						zoom : -1761257.23046875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 475031.89453125,
					w : 48,
					h : 14,
					preload_prefix_size : 100,
					video_start_ts : -256563.3701171875,
					video_codec : 'EwQmMBrWISUG9s8V',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 70,
					title : 'h9tQbXoPNUWkHsiL',
					performer : 'DyPXNa3AGjJZ7bkr',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'zo2mSvKFX6N5faZg',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'kzhiSZNg9vnEUeXY',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```