# groupCallStreamChannel

**Description** : *Info about an RTMP stream in a group call or livestream*

**Layer** : 216

```tl
groupCallStreamChannel#80eb48af channel:int scale:int last_timestamp_ms:long = GroupCallStreamChannel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`int`](type/int) | Channel ID |
| <mark>scale</mark> | [`int`](type/int) | Specifies the duration of the video segment to fetch in milliseconds, by bitshifting 1000 to the right scale times: duration_ms := 1000 >> scale |
| <mark>last_timestamp_ms</mark> | [`long`](type/long) | Last seen timestamp to easily start fetching livestream chunks using inputGroupCallStream |

---

## Type

[GroupCallStreamChannel](type/GroupCallStreamChannel)

---

## Example

```php
$groupCallStreamChannel = $client->groupCallStreamChannel(
	channel : 83,
	scale : 97,
	last_timestamp_ms : 8305113993917107525,
);
```