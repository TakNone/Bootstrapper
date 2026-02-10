# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 222

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : 4473132114191676508,
		),
		$client->document(
			id : 3020270565122911039,
			access_hash : 8629168759498165736,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 34,
			mime_type : 'K0O9lLeMdJiyvGWb',
			size : 4524237222667227379,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'huo7mdb0lGtgwfMV',
				),
				$client->photoSize(
					type : 'EknutIKVOiw4ZaGW',
					w : 74,
					h : 12,
					size : 9,
				),
				$client->photoCachedSize(
					type : 'vpx6azgJMbQZTNt8',
					w : 50,
					h : 76,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'fV8WiYM1mJ4xbvae',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'vgu8OIkdP5ULFMmo',
					w : 70,
					h : 89,
					sizes : array(81),
				),
				$client->photoPathSize(
					type : 'ROsE4oBkQGmS5dTC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '1ChykR0Nj6B9rcZV',
					w : 22,
					h : 32,
					size : 78,
					video_start_ts : -300366.375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -689571907378787622,
					background_colors : array(45),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7931235765657715880,
					background_colors : array(28),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 9,
					h : 56,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'If9FYnHgy4bL05mS',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 80,
						x : -15581.44140625,
						y : 247852.4228515625,
						zoom : 293747.2744140625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1185810.9755859375,
					w : 87,
					h : 18,
					preload_prefix_size : 23,
					video_start_ts : 136451.236328125,
					video_codec : 'odHm47QZjX0JRKEP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : '9vOqwExDQKXUkecW',
					performer : 'zsuUS14THynctwg3',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'JXOtnCWKzG07vP6I',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'MdLumFp9CUoc5fO2',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```