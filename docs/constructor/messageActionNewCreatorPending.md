# messageActionNewCreatorPending

**Layer** : 222

```tl
messageActionNewCreatorPending#b07ed085 new_creator_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_creator_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNewCreatorPending(
	new_creator_id : -1920248821053866306,
);
```