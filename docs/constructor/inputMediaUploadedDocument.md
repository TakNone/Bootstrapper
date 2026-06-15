# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 227

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether to send the file as a video even if it doesn't have an audio track (i.e. if set, the documentAttributeAnimated attribute will not be set even for videos without audio) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | Start playing the video at the specified timestamp (seconds) |
| **video_timestamp** | [`flags.7?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing document |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedDocument(
	nosound_video : true,
	force_file : true,
	spoiler : true,
	file : $client->upload_file(path : 'file.png'),
	thumb : $client->upload_file(path : 'file.png'),
	mime_type : 'c1A0huIjSDrV3Jox',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 57,
			h : 39,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'lnWECMXYkGd8Lyem',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 16,
				x : -1306087.2275390625,
				y : -244056.0947265625,
				zoom : 1050410.4794921875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1276157.03515625,
			w : 84,
			h : 45,
			preload_prefix_size : 62,
			video_start_ts : 2092936.5791015625,
			video_codec : 'gektMPO8zBK5b7dq',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 69,
			title : 'E1WZ3LSpokGbV48X',
			performer : 'NJiXce6qF3wB52l4',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'uMKZwjR8eOULSFXP',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'Zs2NDzFK6GgeTS37',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 5329536388917523358,
			access_hash : -2834735379803495592,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 68,
	ttl_seconds : 65,
);
```