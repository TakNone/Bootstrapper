# messageActionChangeCreator

**Description** : *Service message: emitted to a supergroup when ownership transfer completes after the old owner left the group &raquo; \(7 days after the old owner left without rejoining\), indicating that ownership has been transferred to a new owner*

**Layer** : 233

```tl
messageActionChangeCreator#e188503b new_creator_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_creator_id</mark> | [`long`](type/long) | The ID of the user who became the new owner of the group/channel |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChangeCreator(
	new_creator_id : 6595684232272268137,
);
```