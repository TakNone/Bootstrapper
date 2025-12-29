# updateGroupCallChainBlocks

**Description** : *Contains updates to the blockchain of a conference call, see here &raquo; for more info*

**Layer** : 218

```tl
updateGroupCallChainBlocks#a477288f call:InputGroupCall sub_chain_id:int blocks:Vector<bytes> next_offset:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The conference call |
| <mark>sub_chain_id</mark> | [`int`](type/int) | Subchain ID |
| <mark>blocks</mark> | [`Vector<bytes>`](type/bytes) | Blocks |
| <mark>next_offset</mark> | [`int`](type/int) | Offset of the next block |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallChainBlocks(
	call : $client->inputGroupCall(
		id : -3925718787316216704,
		access_hash : 79811209235494386,
	),
	sub_chain_id : 96,
	blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	next_offset : 98,
);
```