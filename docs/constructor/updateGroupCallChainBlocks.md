# updateGroupCallChainBlocks

**Description** : *Contains conference call blockchain blocks, see handling E2E group call updates &raquo;*

**Layer** : 233

```tl
updateGroupCallChainBlocks#a477288f call:InputGroupCall sub_chain_id:int blocks:Vector<bytes> next_offset:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference whose specified subchain received these blocks |
| <mark>sub_chain_id</mark> | [`int`](type/int) | 0 for the main state blockchain, 1 for the call verification subchain |
| <mark>blocks</mark> | [`Vector<bytes>`](type/bytes) | Serialized subchain blocks with the server-adjusted constructor IDs described in the subchain documentation » |
| <mark>next_offset</mark> | [`int`](type/int) | Height of the block located after the last block in blocks; the first returned block has height next_offset - blocks.length |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallChainBlocks(
	call : $client->inputGroupCall(
		id : 8578829382910248936,
		access_hash : -4389604536621970739,
	),
	sub_chain_id : 65,
	blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	next_offset : 53,
);
```