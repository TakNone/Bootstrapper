# account.webBrowserSettings

**Layer** : 227

```tl
account.webBrowserSettings#79eb8cb3 flags:# open_external_browser:flags.0?true display_close_button:flags.1?true external_exceptions:Vector<WebDomainException> inapp_exceptions:Vector<WebDomainException> hash:long = account.WebBrowserSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **open_external_browser** | [`flags.0?true`](type/true) | NOTHING |
| **display_close_button** | [`flags.1?true`](type/true) | NOTHING |
| <mark>external_exceptions</mark> | [`Vector<WebDomainException>`](type/WebDomainException) | NOTHING |
| <mark>inapp_exceptions</mark> | [`Vector<WebDomainException>`](type/WebDomainException) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Type

[account.WebBrowserSettings](type/account.WebBrowserSettings)

---

## Example

```php
$accountWebBrowserSettings = $client->account->webBrowserSettings(
	open_external_browser : true,
	display_close_button : true,
	external_exceptions : array(
		$client->webDomainException(
			domain : 'ruXqoZMyt5CW1INl',
			url : 'https://docs.liveproto.dev',
			title : 'UnKXHx120fZMIY3i',
			favicon : -8227313773917697851,
		),
	),
	inapp_exceptions : array(
		$client->webDomainException(
			domain : 'NXPTiKvgdEOb65q0',
			url : 'https://docs.liveproto.dev',
			title : 'Gvk7wPzhcSmxnHD9',
			favicon : 3240425451662751987,
		),
	),
	hash : 0,
);
```