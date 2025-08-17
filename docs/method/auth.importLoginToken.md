# auth.importLoginToken

**Description** : *Login using a redirected login token, generated in case of DC mismatch during QR code login*

**Layer** : 211

```tl
auth.importLoginToken#95ac5ce4 token:bytes = auth.LoginToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`bytes`](type/bytes) | Login token |

---

## Result

[auth.LoginToken](type/auth.LoginToken)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_TOKEN_ALREADY_ACCEPTED** | `400` | The specified auth token was already accepted |
| **AUTH_TOKEN_EXPIRED** | `400` | The authorization token has expired |
| **AUTH_TOKEN_INVALID** | `400` | The specified auth token is invalid |
| **AUTH_TOKEN_INVALIDX** | `400` | The specified auth token is invalid |

---

## Example

```php
$authLoginToken = $client->auth->importLoginToken(
	token : '43q?LiveProtoK??',
);
```