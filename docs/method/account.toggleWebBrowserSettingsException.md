# account.toggleWebBrowserSettingsException

**Layer** : 227

```tl
account.toggleWebBrowserSettingsException#60ed4229 flags:# delete:flags.1?true open_external_browser:flags.0?Bool url:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **delete** | [`flags.1?true`](type/true) | NOTHING |
| **open_external_browser** | [`flags.0?Bool`](type/Bool) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->account->toggleWebBrowserSettingsException(
	delete : true,
	open_external_browser : true,
	url : 'https://docs.liveproto.dev',
);
```