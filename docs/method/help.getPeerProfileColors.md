# help.getPeerProfileColors

**Description** : *Get the set of accent color palettes » that can be used in profile page backgrounds*

**Layer** : 211

```tl
help.getPeerProfileColors#abcfa9fd hash:int = help.PeerColors;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[help.PeerColors](type/help.PeerColors)

---

## Example

```php
$helpPeerColors = $client->help->getPeerProfileColors(
	hash : 79,
);
```