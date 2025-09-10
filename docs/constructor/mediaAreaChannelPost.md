# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 214

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
		x : 1096174.6884765625,
		y : -1422288.826171875,
		w : 241771.96484375,
		h : 235377.0888671875,
		rotation : 1304417.39453125,
		radius : 1202705.052734375,
	),
	channel_id : -8445973565514734328,
	msg_id : 46,
);
```