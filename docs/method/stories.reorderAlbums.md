# stories.reorderAlbums

**Description** : *Reorder story albums on a profile &raquo;*

**Layer** : 218

```tl
stories.reorderAlbums#8535fbd9 peer:InputPeer order:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the albums are located |
| <mark>order</mark> | [`Vector<int>`](type/int) | New order of the albums |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->stories->reorderAlbums(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	order : array(15),
);
```