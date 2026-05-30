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
			id : 'Vn6RJLzmtu0NcG1f',
			name : 'k4vUBE2tAMorSTW5',
			date : 34,
			software_emoji_id : -6950095290621206699,
			last_usage_date : 91,
		),
	),
);
```