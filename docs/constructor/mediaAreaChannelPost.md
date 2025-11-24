# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 218

```tl
mediaAreaChannelPost#770416af coordinates:MediaAreaCoordinates channel_id:long msg_id:int = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>channel_id</mark> | [`long`](type/long) | The channel that posted the message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the channel message |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaChannelPost(
	coordinates : $client->mediaAreaCoordinates(
		x : 1456983.69921875,
		y : -734309.8798828125,
		w : -278394.8466796875,
		h : 790030.9814453125,
		rotation : -1198154.697265625,
		radius : 300555.2060546875,
	),
	channel_id : 6126504600219068858,
	msg_id : 58,
);
```