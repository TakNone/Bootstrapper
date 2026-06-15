# account.passkeyRegistrationOptions

**Layer** : 227

```tl
account.passkeyRegistrationOptions#e16b5ce1 options:DataJSON = account.PasskeyRegistrationOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>options</mark> | [`DataJSON`](type/DataJSON) | NOTHING |

---

## Type

[account.PasskeyRegistrationOptions](type/account.PasskeyRegistrationOptions)

---

## Example

```php
$accountPasskeyRegistrationOptions = $client->account->passkeyRegistrationOptions(
	options : $client->dataJSON(
		data : '8LClFrD0XJu57zkd',
	),
);
```