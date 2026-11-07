# groupCallStreamChannel

**Description** : *Describes an available RTMP stream channel and its current playback timestamp, see playing an RTMP livestream &raquo;*

**Layer** : 229

```tl
groupCallStreamChannel#80eb48af channel:int scale:int last_timestamp_ms:long = GroupCallStreamChannel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`int`](type/int) | Stream channel ID, used as a source of the synthetic unified video source group and as inputGroupCallStream.video_channel when fetching the corresponding video segment |
| <mark>scale</mark> | [`int`](type/int) | Deprecated, ignored by clients »: use the media segment duration hardcoded in clients (1000 milliseconds, i.e. scale = 0) instead. Historically, it specified the duration of the media segment to fetch, obtained in milliseconds by bitshifting 1000 to the right scale times: duration_ms := 1000 >> scale |
| <mark>last_timestamp_ms</mark> | [`long`](type/long) | Last seen timestamp to easily start fetching livestream chunks using inputGroupCallStream |

---

## Type

[GroupCallStreamChannel](type/GroupCallStreamChannel)

---

## Example

```php
$groupCallStreamChannel = $client->groupCallStreamChannel(
	channel : 94,
	scale : 40,
	last_timestamp_ms : 8780035307266389093,
);
```