# peerColorCollectible

**Description** : *Represents a color palette &raquo; associated to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 233

```tl
peerColorCollectible#b9c0639a flags:# collectible_id:long gift_emoji_id:long background_emoji_id:long accent_color:int colors:Vector<int> dark_accent_color:flags.0?int dark_colors:flags.1?Vector<int> = PeerColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>collectible_id</mark> | [`long`](type/long) | ID of the collectible gift » |
| <mark>gift_emoji_id</mark> | [`long`](type/long) | Custom emoji ID » of the collectible gift: a single copy of this custom emoji should be displayed as-is (without recoloring it, unlike for background_emoji_id) in the top-right corner of the palette |
| <mark>background_emoji_id</mark> | [`long`](type/long) | Custom emoji ID » used to generate the pattern |
| <mark>accent_color</mark> | [`int`](type/int) | Accent color in RGB24 format, used for reply backgrounds and the user's name in messages |
| <mark>colors</mark> | [`Vector<int>`](type/int) | 1-3 RGB24 colors to be used in the reply strip |
| **dark_accent_color** | [`flags.0?int`](type/int) | Accent color in RGB24 format, used for reply backgrounds and the user's name in messages in dark mode (fallback to accent_color if absent) |
| **dark_colors** | [`flags.1?Vector<int>`](type/int) | 1-3 RGB24 colors to be used in the reply strip in dark mode (fallback to colors if absent) |

---

## Type

[PeerColor](type/PeerColor)

---

## Example

```php
$peerColor = $client->peerColorCollectible(
	collectible_id : 8981554766326764195,
	gift_emoji_id : 5037792145128680975,
	background_emoji_id : 6176459085062546519,
	accent_color : 56,
	colors : array(57),
	dark_accent_color : 94,
	dark_colors : array(66),
);
```