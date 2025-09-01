# broadcastRevenueTransactionWithdrawal

**Description** : *Describes a withdrawal of ad earnings &raquo;*

**Layer** : 214

```tl
broadcastRevenueTransactionWithdrawal#5a590978 flags:# pending:flags.0?true failed:flags.2?true amount:long date:int provider:string transaction_date:flags.1?int transaction_url:flags.1?string = BroadcastRevenueTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pending** | [`flags.0?true`](type/true) | Whether the withdrawal is currently pending |
| **failed** | [`flags.2?true`](type/true) | Whether the withdrawal has failed |
| <mark>amount</mark> | [`long`](type/long) | Amount withdrawn |
| <mark>date</mark> | [`int`](type/int) | Withdrawal date |
| <mark>provider</mark> | [`string`](type/string) | Payment provider name |
| **transaction_date** | [`flags.1?int`](type/int) | If neither pending nor failed are set, the transaction was completed successfully, and this field will contain the point in time (Unix timestamp) when the withdrawal was completed successfully |
| **transaction_url** | [`flags.1?string`](type/string) | If neither pending nor failed are set, the transaction was completed successfully, and this field will contain a URL where the withdrawal transaction can be viewed |

---

## Type

[BroadcastRevenueTransaction](type/BroadcastRevenueTransaction)

---

## Example

```php
$broadcastRevenueTransaction = $client->broadcastRevenueTransactionWithdrawal(
	pending : true,
	failed : true,
	amount : -1868946601852630743,
	date : 85,
	provider : 'SrfPovjYJmlWOiap',
	transaction_date : 52,
	transaction_url : 'https://docs.liveproto.dev',
);
```