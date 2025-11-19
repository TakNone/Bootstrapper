# stories.togglePinned

**Description** : *Pin or unpin one or more stories*

**Layer** : 218

```tl
stories.togglePinned#9a75a1ef peer:InputPeer id:Vector<int> pinned:Bool = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to pin or unpin stories |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of stories to pin or unpin |
| <mark>pinned</mark> | [`Bool`](type/Bool) | Whether to pin or unpin the stories |

---

## Result

[Vector<int>](type/int)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$int = $client->stories->togglePinned(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(46),
	pinned : true,
);
```