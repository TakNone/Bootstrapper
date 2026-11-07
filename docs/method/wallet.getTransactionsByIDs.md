# wallet.getTransactionsByIDs

**Layer** : 233

```tl
wallet.getTransactionsByIDs#811ceab6 id:Vector<string> = wallet.Transactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<string>`](type/string) | NOTHING |

---

## Result

[wallet.Transactions](type/wallet.Transactions)

---

## Example

```php
$walletTransactions = $client->wallet->getTransactionsByIDs(
	id : array('xM1vAjDOCbUztJs4'),
);
```