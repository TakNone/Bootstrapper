# auth.initPasskeyLogin

**Layer** : 225

```tl
auth.initPasskeyLogin#518ad0b7 api_id:int api_hash:string = auth.PasskeyLoginOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>api_id</mark> | [`int`](type/int) | NOTHING |
| <mark>api_hash</mark> | [`string`](type/string) | NOTHING |

---

## Result

[auth.PasskeyLoginOptions](type/auth.PasskeyLoginOptions)

---

## Example

```php
$authPasskeyLoginOptions = $client->auth->initPasskeyLogin(
	api_id : 78,
	api_hash : 'XxI2mK9sUf8ilHNr',
);
```