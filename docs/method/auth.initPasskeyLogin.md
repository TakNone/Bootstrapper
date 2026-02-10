# auth.initPasskeyLogin

**Layer** : 222

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
	api_id : 86,
	api_hash : 'xlDF0gSpzeQBmvNs',
);
```