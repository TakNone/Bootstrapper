# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 214

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether the specified document is a video file with no audio tracks (a GIF animation (even as MPEG4), for example) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | NOTHING |
| **video_timestamp** | [`flags.7?int`](type/int) | NOTHING |
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
	file : $client->inputFile(
		id : 5926320202553587105,
		parts : 15,
		name : 'h62X4yselKZLmqd0',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	thumb : $client->inputFile(
		id : 87556232257194479,
		parts : 39,
		name : 'mf8JxVgjMkrKOChP',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'm0J52HlBKdjZOfvi',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 46,
			h : 4,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'aTbwpBAJi4mRhrke',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 25,
				x : -497068.705078125,
				y : -970821.4033203125,
				zoom : -149495.0556640625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1091411.8544921875,
			w : 94,
			h : 89,
			preload_prefix_size : 44,
			video_start_ts : -517685.7197265625,
			video_codec : 'GPBFm0vALdYqJKRT',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 42,
			title : '6Sl0TcVkHtgneON9',
			performer : 'rHnhZfCbUzSyFqus',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '2roD4FBEtL1djwGS',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'CeGPUXb0ios5haux',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -6319199222451882963,
			access_hash : -2877810176880270413,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 100,
	ttl_seconds : 38,
);
```