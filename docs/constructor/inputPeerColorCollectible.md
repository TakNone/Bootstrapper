# inputPeerColorCollectible

**Description** : *Represents a color palette &raquo; associated to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 229

```tl
inputPeerColorCollectible#b8ea86a9 collectible_id:long = PeerColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>collectible_id</mark> | [`long`](type/long) | ID of the collectible gift » |

---

## Type

[PeerColor](type/PeerColor)

---

## Example

```php
$peerColor = $client->inputPeerColorCollectible(
	collectible_id : -2900938618035049136,
);
```