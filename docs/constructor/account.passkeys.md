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
			id : 'KPZ5M8SV2gQ6ufcq',
			name : 'MGaoFlTfSOEnxtgr',
			date : 58,
			software_emoji_id : 8993073645148196095,
			last_usage_date : 86,
		),
	),
);
```