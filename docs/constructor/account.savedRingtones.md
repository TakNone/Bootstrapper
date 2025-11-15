# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 218

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
			id : 7715831584582181570,
		),
		$client->document(
			id : 5576045721721831390,
			access_hash : 6881516575273036637,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 68,
			mime_type : 'dLBiTM6JxgcGEtPK',
			size : -6822707568096615119,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '7b0DjAEXoI5mkFuh',
				),
				$client->photoSize(
					type : 'TP0Uwgq6EuHFJtBW',
					w : 71,
					h : 65,
					size : 1,
				),
				$client->photoCachedSize(
					type : 'aJhCfqVejOr3I7cH',
					w : 91,
					h : 93,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'TXwv8HAcdqyxBbJs',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YG3xoRrIiTlX61Es',
					w : 55,
					h : 36,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'QS1jf79DUtBs6ZlE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '6CpuRLF54esO3XhV',
					w : 82,
					h : 97,
					size : 53,
					video_start_ts : 1072500.4853515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6290762765816817407,
					background_colors : array(28),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1708593625599232451,
					background_colors : array(85),
				),
			),
			dc_id : 33,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 23,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'MAUPtn264BoSQCws',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 93,
						x : -349564.4970703125,
						y : 1719218.6162109375,
						zoom : 1255076.552734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 229617.7275390625,
					w : 69,
					h : 70,
					preload_prefix_size : 83,
					video_start_ts : -1041783.9775390625,
					video_codec : 'sXNBSRTkPWK91GEj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 17,
					title : '4L8rk1EIsJeh2ZGo',
					performer : 'lKAQVCR0O2ynwuhv',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'HmAw5xsb4oeXI0DZ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ig3ou8eAnUsar4hb',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```