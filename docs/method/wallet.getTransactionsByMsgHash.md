# wallet.getTransactionsByMsgHash

**Layer** : 233

```tl
wallet.getTransactionsByMsgHash#a6bb795d msg_hash:Vector<string> = wallet.Transactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_hash</mark> | [`Vector<string>`](type/string) | NOTHING |

---

## Result

[wallet.Transactions](type/wallet.Transactions)

---

## Example

```php
$walletTransactions = $client->wallet->getTransactionsByMsgHash(
	msg_hash : array('3gybnaRXN4QdOMj9'),
);
```