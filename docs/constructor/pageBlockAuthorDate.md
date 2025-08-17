# pageBlockAuthorDate

**Description** : *Author and date of creation of article*

**Layer** : 211

```tl
pageBlockAuthorDate#baafe5e0 author:RichText published_date:int = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>author</mark> | [`RichText`](type/RichText) | Author name |
| <mark>published_date</mark> | [`int`](type/int) | Date of publication |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockAuthorDate(
	author : $client->textEmpty(),
	published_date : 78,
);
```