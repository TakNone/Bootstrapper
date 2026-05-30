# account.passkeys

**Layer** : 222

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
			id : 'N48pI9TxVSiDhPU7',
			name : 'GtyWV74jeFqn9bo5',
			date : 26,
			software_emoji_id : 5543868756916393465,
			last_usage_date : 52,
		),
	),
);
```