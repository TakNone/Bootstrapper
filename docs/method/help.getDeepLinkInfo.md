# help.getDeepLinkInfo

**Description** : *Get info about an unsupported deep link, see here for more info &raquo;*

**Layer** : 211

```tl
help.getDeepLinkInfo#3fedc75f path:string = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>path</mark> | [`string`](type/string) | Path component of a tg: link |

---

## Result

[help.DeepLinkInfo](type/help.DeepLinkInfo)

---

## Example

```php
$helpDeepLinkInfo = $client->help->getDeepLinkInfo(
	path : 'OLckWgsQX7vVRAlC',
);
```