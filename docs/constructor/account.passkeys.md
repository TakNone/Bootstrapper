# account.passkeys

**Layer** : 227

```tl
account.passkeys#f8e0aa1c passkeys:Vector<Passkey> = account.Passkeys;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>passkeys</mark> | [`Vector<Passkey>`](type/Passkey) | NOTHING |

---

## Type

[account.Passkeys](type/account.Passkeys)

---

## Example

```php
$accountPasskeys = $client->account->passkeys(
	passkeys : array(
		$client->passkey(
			id : 'wHhCov30Gd7I9nxz',
			name : 'vZh0sGaYVi1dLRmu',
			date : 62,
			software_emoji_id : 8122959544195627637,
			last_usage_date : 47,
		),
	),
);
```