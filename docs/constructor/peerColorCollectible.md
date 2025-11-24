# peerColorCollectible

**Layer** : 218

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
	collectible_id : -1344616943424238503,
	gift_emoji_id : 253844497221284623,
	background_emoji_id : 2534705544535622790,
	accent_color : 74,
	colors : array(69),
	dark_accent_color : 89,
	dark_colors : array(50),
);
```