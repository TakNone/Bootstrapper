# account.passkeys

**Description** : *List of passkeys &raquo; associated to the current account*

**Layer** : 229

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
			id : 'GAXW4ainqxp7jhPb',
			name : '3qtxcLMmdFulgNIZ',
			date : 7,
			software_emoji_id : 2951068051796941659,
			last_usage_date : 94,
		),
	),
);
```