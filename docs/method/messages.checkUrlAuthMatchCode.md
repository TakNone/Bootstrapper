# messages.checkUrlAuthMatchCode

**Description** : *Validate the match code selected by the user against the code shown on the login page, as part of the OAuth authorization flow &raquo;*

**Layer** : 229

```tl
messages.checkUrlAuthMatchCode#c9a47b0b url:string match_code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | The OAuth deep link |
| <mark>match_code</mark> | [`string`](type/string) | The emoji or code selected by the user from the list in urlAuthResultRequest.match_codes |

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
$bool = $client->messages->checkUrlAuthMatchCode(
	url : 'https://docs.liveproto.dev',
	match_code : 'kQf9OBJ1i2FcI085',
);
```