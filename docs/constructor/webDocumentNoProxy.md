# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 214

```tl
webDocumentNoProxy#f9c8bcc6 url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocumentNoProxy(
	url : 'https://docs.liveproto.dev',
	size : 55,
	mime_type : '5Mjx7sThcEpzD6Ru',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 97,
			h : 86,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '9UV5k8WjHzGbxRQm',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 55,
				x : 939537.08984375,
				y : -1275251.75390625,
				zoom : -750610.2216796875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 793568.6962890625,
			w : 75,
			h : 2,
			preload_prefix_size : 91,
			video_start_ts : 343297.833984375,
			video_codec : 'LSlVMcRKGX5uTE7s',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 38,
			title : 'SMjITDLuo5vcxqkV',
			performer : '0dEbfrK6DOi2gGxc',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'yG0UiqfmFQsVolp2',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'wlguGPLhNBsHmJDc',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```