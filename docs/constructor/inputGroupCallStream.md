# inputGroupCallStream

**Description** : *Identifies a media chunk of an RTMP\-mode video chat, livestream or live story, see playing an RTMP livestream &raquo;*

**Layer** : 233

```tl
inputGroupCallStream#598a92a flags:# call:InputGroupCall time_ms:long scale:int video_channel:flags.0?int video_quality:flags.0?int = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | RTMP-mode group call |
| <mark>time_ms</mark> | [`long`](type/long) | Timestamp of the chunk to fetch, in milliseconds |
| <mark>scale</mark> | [`int`](type/int) | Specifies the duration of the media segment to fetch in milliseconds, by bitshifting 1000 to the right scale times: duration_ms := 1000 >> scale |
| **video_channel** | [`flags.0?int`](type/int) | groupCallStreamChannel.channel value of the video channel to fetch; unified video uses channel 1. Omit together with video_quality to fetch audio |
| **video_quality** | [`flags.0?int`](type/int) | Selected video quality (0 = lowest, 1 = medium, 2 = best) |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputGroupCallStream(
	call : $client->inputGroupCall(
		id : 4551051642405894599,
		access_hash : 990934724543993404,
	),
	time_ms : 8389702380078028798,
	scale : 34,
	video_channel : 6,
	video_quality : 100,
);
```