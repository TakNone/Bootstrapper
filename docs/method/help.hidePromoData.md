# help.hidePromoData

**Description** : *Hide MTProxy/Public Service Announcement information*

**Layer** : 211

```tl
help.hidePromoData#1e251c95 peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer to hide |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->help->hidePromoData(
	peer : $client->inputPeerEmpty(),
);
```