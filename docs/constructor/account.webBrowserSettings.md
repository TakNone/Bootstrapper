# account.webBrowserSettings

**Layer** : 229

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
			domain : 'sI5ZwhlUoXBSTHge',
			url : 'https://docs.liveproto.dev',
			title : 'WkuKtQPeis7adDXB',
			favicon : 6749705767119098256,
		),
	),
	inapp_exceptions : array(
		$client->webDomainException(
			domain : 'YPtg9fox6WIS1F35',
			url : 'https://docs.liveproto.dev',
			title : 'b3Egv4zJHB0XZait',
			favicon : -4262358999972690015,
		),
	),
	hash : 0,
);
```