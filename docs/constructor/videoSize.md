# videoSize

**Description** : *An animated profile picture in MPEG4 format*

**Layer** : 211

```tl
videoSize#de33b094 flags:# type:string w:int h:int size:int video_start_ts:flags.0?double = VideoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	type : 'YKGjQZbBkMzViC6h',
	w : 70,
	h : 61,
	size : 65,
	video_start_ts : -928593.119140625,
);
```