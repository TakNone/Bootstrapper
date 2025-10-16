# messages.readSavedHistory

**Layer** : 216

```tl
messages.readSavedHistory#ba4a3b5b parent_peer:InputPeer peer:InputPeer max_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>parent_peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>max_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->readSavedHistory(
	parent_peer : $client->inputPeerEmpty(),
	peer : $client->inputPeerEmpty(),
	max_id : 28,
);
```