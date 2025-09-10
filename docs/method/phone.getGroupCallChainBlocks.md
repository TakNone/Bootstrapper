# phone.getGroupCallChainBlocks

**Layer** : 214

```tl
phone.getGroupCallChainBlocks#ee9f88a6 call:InputGroupCall sub_chain_id:int offset:int limit:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>sub_chain_id</mark> | [`int`](type/int) | NOTHING |
| <mark>offset</mark> | [`int`](type/int) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->getGroupCallChainBlocks(
	call : $client->inputGroupCall(
		id : 6172986171757395704,
		access_hash : 1289433514891040317,
	),
	sub_chain_id : 39,
	offset : 0,
	limit : 55,
);
```