# account.getWebBrowserSettings

**Layer** : 227

```tl
account.getWebBrowserSettings#56655768 hash:long = account.WebBrowserSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[account.WebBrowserSettings](type/account.WebBrowserSettings)

---

## Example

```php
$accountWebBrowserSettings = $client->account->getWebBrowserSettings(
	hash : 0,
);
```