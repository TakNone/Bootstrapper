# wallet.sendTransfer

**Layer** : 233

```tl
wallet.sendTransfer#d9e5d9e2 flags:# data_normal:bytes data_gasless:flags.0?bytes user_id:InputUser random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>data_normal</mark> | [`bytes`](type/bytes) | NOTHING |
| **data_gasless** | [`flags.0?bytes`](type/bytes) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->wallet->sendTransfer(
	data_normal : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	data_gasless : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	user_id : $client->get_input_user(user : '@TakNone'),
	random_id : 5299505028167662309,
);
```