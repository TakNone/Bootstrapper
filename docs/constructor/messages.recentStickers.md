# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 214

```tl
messages.recentStickers#88d37c56 hash:long packs:Vector<StickerPack> stickers:Vector<Document> dates:Vector<int> = messages.RecentStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Recent stickers |
| <mark>dates</mark> | [`Vector<int>`](type/int) | When was each sticker last used |

---

## Type

[messages.RecentStickers](type/messages.RecentStickers)

---

## Example

```php
$messagesRecentStickers = $client->messages->recentStickers(
	hash : 759748841587603119,
	packs : array(
		$client->stickerPack(
			emoticon : 'PFIY7E4eVdyhNcni',
			documents : array(-6095399254568446768),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -3852858523907923117,
		),
		$client->document(
			id : -747316820556204940,
			access_hash : -5890993420982144707,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 26,
			mime_type : 'yHCOfNGUwzjhd30Y',
			size : 1858658810161593977,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'yX4ubIZScUlnLDRs',
				),
				$client->photoSize(
					type : 'XeOxKjEirRpUI97u',
					w : 69,
					h : 35,
					size : 14,
				),
				$client->photoCachedSize(
					type : 'ib6oSlEO15xKAZmL',
					w : 27,
					h : 75,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'hyN3Jk0P6o1rQICM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'MNg0rGfa8obHtALX',
					w : 42,
					h : 65,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'ufsXCwBb69pz5Pgn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zsSXctxNYw4yPWGO',
					w : 23,
					h : 93,
					size : 45,
					video_start_ts : -216107.5205078125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6208349139946317327,
					background_colors : array(30),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5985777179561476331,
					background_colors : array(84),
				),
			),
			dc_id : 19,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 18,
					h : 3,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rBQlIbH7pKFCAhux',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -30746.41796875,
					w : 19,
					h : 5,
					preload_prefix_size : 51,
					video_start_ts : 746250.0986328125,
					video_codec : 'h0wp8YJWX2mRUaZA',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 22,
					title : 'Un8FRMcrqySLAJ7T',
					performer : 'xPqRc1dWthv3GBzs',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xzGpHl8hJKULW1d5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Z9h1N2z64JUCoDlL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(61),
);
```