# auth.exportLoginToken

**Description** : *Generate a login token, for login via QR code\.
The generated login token should be encoded using base64url, then shown as a tg://login?token=base64encodedtoken deep link &raquo; in the QR code*

**Layer** : 233

```tl
auth.exportLoginToken#b7e085fe api_id:int api_hash:string except_ids:Vector<long> = auth.LoginToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>api_id</mark> | [`int`](type/int) | Application identifier (see. App configuration) |
| <mark>api_hash</mark> | [`string`](type/string) | Application identifier hash (see. App configuration) |
| <mark>except_ids</mark> | [`Vector<long>`](type/long) | List of already logged-in user IDs, to prevent logging in twice with the same user |

---

## Result

[auth.LoginToken](type/auth.LoginToken)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_ID_INVALID** | `400` | API ID invalid |
| **API_ID_PUBLISHED_FLOOD** | `400` | This API id was published somewhere, you can't use it now |
| **AUTH_RESTART** | `500` | Restart the authorization process |

---

## Example

```php
$authLoginToken = $client->auth->exportLoginToken(
	api_id : 92,
	api_hash : '6sCT0xuKFiX2fSel',
	except_ids : array(-8069319394143445767),
);
```