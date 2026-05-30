# account.passkeys

**Layer** : 225

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
			id : '8Wr9pGOf2sbTAlPd',
			name : '4hKrw7okm26FxMvA',
			date : 73,
			software_emoji_id : -2711561138055829296,
			last_usage_date : 72,
		),
	),
);
```