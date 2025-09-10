# messages.getWebPage

**Description** : *Get instant view page*

**Layer** : 214

```tl
messages.getWebPage#8d9692a3 url:string hash:int = messages.WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | URL of IV page to fetch |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here. Note: the usual hash generation algorithm cannot be used in this case, please re-use the webPage.hash field returned by a previous call to the method, or pass 0 if this is the first call or if the previous call did not return a webPage |

---

## Result

[messages.WebPage](type/messages.WebPage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **WC_CONVERT_URL_INVALID** | `400` | WC convert URL invalid |

---

## Example

```php
$messagesWebPage = $client->messages->getWebPage(
	url : 'https://docs.liveproto.dev',
	hash : 0,
);
```