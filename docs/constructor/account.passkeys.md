# account.passkeys

**Description** : *List of passkeys &raquo; associated to the current account*

**Layer** : 233

```tl
account.passkeys#f8e0aa1c passkeys:Vector<Passkey> = account.Passkeys;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>passkeys</mark> | [`Vector<Passkey>`](type/Passkey) | List of passkeys that can be used to log into the current account |

---

## Type

[account.Passkeys](type/account.Passkeys)

---

## Example

```php
$accountPasskeys = $client->account->passkeys(
	passkeys : array(
		$client->passkey(
			id : 'iMIqHWnzmyedVUkb',
			name : 'oTGxkMIhB4KmjVUL',
			date : 58,
			software_emoji_id : 8979996605554845694,
			last_usage_date : 9,
		),
	),
);
```