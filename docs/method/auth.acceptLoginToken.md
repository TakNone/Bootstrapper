# auth.acceptLoginToken

**Description** : *Accept QR code login token, logging in the app that generated it*

**Layer** : 211

```tl
auth.acceptLoginToken#e894ad4d token:bytes = Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`bytes`](type/bytes) | Login token embedded in QR code, for more info, see login via QR code |

---

## Result

[Authorization](type/Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_TOKEN_ALREADY_ACCEPTED** | `400` | The specified auth token was already accepted |
| **AUTH_TOKEN_EXCEPTION** | `400` | An error occurred while importing the auth token |
| **AUTH_TOKEN_EXPIRED** | `400` | The authorization token has expired |
| **AUTH_TOKEN_INVALIDX** | `400` | The specified auth token is invalid |

---

## Example

```php
$authorization = $client->auth->acceptLoginToken(
	token : 'e>?uLiveProto??&?',
);
```