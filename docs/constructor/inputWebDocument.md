# inputWebDocument

**Description** : *The document*

**Layer** : 218

```tl
inputWebDocument#9bed434d url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = InputWebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Remote document URL to be downloaded using the appropriate method |
| <mark>size</mark> | [`int`](type/int) | Remote file size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[InputWebDocument](type/InputWebDocument)

---

## Example

```php
$inputWebDocument = $client->inputWebDocument(
	url : 'https://docs.liveproto.dev',
	size : 51,
	mime_type : '7ZORIoq6mTvLQSdi',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 37,
			h : 75,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'Iesl6UNRgYfph9no',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 56,
				x : -248596.8251953125,
				y : 737360.5908203125,
				zoom : -1567223.7607421875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1343388.681640625,
			w : 55,
			h : 38,
			preload_prefix_size : 37,
			video_start_ts : 93613.2314453125,
			video_codec : 'Y4tLhEuBUgqd9Dz8',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : 'm3NzvUujYx61tbli',
			performer : 'oNnFp5T2ZtSk6Y97',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'VzbRWtUy9c348hj2',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'LiPzWxEIaJ2GYOm4',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```