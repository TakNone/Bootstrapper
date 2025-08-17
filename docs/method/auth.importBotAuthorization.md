# auth.importBotAuthorization

**Description** : *Login as a bot*

**Layer** : 211

```tl
auth.importBotAuthorization#67a3ff2c flags:int api_id:int api_hash:string bot_auth_token:string = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`int`](type/int) | Reserved for future use |
| <mark>api_id</mark> | [`int`](type/int) | Application identifier (see. App configuration) |
| <mark>api_hash</mark> | [`string`](type/string) | Application identifier hash (see. App configuration) |
| <mark>bot_auth_token</mark> | [`string`](type/string) | Bot token (see bots) |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ACCESS_TOKEN_EXPIRED** | `400` | Access token expired |
| **ACCESS_TOKEN_INVALID** | `400` | Access token invalid |
| **API_ID_INVALID** | `400` | API ID invalid |
| **API_ID_PUBLISHED_FLOOD** | `400` | This API id was published somewhere, you can't use it now |

---

## Example

```php
$authAuthorization = $client->auth->importBotAuthorization(
	flags : 62,
	api_id : 54,
	api_hash : 'qvoDVR6AjQ71aOWS',
	bot_auth_token : 'gPHLmI1baQ9D3FCB',
);
```