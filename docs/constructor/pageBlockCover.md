# pageBlockCover

**Description** : *A page cover*

**Layer** : 211

```tl
pageBlockCover#39f23300 cover:PageBlock = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>cover</mark> | [`PageBlock`](type/PageBlock) | Cover |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockCover(
	cover : $client->pageBlockUnsupported(),
);
```