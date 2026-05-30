# videoSize

**Description** : *An animated profile picture in MPEG4 format*

**Layer** : 222

```tl
videoSize#de33b094 flags:# type:string w:int h:int size:int video_start_ts:flags.0?double = VideoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>type</mark> | [`string`](type/string) | u for animated profile pictures, and v for trimmed and downscaled video previews |
| <mark>w</mark> | [`int`](type/int) | Video width |
| <mark>h</mark> | [`int`](type/int) | Video height |
| <mark>size</mark> | [`int`](type/int) | File size |
| **video_start_ts** | [`flags.0?double`](type/double) | Timestamp that should be shown as static preview to the user (seconds) |

---

## Type

[VideoSize](type/VideoSize)

---

## Example

```php
$videoSize = $client->videoSize(
	type : 'ZCvHhFqp90Dj7Ltd',
	w : 5,
	h : 95,
	size : 6,
	video_start_ts : -1497404.40234375,
);
```