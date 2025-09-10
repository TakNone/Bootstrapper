# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 214

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
	hash : -3677092024502693932,
	ringtones : array(
		$client->documentEmpty(
			id : 7826343201178486870,
		),
		$client->document(
			id : 7248461852274440436,
			access_hash : 7689606101178393197,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 59,
			mime_type : 'QNR3EDxpkedKw4JO',
			size : -2750130429734692416,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'o2CANVgR6IBOXzFf',
				),
				$client->photoSize(
					type : 'a3TxEytDkKoF4XH8',
					w : 57,
					h : 84,
					size : 68,
				),
				$client->photoCachedSize(
					type : '0RJ3ZH2yIKpsXNoj',
					w : 1,
					h : 96,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '7YdgWZAbqOJi1K6N',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'UhBgxwHq1NkTI6bp',
					w : 50,
					h : 61,
					sizes : array(85),
				),
				$client->photoPathSize(
					type : '4qx7AOlSV9rvTZeQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lNIosRxKHdXhS4J8',
					w : 40,
					h : 12,
					size : 32,
					video_start_ts : 935881.6103515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2547893181036382244,
					background_colors : array(64),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 6551090791515747,
					background_colors : array(23),
				),
			),
			dc_id : 96,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'dRrqzc1eoZ8bTYBu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 287414.5966796875,
					w : 28,
					h : 74,
					preload_prefix_size : 40,
					video_start_ts : 399593.888671875,
					video_codec : 'N8qi5JQHIuz7mMn0',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 32,
					title : 'D1iy8qmPbCYo2TNL',
					performer : 'sWXeGSziby0LD1RC',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IXpx5RvCAwE27OSz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'YQT2ndBsVhaSK8gi',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```