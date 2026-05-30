# account.passkeyRegistrationOptions

**Layer** : 222

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
		data : 'Dw5IqbzvtKNMYc0B',
	),
);
```