# help.peerColors

**Description** : *Contains info about multiple color palettes »*

**Layer** : 211

```tl
help.peerColors#f8ed08 hash:int colors:Vector<help.PeerColorOption> = help.PeerColors;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>colors</mark> | [`Vector<help.PeerColorOption>`](type/help.PeerColorOption) | Usable color palettes |

---

## Type

[help.PeerColors](type/help.PeerColors)

---

## Example

```php
$helpPeerColors = $client->help->peerColors(
	hash : 91,
	colors : array(
		$client->help->peerColorOption(
			hidden : true,
			color_id : 27,
			colors : $client->help->peerColorSet(
				colors : array(54),
			),
			dark_colors : $client->help->peerColorSet(
				colors : array(66),
			),
			channel_min_level : 22,
			group_min_level : 55,
		),
	),
);
```