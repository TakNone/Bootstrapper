# payments.starGiftDepositPayload

**Layer** : 233

```tl
payments.starGiftDepositPayload#725bb4eb nft_address:string payload:bytes amount:long = payments.StarGiftDepositPayload;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>nft_address</mark> | [`string`](type/string) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[payments.StarGiftDepositPayload](type/payments.StarGiftDepositPayload)

---

## Example

```php
$paymentsStarGiftDepositPayload = $client->payments->starGiftDepositPayload(
	nft_address : 'I1X6dMUQeJL9GhsO',
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	amount : -7417499873121045540,
);
```