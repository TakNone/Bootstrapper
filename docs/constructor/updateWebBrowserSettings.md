# updateWebBrowserSettings

**Layer** : 227

```tl
updateWebBrowserSettings#c39a2ade flags:# open_external_browser:flags.0?true display_close_button:flags.1?true = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **open_external_browser** | [`flags.0?true`](type/true) | NOTHING |
| **display_close_button** | [`flags.1?true`](type/true) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWebBrowserSettings(
	open_external_browser : true,
	display_close_button : true,
);
```