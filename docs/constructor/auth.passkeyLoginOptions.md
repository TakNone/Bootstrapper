# auth.passkeyLoginOptions

**Layer** : 222

```tl
auth.passkeyLoginOptions#e2037789 options:DataJSON = auth.PasskeyLoginOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>options</mark> | [`DataJSON`](type/DataJSON) | NOTHING |

---

## Type

[auth.PasskeyLoginOptions](type/auth.PasskeyLoginOptions)

---

## Example

```php
$authPasskeyLoginOptions = $client->auth->passkeyLoginOptions(
	options : $client->dataJSON(
		data : 'VK4dMZm2Ok7iRHUf',
	),
);
```