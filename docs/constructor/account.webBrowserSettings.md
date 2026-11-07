# account.webBrowserSettings

**Layer** : 233

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
			domain : 'cwdXy9uTxRIjgNCk',
			url : 'https://docs.liveproto.dev',
			title : 'wU0eB6kqyfc3WD7C',
			favicon : -214903916488146999,
		),
	),
	inapp_exceptions : array(
		$client->webDomainException(
			domain : '3JYg4aqXK9iMzORo',
			url : 'https://docs.liveproto.dev',
			title : 'dTIKq6vGVRuy45WX',
			favicon : -156523214780977955,
		),
	),
	hash : 0,
);
```