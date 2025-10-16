# phone.getGroupCallChainBlocks

**Layer** : 216

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
		id : 8391384781352768046,
		access_hash : 4424685352200258479,
	),
	sub_chain_id : 48,
	offset : 0,
	limit : 72,
);
```