# peerLocated

**Description** : *Peer geolocated nearby*

**Layer** : 218

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
		user_id : -8672137013955646208,
	),
	expires : 87,
	distance : 83,
);
```