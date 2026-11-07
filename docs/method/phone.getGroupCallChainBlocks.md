# phone.getGroupCallChainBlocks

**Description** : *Fetch blocks from a conference call subchain &raquo;; handle the returned updateGroupCallChainBlocks as specified here &raquo;*

**Layer** : 229

```tl
phone.getGroupCallChainBlocks#ee9f88a6 call:InputGroupCall sub_chain_id:int offset:int limit:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference whose subchain blocks should be fetched |
| <mark>sub_chain_id</mark> | [`int`](type/int) | 0 for the main state blockchain, 1 for the call verification subchain |
| <mark>offset</mark> | [`int`](type/int) | Fetch blocks starting from this height; pass -1 to fetch the latest block |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of blocks to return in this call, see pagination, max 100 |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->getGroupCallChainBlocks(
	call : $client->inputGroupCall(
		id : -954944796107454371,
		access_hash : 6150139128700340339,
	),
	sub_chain_id : 65,
	offset : 0,
	limit : 69,
);
```