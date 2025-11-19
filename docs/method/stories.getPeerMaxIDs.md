# stories.getPeerMaxIDs

**Description** : *Get the IDs of the maximum read stories for a set of peers*

**Layer** : 218

```tl
stories.getPeerMaxIDs#78499170 id:Vector<InputPeer> = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputPeer>`](type/InputPeer) | Peers |

---

## Result

[Vector<int>](type/int)

---

## Example

```php
$int = $client->stories->getPeerMaxIDs(
	id : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```