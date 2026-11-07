# topPeer

**Description** : *Top peer*

**Layer** : 233

```tl
topPeer#edcdc05b peer:Peer rating:double = TopPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| <mark>rating</mark> | [`double`](type/double) | Rating as computed in top peer rating » |

---

## Type

[TopPeer](type/TopPeer)

---

## Example

```php
$topPeer = $client->topPeer(
	peer : $client->peerUser(
		user_id : 6738509418434884606,
	),
	rating : -2038381.8447265625,
);
```