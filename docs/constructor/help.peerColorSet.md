# help.peerColorSet

**Description** : *Represents a color palette that can be used in message accents &raquo;*

**Layer** : 218

```tl
help.peerColorSet#26219a58 colors:Vector<int> = help.PeerColorSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>colors</mark> | [`Vector<int>`](type/int) | A list of 1-3 colors in RGB format, describing the accent color |

---

## Type

[help.PeerColorSet](type/help.PeerColorSet)

---

## Example

```php
$helpPeerColorSet = $client->help->peerColorSet(
	colors : array(92),
);
```