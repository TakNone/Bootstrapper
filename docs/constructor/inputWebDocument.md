# inputWebDocument

**Description** : *The document*

**Layer** : 214

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
	size : 58,
	mime_type : '2qXx87GhDwR0AOme',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 55,
			h : 85,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'Dm2Qv5nzh7pRqSai',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 54,
				x : -127086.744140625,
				y : 1908131.669921875,
				zoom : 1737047.533203125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1550845.8642578125,
			w : 58,
			h : 19,
			preload_prefix_size : 41,
			video_start_ts : 198391.90625,
			video_codec : 'zTv8uEMWUf6iYO4V',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 3,
			title : '7kLtFPpNx4ln3KMh',
			performer : 'L5BSoAJbgPXHan9c',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'VKdX31I8EqjnfrAo',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'yvVKZEUd2hF753MB',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```