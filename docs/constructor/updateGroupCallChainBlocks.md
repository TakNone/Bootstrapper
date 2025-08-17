# updateGroupCallChainBlocks

**Layer** : 211

```tl
updateGroupCallChainBlocks#a477288f call:InputGroupCall sub_chain_id:int blocks:Vector<bytes> next_offset:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>sub_chain_id</mark> | [`int`](type/int) | NOTHING |
| <mark>blocks</mark> | [`Vector<bytes>`](type/bytes) | NOTHING |
| <mark>next_offset</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallChainBlocks(
	call : $client->inputGroupCall(
		id : 155613454053101169,
		access_hash : -6149326156246879981,
	),
	sub_chain_id : 73,
	blocks : array('?eQ?LiveProtox?Ab'),
	next_offset : 6,
);
```