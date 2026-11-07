# messageActionGramTransfer

**Layer** : 233

```tl
messageActionGramTransfer#9329ea33 flags:# comment_encrypted:flags.1?true amount:long peer_address:string transaction_id:string comment:flags.0?string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **comment_encrypted** | [`flags.1?true`](type/true) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |
| <mark>peer_address</mark> | [`string`](type/string) | NOTHING |
| <mark>transaction_id</mark> | [`string`](type/string) | NOTHING |
| **comment** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGramTransfer(
	comment_encrypted : true,
	amount : 7703297639818365106,
	peer_address : 'ZqiBOD9Hwt0s8cWg',
	transaction_id : 'kZbhH5vOawXe78pl',
	comment : 'ebvWj4NgkzO3UPBo',
);
```