# popularContact

**Description** : *Popular contact*

**Layer** : 227

```tl
popularContact#5ce14175 client_id:long importers:int = PopularContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_id</mark> | [`long`](type/long) | Contact identifier |
| <mark>importers</mark> | [`int`](type/int) | How many people imported this contact |

---

## Type

[PopularContact](type/PopularContact)

---

## Example

```php
$popularContact = $client->popularContact(
	client_id : -1428362727374633173,
	importers : 96,
);
```