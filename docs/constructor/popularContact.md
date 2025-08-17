# popularContact

**Description** : *Popular contact*

**Layer** : 211

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
	client_id : -639153003547607673,
	importers : 20,
);
```