# messages.declineUrlAuth

**Description** : *Decline an incoming OAuth authorization request &raquo;, notifying the server that the user refused the login request*

**Layer** : 229

```tl
messages.declineUrlAuth#35436bbc url:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | The OAuth deep link from the OAUTH_REQUEST push notification or the oauth_request web event |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **URL_INVALID** | `400` | Invalid URL provided |

---

## Example

```php
$bool = $client->messages->declineUrlAuth(
	url : 'https://docs.liveproto.dev',
);
```