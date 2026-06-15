# account.updateWebBrowserSettings

**Layer** : 227

```tl
account.updateWebBrowserSettings#9adf82fe flags:# open_external_browser:flags.0?true display_close_button:flags.1?true = account.WebBrowserSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **open_external_browser** | [`flags.0?true`](type/true) | NOTHING |
| **display_close_button** | [`flags.1?true`](type/true) | NOTHING |

---

## Result

[account.WebBrowserSettings](type/account.WebBrowserSettings)

---

## Example

```php
$accountWebBrowserSettings = $client->account->updateWebBrowserSettings(
	open_external_browser : true,
	display_close_button : true,
);
```