# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 233

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
		x : -803167.2548828125,
		y : -170066.5576171875,
		w : -2002410.5810546875,
		h : 1199538.025390625,
		rotation : 1801036.556640625,
		radius : 16367.7001953125,
	),
	channel_id : -1013745821594615515,
	msg_id : 60,
);
```