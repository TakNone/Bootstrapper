# messageActionNewCreatorPending

**Description** : *Service message: emitted to a supergroup when the group/channel creator leaves the group &raquo;, indicating that ownership transfer is pending\. The new\_creator\_id user will become the new owner after 7 days if the old owner does not rejoin*

**Layer** : 229

```tl
messageActionNewCreatorPending#b07ed085 new_creator_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_creator_id</mark> | [`long`](type/long) | The ID of the user who will become the new owner of the group/channel after 7 days if the old owner does not rejoin |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNewCreatorPending(
	new_creator_id : -711206774611637876,
);
```