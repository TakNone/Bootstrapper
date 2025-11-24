# peerColorCollectible

**Layer** : 218

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
	collectible_id : 7939053741420336969,
	gift_emoji_id : -5200736072349892491,
	background_emoji_id : 3639638122213663627,
	accent_color : 9,
	colors : array(88),
	dark_accent_color : 70,
	dark_colors : array(91),
);
```