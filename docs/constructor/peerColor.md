# peerColor

**Description** : *Represents a color palette &raquo;*

**Layer** : 214

```tl
peerColor#b54b5acf flags:# color:flags.0?int background_emoji_id:flags.1?long = PeerColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **color** | [`flags.0?int`](type/int) | Color palette ID, see here » for more info; if not set, the default palette should be used |
| **background_emoji_id** | [`flags.1?long`](type/long) | Optional custom emoji ID used to generate the pattern |

---

## Type

[PeerColor](type/PeerColor)

---

## Example

```php
$peerColor = $client->peerColor(
	color : 92,
	background_emoji_id : -2644628163529336703,
);
```