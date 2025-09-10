# topPeer

**Description** : *Top peer*

**Layer** : 214

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
		user_id : 6933980928393097469,
	),
	rating : -804667.78515625,
);
```