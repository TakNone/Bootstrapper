# updateMessageID

**Description** : *Sent message with random\_id client identifier was assigned an identifier*

**Layer** : 233

```tl
updateMessageID#4e90bfd6 id:int random_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | id identifier of a respective Message |
| <mark>random_id</mark> | [`long`](type/long) | Previously transferred client random_id identifier. See here » for more info on random ID deduplication and updateMessageID mapping |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessageID(
	id : 61,
	random_id : 8935173530562754356,
);
```