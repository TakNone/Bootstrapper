# peerSelfLocated

**Description** : *Current peer*

**Layer** : 211

```tl
peerSelfLocated#f8ec284b expires:int = PeerLocated;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | Expiry of geolocation info for current peer |

---

## Type

[PeerLocated](type/PeerLocated)

---

## Example

```php
$peerLocated = $client->peerSelfLocated(
	expires : 58,
);
```