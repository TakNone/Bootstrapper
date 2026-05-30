# peerColorCollectible

**Layer** : 225

```tl
peerColorCollectible#b9c0639a flags:# collectible_id:long gift_emoji_id:long background_emoji_id:long accent_color:int colors:Vector<int> dark_accent_color:flags.0?int dark_colors:flags.1?Vector<int> = PeerColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>collectible_id</mark> | [`long`](type/long) | NOTHING |
| <mark>gift_emoji_id</mark> | [`long`](type/long) | NOTHING |
| <mark>background_emoji_id</mark> | [`long`](type/long) | NOTHING |
| <mark>accent_color</mark> | [`int`](type/int) | NOTHING |
| <mark>colors</mark> | [`Vector<int>`](type/int) | NOTHING |
| **dark_accent_color** | [`flags.0?int`](type/int) | NOTHING |
| **dark_colors** | [`flags.1?Vector<int>`](type/int) | NOTHING |

---

## Type

[PeerColor](type/PeerColor)

---

## Example

```php
$peerColor = $client->peerColorCollectible(
	collectible_id : 7469721664047470496,
	gift_emoji_id : -529147723772310596,
	background_emoji_id : -2137176658622156836,
	accent_color : 7,
	colors : array(14),
	dark_accent_color : 64,
	dark_colors : array(35),
);
```