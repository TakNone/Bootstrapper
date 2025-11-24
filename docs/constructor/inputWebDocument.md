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
	size : 56,
	mime_type : '3FPjfJhEzeaLNqbM',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 33,
			h : 98,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'g4GetmdyrN5ZPCV0',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 96,
				x : -1029404.5478515625,
				y : 1216114.58984375,
				zoom : -1026576.119140625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1754199.75390625,
			w : 69,
			h : 35,
			preload_prefix_size : 36,
			video_start_ts : -357600.34765625,
			video_codec : 'f9TIM5rlcZ2e7BkC',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 61,
			title : 'q9CHtSAcrR0XxLB1',
			performer : '4jxcwtMqI7giLEQz',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'HbZMkKYIPhNWaCSv',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'z9YOdsIJFoj32CWq',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```