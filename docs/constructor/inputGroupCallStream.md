# inputGroupCallStream

**Description** : *Chunk of a livestream*

**Layer** : 216

```tl
inputGroupCallStream#598a92a flags:# call:InputGroupCall time_ms:long scale:int video_channel:flags.0?int video_quality:flags.0?int = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Livestream info |
| <mark>time_ms</mark> | [`long`](type/long) | Timestamp in milliseconds |
| <mark>scale</mark> | [`int`](type/int) | Specifies the duration of the video segment to fetch in milliseconds, by bitshifting 1000 to the right scale times: duration_ms := 1000 >> scale |
| **video_channel** | [`flags.0?int`](type/int) | Selected video channel |
| **video_quality** | [`flags.0?int`](type/int) | Selected video quality (0 = lowest, 1 = medium, 2 = best) |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputGroupCallStream(
	call : $client->inputGroupCall(
		id : 3448302410951548413,
		access_hash : -1612735288775619043,
	),
	time_ms : -1973961286032924595,
	scale : 28,
	video_channel : 40,
	video_quality : 51,
);
```