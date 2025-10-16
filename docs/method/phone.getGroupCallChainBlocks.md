# phone.getGroupCallChainBlocks

**Description** : *Fetch the blocks of a conference blockchain &raquo;*

**Layer** : 216

```tl
phone.getGroupCallChainBlocks#ee9f88a6 call:InputGroupCall sub_chain_id:int offset:int limit:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The conference |
| <mark>sub_chain_id</mark> | [`int`](type/int) | Subchain ID |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of blocks to return in this call, see pagination |

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
		id : 5247834515791931841,
		access_hash : -5967206262483703317,
	),
	sub_chain_id : 82,
	offset : 0,
	limit : 44,
);
```