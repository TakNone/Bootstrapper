# auth.importWebTokenAuthorization

**Description** : *Login by importing an authorization token*

**Layer** : 233

```tl
auth.importWebTokenAuthorization#2db873a9 api_id:int api_hash:string web_auth_token:string = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>api_id</mark> | [`int`](type/int) | API ID |
| <mark>api_hash</mark> | [`string`](type/string) | API hash |
| <mark>web_auth_token</mark> | [`string`](type/string) | The authorization token |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_ID_INVALID** | `400` | API ID invalid |
| **WEBAUTH_TOKEN_EXPIRED** | `400` | The specified auth token has expired |

---

## Example

```php
$authAuthorization = $client->auth->importWebTokenAuthorization(
	api_id : 23,
	api_hash : 'm1lUIYH3tzq9Bcae',
	web_auth_token : '0WFuZD6ilGjtEoe1',
);
```