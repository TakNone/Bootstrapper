# starGiftCollection

**Description** : *Represents a star gift collection &raquo;*

**Layer** : 218

```tl
starGiftCollection#9d6b13b0 flags:# collection_id:int title:string icon:flags.0?Document gifts_count:int hash:long = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>collection_id</mark> | [`int`](type/int) | The ID of the collection |
| <mark>title</mark> | [`string`](type/string) | Title of the collection |
| **icon** | [`flags.0?Document`](type/Document) | Optional icon for the collection, taken from the first gift in the collection |
| <mark>gifts_count</mark> | [`int`](type/int) | Number of gifts in the collection |
| <mark>hash</mark> | [`long`](type/long) | Field to use instead of collection_id when generating the hash to pass to payments.getStarGiftCollections |

---

## Type

[StarGiftCollection](type/StarGiftCollection)

---

## Example

```php
$starGiftCollection = $client->starGiftCollection(
	collection_id : 35,
	title : '17qKY8UZdwThr4jH',
	icon : $client->documentEmpty(
		id : 218025337467666389,
	),
	gifts_count : 81,
	hash : 0,
);
```