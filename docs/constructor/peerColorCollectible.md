# peerColorCollectible

**Layer** : 216

```tl
peerColorCollectible#b9c0639a flags:# collectible_id:long gift_emoji_id:long background_emoji_id:long accent_color:int colors:Vector<int> dark_accent_color:flags.0?int dark_colors:flags.1?Vector<int> = PeerColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
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
	collectible_id : 5256630532904820731,
	gift_emoji_id : -6819647860901881423,
	background_emoji_id : -662577810683758729,
	accent_color : 80,
	colors : array(18),
	dark_accent_color : 57,
	dark_colors : array(5),
);
```