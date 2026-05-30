# peerLocated

**Description** : *Peer geolocated nearby*

**Layer** : 225

```tl
peerLocated#ca461b5d peer:Peer expires:int distance:int = PeerLocated;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| <mark>expires</mark> | [`int`](type/int) | Validity period of current data |
| <mark>distance</mark> | [`int`](type/int) | Distance from the peer in meters |

---

## Type

[PeerLocated](type/PeerLocated)

---

## Example

```php
$peerLocated = $client->peerLocated(
	peer : $client->peerUser(
		user_id : 6835935807506086892,
	),
	expires : 77,
	distance : 36,
);
```