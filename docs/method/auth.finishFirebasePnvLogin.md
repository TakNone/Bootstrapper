# auth.finishFirebasePnvLogin

**Layer** : 229

```tl
auth.finishFirebasePnvLogin#2c85094c google_token:string = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>google_token</mark> | [`string`](type/string) | NOTHING |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Example

```php
$authAuthorization = $client->auth->finishFirebasePnvLogin(
	google_token : '6WGT89bENHSw0PAM',
);
```