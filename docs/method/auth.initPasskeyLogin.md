# auth.initPasskeyLogin

**Description** : *Initialize login with a passkey over an unauthenticated connection, see here &raquo; for more info*

**Layer** : 233

```tl
auth.initPasskeyLogin#518ad0b7 api_id:int api_hash:string = auth.PasskeyLoginOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>api_id</mark> | [`int`](type/int) | Application identifier (see App configuration) |
| <mark>api_hash</mark> | [`string`](type/string) | Application identifier hash (see App configuration) |

---

## Result

[auth.PasskeyLoginOptions](type/auth.PasskeyLoginOptions)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_ID_INVALID** | `400` | API ID invalid |
| **AUTH_RESTART** | `500` | Restart the authorization process |

---

## Example

```php
$authPasskeyLoginOptions = $client->auth->initPasskeyLogin(
	api_id : 55,
	api_hash : 'ifrD4ZAjV1ymC8ph',
);
```