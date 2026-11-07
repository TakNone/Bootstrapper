# payments.depositStarGift

**Layer** : 233

```tl
payments.depositStarGift#c0a2ea9f flags:# hide_sender:flags.0?true peer:InputPeer slug:string = payments.StarGiftDepositPayload;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **hide_sender** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Result

[payments.StarGiftDepositPayload](type/payments.StarGiftDepositPayload)

---

## Example

```php
$paymentsStarGiftDepositPayload = $client->payments->depositStarGift(
	hide_sender : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	slug : 'uEXt9aZiHq8CQWbh',
);
```