# documentAttributeVideo

**Description** : *Defines a video*

**Layer** : 218

```tl
documentAttributeVideo#43c57c48 flags:# round_message:flags.0?true supports_streaming:flags.1?true nosound:flags.3?true duration:double w:int h:int preload_prefix_size:flags.2?int video_start_ts:flags.4?double video_codec:flags.5?string = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **round_message** | [`flags.0?true`](type/true) | Whether this is a round video |
| **supports_streaming** | [`flags.1?true`](type/true) | Whether the video supports streaming |
| **nosound** | [`flags.3?true`](type/true) | Whether the specified document is a video file with no audio tracks |
| <mark>duration</mark> | [`double`](type/double) | Duration in seconds |
| <mark>w</mark> | [`int`](type/int) | Video width |
| <mark>h</mark> | [`int`](type/int) | Video height |
| **preload_prefix_size** | [`flags.2?int`](type/int) | Number of bytes to preload when preloading videos (particularly video stories) |
| **video_start_ts** | [`flags.4?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video that should be used as static preview and thumbnail |
| **video_codec** | [`flags.5?string`](type/string) | Codec used for the video, i.e. "h264", "h265", or "av1" |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeVideo(
	round_message : true,
	supports_streaming : true,
	nosound : true,
	duration : 389733.484375,
	w : 13,
	h : 36,
	preload_prefix_size : 10,
	video_start_ts : 1169338.8701171875,
	video_codec : 'Vukh2Lxg7zOmnydw',
);
```