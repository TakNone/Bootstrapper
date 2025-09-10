# updateGroupCallChainBlocks

**Layer** : 214

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
		id : -5182618430100225206,
		access_hash : 8428834931459210379,
	),
	sub_chain_id : 28,
	blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	next_offset : 76,
);
```