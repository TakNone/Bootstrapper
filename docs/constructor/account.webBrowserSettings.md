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
			domain : '08Pa9fwsmyLzXxFR',
			url : 'https://docs.liveproto.dev',
			title : 'eC0jVIAs8vhWf1B3',
			favicon : -4923610541196769380,
		),
	),
	inapp_exceptions : array(
		$client->webDomainException(
			domain : 'GukSs5vBNi01EQWq',
			url : 'https://docs.liveproto.dev',
			title : 'uiC1BZSxM3kULAlz',
			favicon : 8678203398910692362,
		),
	),
	hash : 0,
);
```