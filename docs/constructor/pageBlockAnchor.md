# pageBlockAnchor

**Description** : *Link to section within the page itself \(like &lt;a href=&quot;\#target&quot;&gt;anchor&lt;/a&gt;\)*

**Layer** : 216

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
	name : 'RQaZhwKWFn97jUkX',
);
```