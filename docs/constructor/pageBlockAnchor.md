# pageBlockAnchor

**Description** : *Link to section within the page itself (like <a href="#target">anchor</a>)*

**Layer** : 211

```tl
pageBlockAnchor#ce0d37b0 name:string = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of target section |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockAnchor(
	name : '9xDlCgzdomK6skHQ',
);
```